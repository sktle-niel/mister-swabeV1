<?php
ini_set('display_errors', 0);
error_reporting(0);

include '../../config/connection.php';

function addProduct($data) {
    global $conn;

    // Generate random 7-digit ID
    $id = str_pad(mt_rand(0, 9999999), 7, '0', STR_PAD_LEFT);

    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $data['name']);
    $sku = mysqli_real_escape_string($conn, $data['sku']);
    $category = mysqli_real_escape_string($conn, $data['category']);
    $price = floatval($data['price']);
    $stock = intval($data['stock']);
    $size = mysqli_real_escape_string($conn, $data['size']);

    // Handle image uploads
    $images = [];
    if (isset($_FILES['productImages']) && is_array($_FILES['productImages']['name'])) {
        $fileCount = count($_FILES['productImages']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            $error = $_FILES['productImages']['error'][$i];
            if ($error === UPLOAD_ERR_OK) {
                // Validate file size (4MB max)
                $fileSize = $_FILES['productImages']['size'][$i];
                if ($fileSize > 4 * 1024 * 1024) {
                    return ['success' => false, 'message' => 'Image file size exceeds 4MB limit'];
                }

                // Validate file type
                $type = $_FILES['productImages']['type'][$i];
                $allowedTypes = ['image/jpeg', 'image/png'];
                if (!in_array($type, $allowedTypes)) {
                    return ['success' => false, 'message' => 'Invalid image file type. Only PNG and JPG are allowed.'];
                }

                // Generate unique filename
                $name = $_FILES['productImages']['name'][$i];
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $filename = uniqid() . '.' . $extension;
                $uploadPath = '../../uploads/' . $filename;

                // Ensure uploads directory exists and is writable
                $uploadDir = dirname($uploadPath);
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                // Move uploaded file
                $tmpName = $_FILES['productImages']['tmp_name'][$i];
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

    // If no images uploaded, use default
    if (empty($images)) {
        // $images[] = 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90';
    }

    // Determine status
    if ($stock == 0) {
        $status = 'Out of Stock';
    } elseif ($stock <= 10) {
        $status = 'Low Stock';
    } else {
        $status = 'In Stock';
    }

    // Check if SKU already exists
    $checkSql = "SELECT id FROM inventory WHERE sku = '$sku'";
    $result = $conn->query($checkSql);
    if ($result->num_rows > 0) {
        return ['success' => false, 'message' => 'SKU already exists'];
    }

    // Insert query
    $imagesJson = json_encode($images);
    $sql = "INSERT INTO inventory (id, name, sku, category, price, stock, size, images, status)
            VALUES ('$id', '$name', '$sku', '$category', $price, $stock, '$size', '$imagesJson', '$status')";

    if ($conn->query($sql) === TRUE) {
        return ['success' => true, 'message' => 'Product added successfully', 'id' => $id, 'images' => $images];
    } else {
        error_log('Database error: ' . $conn->error);
        error_log('SQL: ' . $sql);
        return ['success' => false, 'message' => 'Database error: ' . $conn->error, 'debug' => ['sql' => $sql, 'error' => $conn->error]];
    }
}

// If called directly via POST, handle it
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => $_POST['productName'] ?? '',
        'sku' => $_POST['productSKU'] ?? '',
        'category' => $_POST['productCategory'] ?? '',
        'price' => $_POST['productPrice'] ?? '',
        'stock' => $_POST['productStock'] ?? '',
        'size' => $_POST['productSize'] ?? '',
        'images' => $_FILES['productImages'] ?? []
    ];

    $response = addProduct($data);
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
