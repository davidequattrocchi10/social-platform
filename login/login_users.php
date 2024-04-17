<?php
// Saved the data  
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Connection database 
require __DIR__ . '/../database/connection/db.php';

// Prepara una query per selezionare l'utente con l'username specificato
$stmt = $connection->prepare("SELECT id, username, password FROM users WHERE username = ?");

// Verifica se la preparazione della query ha avuto successo
if ($stmt === false) {
    die("Error preparing statement: " . $connection->error);
}

// Bind del parametro alla query
$stmt->bind_param("s", $username);

// Esegui la query
if ($stmt->execute() === false) {
    die("Error executing statement: " . $stmt->error);
}

// Prendi il risultato della query
$result = $stmt->get_result();

// Verifica se è stato trovato un utente con l'username specificato
if ($result->num_rows === 1) {
    // Prendi i dati dell'utente dal risultato della query
    $user = $result->fetch_assoc();

    // Verifica se la password inserita corrisponde alla password nel database
    if (password_verify($password, $user['password'])) {
        // Password corretta, permetti l'accesso e reindirizza alla pagina di benvenuto
        $_SESSION['user_id'] = $user['id']; // Salvare l'ID dell'utente in sessione per un eventuale utilizzo successivo
        header("Location: ../welcome.php");
        exit();
    } else {
        // Password non corretta
        $_SESSION['user_found'] = "Wrong password.";
        header("Location: login_credentials.php");
    }
} else {
    $_SESSION['user_found'] = "User not found.";
    header("Location: login_credentials.php");
    // Nessun utente trovato con l'username specificato
}

// Chiudi lo statement e la connessione al database
$stmt->close();
$connection->close();
