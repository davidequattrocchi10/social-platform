<?php
// Saved the data  
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];

// Check the data  
$check_username = strlen($username) <= 7;
$check_email = (!str_contains($email, '@') || !str_contains($email, '.'));
if (empty($username) || empty($email)) {
    echo 'return signUp.php - Miss data important';
} elseif ($check_username) {
    echo 'return signUp.php - Cannot Access';
} elseif ($check_email) {
    echo ' return signUp.php Cannot Access';
}
//da togliere successivamente else{}
else {
    echo 'Welcome ' . $_POST['name'] . "!";
}

// Connection database 
require __DIR__ . '/../database/connection/db.php';


// Prepare and bind
$stmt = $connection->prepare("INSERT INTO users (username, email, phone) VALUES (?,?,?)");
if ($stmt === false) {
    die("Error preparing statement: " . $connection->error);
}
$stmt->bind_param("sss", $username, $email, $phone);

if ($stmt->execute() === false) {
    die("Error executing statement: " . $stmt->error);
}

// Se si arriva qui, l'inserimento è avvenuto con successo
echo "User inserted successfully.";

// Close statement and connection 
$stmt->close();
$connection->close();

// Se l'inserimento nel database è avvenuto con successo, reindirizza alla pagina di benvenuto
header("Location: ../welcome.php");
exit();
