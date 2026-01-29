<?php
include 'config/connection.php';
$result = $conn->query('DESCRIBE inventory');
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo $row['Field'] . ' - ' . $row['Type'] . "\n";
    }
} else {
    echo 'Error: ' . $conn->error;
}
?>
