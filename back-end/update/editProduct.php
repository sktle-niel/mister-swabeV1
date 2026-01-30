<?php
ini_set('display_errors', 0);
error_reporting(0);

include '../../config/connection.php';

function editProduct($data) {
    global $conn;

    // Sanitize inputs
    $originalSku = mysqli_real_escape_string($conn, $data['originalSku']);
    $name = mysqli_real_escape_string($conn, $data['name']);
    $sku = mysqli_real_escape_string($conn, $data['sku']);

    // Handle category - can be either ID or name
    $category = $data['category'];
    if (is_numeric($category)) {
        // It's a category ID
        $category = intval($category);
    } else {
        // It's a category name - look up the ID
        $categoryName = mysqli_real_escape_string($conn, $category);
        $categorySql = "SELECT id FROM categories WHERE name = '$categoryName' LIMIT 1";
        $categoryResult = $conn->query($categorySql);
        if ($categoryResult && $categoryResult->num_rows > 0) {
            $categoryRow = $categoryResult->fetch_assoc();
            $category = intval($categoryRow['id']);
        } else {
            return ['success' => false, 'message' => 'Invalid category'];
        }
    }

    $price = floatval($data['price']);
    $stock = intval($data['stock']);
    $size = mysqli_real_escape_string($conn, $data['size']);

    // Handle image uploads if provided
    $images = [];
    if (isset($_FILES['editProductImages']) && is_array($_FILES['editProductImages']['name'])) {
        $fileCount = count($_FILES['editProductImages']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $error = $_FILES['editProductImages']['error'][$i];
            if ($error === UPLOAD_ERR_OK) {
                // Validate file size (4MB max)
                $fileSize = $_FILES['editProductImages']['size'][$i];
                if ($fileSize > 4 * 1024 * 1024) {
                    return ['success' => false, 'message' => 'Image file size exceeds 4MB limit'];
                }

                // Validate file type
                $type = $_FILES['editProductImages']['type'][$i];
                $allowedTypes = ['image/jpeg', 'image/png'];
                if (!in_array($type, $allowedTypes)) {
                    return ['success' => false, 'message' => 'Invalid image file type. Only PNG and JPG are allowed.'];
                }

                // Generate unique filename
                $name = $_FILES['editProductImages']['name'][$i];
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $filename = uniqid() . '.' . $extension;
                $uploadPath = '../../uploads/' . $filename;

                // Ensure uploads directory exists and is writable
                $uploadDir = dirname($uploadPath);
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                // Move uploaded file
                $tmpName = $_FILES['editProductImages']['tmp_name'][$i];
                if (move_uploaded_file($tmpName, $uploadPath)) {
                    $images[] = 'uploads/' . $filename;
                } else {
                    return ['success' => false, 'message' => 'Failed to upload image'];
                }
            } elseif ($error !== UPLOAD_ERR_NO_FILE) {
                return ['success' => false, 'message' => 'Upload error: ' . $error];
            }
        }
    }

    // Determine status
    if ($stock == 0) {
        $status = 'Out of Stock';
    } elseif ($stock <= 10) {
        $status = 'Low Stock';
    } else {
        $status = 'In Stock';
    }

    // Check if new SKU already exists (excluding the original SKU)
    if ($sku !== $originalSku) {
        $checkSql = "SELECT id FROM inventory WHERE sku = '$sku'";
        $result = $conn->query($checkSql);
        if ($result->num_rows > 0) {
            return ['success' => false, 'message' => 'SKU already exists'];
        }
    }

    // Build update query
    $updateFields = [
        "name = '$name'",
        "sku = '$sku'",
        "category = '$category'",
        "price = $price",
        "stock = $stock",
        "size = '$size'",
        "status = '$status'"
    ];

    // Only update images if new ones were uploaded
    if (!empty($images)) {
        $imagesJson = json_encode($images);
        $updateFields[] = "images = '$imagesJson'";
    }

    $updateFieldsStr = implode(', ', $updateFields);

    // Update query
    $sql = "UPDATE inventory SET $updateFieldsStr WHERE sku = '$originalSku'";

    if ($conn->query($sql) === TRUE) {
        return ['success' => true, 'message' => 'Product updated successfully', 'images' => $images];
    } else {
        error_log('Database error: ' . $conn->error);
        error_log('SQL: ' . $sql);
        return ['success' => false, 'message' => 'Database error: ' . $conn->error, 'debug' => ['sql' => $sql, 'error' => $conn->error]];
    }
}

// If called directly via POST, handle it
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'originalSku' => $_POST['originalSku'] ?? '',
        'name' => $_POST['name'] ?? '',
        'sku' => $_POST['sku'] ?? '',
        'category' => $_POST['category'] ?? '',
        'price' => $_POST['price'] ?? '',
        'stock' => $_POST['stock'] ?? '',
        'size' => $_POST['size'] ?? '',
        'image' => $_POST['image'] ?? ''
    ];

    $response = editProduct($data);
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
