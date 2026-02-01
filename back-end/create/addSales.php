<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../../config/connection.php';

$customer_name = $_POST['customerName'] ?? '';
$total_amount = $_POST['totalAmount'] ?? 0;
$payment_method = $_POST['paymentMethod'] ?? '';
$products = $_POST['products'] ?? [];

$conn->begin_transaction();

try {
    // Generate 7-digit sale id
    $sale_id = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);

    // Insert into sales table
    $stmt = $conn->prepare("INSERT INTO sales (id, customer_name, total_amount, payment_method) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $sale_id, $customer_name, $total_amount, $payment_method);
    $stmt->execute();

    // Insert each product into sale_items table
    $stmt_item = $conn->prepare("INSERT INTO sale_items (id, sale_id, product_id, quantity, price, size) VALUES (?, ?, ?, ?, ?, ?)");
    foreach ($products as $product) {
        $item_id = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        $product_id = $product['id'] ?? 0;
        $quantity = $product['quantity'] ?? 0;
        $price = $product['price'] ?? 0;
        $size = $product['size'] ?? 'N/A';
        $stmt_item->bind_param("ssiids", $item_id, $sale_id, $product_id, $quantity, $price, $size);
        $stmt_item->execute();
    }

    $conn->commit();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    $conn->rollback();
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
