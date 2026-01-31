<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once '../../config/connection.php';

try {
    // Query to get all products from inventory
    // Make sure to select: id, sku, name, price
    $query = "SELECT id, sku, name, price FROM inventory";
    
    $result = $conn->query($query);
    
    if (!$result) {
        throw new Exception($conn->error);
    }
    
    $products = array();
    
    while ($row = $result->fetch_assoc()) {
        $products[] = array(
            'id' => $row['id'],
            'sku' => trim($row['sku']), // Important: trim whitespace
            'name' => $row['name'],
            'price' => floatval($row['price'])
        );
    }
    
    echo json_encode($products);
    
} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage()));
}

$conn->close();
?>