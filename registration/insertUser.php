<?php
// Saved the data  
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];

session_start();
// Check the data  
$check_username = strlen($username) <= 7;
$check_email = (!str_contains($email, '@') || !str_contains($email, '.'));
if (empty($username) || empty($email)) {
    $_SESSION['error'] = 'Cannot Access - Important data is missing';
} elseif ($check_username) {
    $_SESSION['error'] = 'Cannot Access - Username must have more 7 characters';
} elseif ($check_email) {
    $_SESSION['error'] = 'Cannot Access - Email must include @ and .';
} elseif (strtotime($birthdate) === false || date('Y-m-d', strtotime($birthdate)) !== $birthdate) {
    // Check if date of birth is in the correct format (YYYY-MM-DD)  
    $_SESSION['error'] = 'The date of birth is not in the correct format (YYYY-MM-DD)';
}

// If there is a error, return to signUp.php
if (isset($_SESSION['error'])) {
    header("Location: signUp.php");
    exit();
}

// Import function 
include_once __DIR__ . "/../lib/functions.php";

//Generate password
$password = generatePassword($name, $lastname, $birthdate);
$_SESSION['generated_password'] = $password;

// Hash password
$hashPassword = password_hash($password, PASSWORD_DEFAULT);

// Connection database 
require __DIR__ . '/../database/connection/db.php';


// Prepare and bind
$stmt = $connection->prepare("INSERT INTO users (username, email, password, birthdate, phone) VALUES (?,?,?,?,?)");

if ($stmt === false) {
    die("Error preparing statement: " . $connection->error);
}
$stmt->bind_param("sssss", $username, $email, $hashPassword, $birthdate, $phone);

if ($stmt->execute() === false) {
    die("Error executing statement: " . $stmt->error);
}

// Close statement and connection 
$stmt->close();
$connection->close();

// If everything is ok, go to welcome page
$_SESSION['user_username'] = $username;
header("Location: ../welcome.php");
exit();
