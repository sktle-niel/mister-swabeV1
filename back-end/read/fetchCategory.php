<?php
ini_set('display_errors', 0);
header('Content-Type: application/json');
include '../../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $conn->prepare("SELECT c.id, c.name, COUNT(i.id) as productCount FROM categories c LEFT JOIN inventory i ON c.name = i.category GROUP BY c.id, c.name ORDER BY c.name ASC");
    $stmt->execute();
    $result = $stmt->get_result();

    $categories = [];
    while ($row = $result->fetch_assoc()) {
        $categories[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'productCount' => (int)$row['productCount']
        ];
    }

    echo json_encode(['success' => true, 'categories' => $categories]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
