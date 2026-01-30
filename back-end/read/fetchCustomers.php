<?php
function fetchCustomers() {
    include '../../config/connection.php';

    $query = "SELECT id, email, password, user_type, created_at, status FROM users WHERE user_type = 'customer'";
    $result = $conn->query($query);
    $customers = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $customers[] = $row;
        }
    }
    return $customers;
}

function getTotalCustomers() {
    include '../../config/connection.php';

    $query = "SELECT COUNT(*) as total FROM users WHERE user_type = 'customer'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['total'];
}

function getActiveCustomers() {
    include '../../config/connection.php';

    $query = "SELECT COUNT(*) as active FROM users WHERE user_type = 'customer'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['active'];
}

function getInactiveCustomers() {
    include '../../config/connection.php';

    $query = "SELECT COUNT(*) as inactive FROM users WHERE user_type = 'customer' AND status = 'inactive'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['inactive'];
}
?>
