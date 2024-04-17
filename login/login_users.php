<?php
// Saved the data  
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Connection database 
require __DIR__ . '/../database/connection/db.php';

// Prepare a query to select the user with the specified username
$stmt = $connection->prepare("SELECT id, username, password FROM users WHERE username = ?");

// Check if the query preparation was successful
if ($stmt === false) {
    die("Error preparing statement: " . $connection->error);
}

// Bind_param
$stmt->bind_param("s", $username);

// Execute
if ($stmt->execute() === false) {
    die("Error executing statement: " . $stmt->error);
}

// Get the query result
$result = $stmt->get_result();

// Checks if a user with the specified username was found
if ($result->num_rows === 1) {
    // Get user data from the query result
    $user = $result->fetch_assoc();

    // Check if the password entered matches the password in the database
    if (password_verify($password, $user['password'])) {
        // Correct password
        $_SESSION['user_id'] = $user['id']; // Saved user's ID 
        header("Location: ../welcome.php");
        exit();
    } else {
        // Incorrect password
        $_SESSION['user_found'] = "Wrong password.";
        header("Location: login_credentials.php");
    }
} else {
    // User not found
    $_SESSION['user_found'] = "User not found.";
    header("Location: login_credentials.php");
}

// Close statement and connection
$stmt->close();
$connection->close();
