<?php
ini_set('display_errors', 0);
header('Content-Type: application/json');
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $conn->prepare("SELECT id, name FROM categories ORDER BY name ASC");
    $stmt->execute();
    $result = $stmt->get_result();

    $categories = [];
    while ($row = $result->fetch_assoc()) {
        $categories[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'productCount' => 0 // Placeholder, can be calculated later if needed
        ];
    }

    echo json_encode(['success' => true, 'categories' => $categories]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
