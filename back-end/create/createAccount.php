<?php
function generateUserId() {
    return str_pad(mt_rand(0, 9999999), 7, '0', STR_PAD_LEFT);
}

function createAccount($email, $password, $user_type = 'customer') {
    include '../config/connection.php';

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        return ['success' => false, 'message' => 'Email already exists'];
    }

    // Generate unique 7-digit ID
    do {
        $id = generateUserId();
        $stmt = $conn->prepare("SELECT id FROM users WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
    } while ($stmt->get_result()->num_rows > 0);

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (id, email, password, user_type) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $id, $email, $hashed_password, $user_type);
    if ($stmt->execute()) {
        return ['success' => true, 'message' => 'Account created successfully'];
    } else {
        return ['success' => false, 'message' => 'Failed to create account'];
    }
}

function signIn($email, $password) {
    include '../config/connection.php'; 

    $stmt = $conn->prepare("SELECT id, password, user_type FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['user_type'];
            return ['success' => true, 'message' => 'Login successful'];
        } else {
            return ['success' => false, 'message' => 'Invalid password'];
        }
    } else {
        return ['success' => false, 'message' => 'Email not found'];
    }
}
?>
