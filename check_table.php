<?php
include 'config/connection.php';
$result = $conn->query('SHOW TABLES LIKE "inventory"');
if ($result->num_rows > 0) {
    echo 'Table exists';
} else {
    echo 'Table does not exist';
}
?>
