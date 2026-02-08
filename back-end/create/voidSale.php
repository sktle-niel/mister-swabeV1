<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
require_once '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$sale_id = $_POST['sale_id'] ?? null;
$void_reason = $_POST['void_reason'] ?? null;

if (!$sale_id || !$void_reason) {
    echo json_encode(['success' => false, 'message' => 'Sale ID and void reason are required']);
    exit;
}

// Start transaction
$conn->begin_transaction();

try {
    // Step 1: Get all sale items for this sale
    $check_sql = "SELECT si.product_id, si.quantity, si.size 
                  FROM sale_items si 
                  WHERE si.sale_id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("i", $sale_id);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    $voided_at = date('Y-m-d H:i:s');
    $insert_sql = "INSERT INTO void_products (id, sale_id, product_id, quantity, size, void_reason, voided_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);

    if (!$insert_stmt) {
        throw new Exception('Failed to prepare insert statement: ' . $conn->error);
    }

    $inserted_count = 0;
    // Step 2: Save each sale item to void_products table (BEFORE deleting)
    while ($row = $check_result->fetch_assoc()) {
        $random_id = rand(1000000, 9999999); // Generate 7-digit random ID
        $insert_stmt->bind_param("iisisss",
            $random_id,
            $sale_id,
            $row['product_id'],
            $row['quantity'],
            $row['size'],
            $void_reason,
            $voided_at
        );

        if (!$insert_stmt->execute()) {
            throw new Exception('Failed to save void record for product_id: ' . $row['product_id'] . ' - ' . $insert_stmt->error);
        }
        $inserted_count++;
    }

    if ($inserted_count == 0) {
        throw new Exception('No records were inserted into void_products');
    }
    $check_stmt->close();
    
    // Step 3: Delete from sale_items (after saving to void_products)
    $delete_items_sql = "DELETE FROM sale_items WHERE sale_id = ?";
    $delete_items_stmt = $conn->prepare($delete_items_sql);
    $delete_items_stmt->bind_param("i", $sale_id);
    if (!$delete_items_stmt->execute()) {
        throw new Exception('Failed to delete sale items');
    }
    
    // Step 4: Delete from sales
    $delete_sale_sql = "DELETE FROM sales WHERE id = ?";
    $delete_sale_stmt = $conn->prepare($delete_sale_sql);
    $delete_sale_stmt->bind_param("i", $sale_id);
    if (!$delete_sale_stmt->execute()) {
        throw new Exception('Failed to delete sale');
    }
    
    // Commit transaction - all changes saved
    $conn->commit();
    echo json_encode(['success' => true, 'message' => 'Sale voided successfully and saved to void_products', 'inserted_count' => $inserted_count]);
    
} catch (Exception $e) {
    // Rollback on error - nothing is saved
    $conn->rollback();
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

// Close remaining statements and connection
if (isset($insert_stmt)) $insert_stmt->close();
if (isset($delete_items_stmt)) $delete_items_stmt->close();
if (isset($delete_sale_stmt)) $delete_sale_stmt->close();
$conn->close();
?>