<?php
include '../utils/skuUtils.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$sku = $_POST['sku'] ?? '';
$amount = (int)($_POST['amount'] ?? 0);

if (empty($sku) || $amount <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid SKU or amount']);
    exit;
}

// Extract base SKU and size from the variant SKU (e.g., "BASE-S" -> base: "BASE", size: "S")
$skuParts = explode('-', $sku);
$size = array_pop($skuParts); // Last part is size
$baseSku = implode('-', $skuParts); // Rest is base SKU

try {
    // Include database connection
    include '../../config/connection.php';

    // Fetch current size_quantities for the base product
    $stmt = $conn->prepare("SELECT size_quantities FROM inventory WHERE sku = ?");
    $stmt->bind_param("s", $baseSku);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo json_encode(['success' => false, 'message' => 'Product not found']);
        exit;
    }

    $row = $result->fetch_assoc();
    $sizeQuantities = json_decode($row['size_quantities'] ?? '{}', true);

    // Update the quantity for the specific size
    if (!isset($sizeQuantities[$size])) {
        $sizeQuantities[$size] = 0;
    }
    $sizeQuantities[$size] += $amount;

    // Encode back to JSON
    $updatedSizeQuantities = json_encode($sizeQuantities);

    // Update the database
    $updateStmt = $conn->prepare("UPDATE inventory SET size_quantities = ? WHERE sku = ?");
    $updateStmt->bind_param("ss", $updatedSizeQuantities, $baseSku);

    if ($updateStmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Quantity added successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update quantity']);
    }

    $stmt->close();
    $updateStmt->close();
    $conn->close();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
