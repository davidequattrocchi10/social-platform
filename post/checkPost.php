<?php
// Saved the data  
session_start();
$title = $_POST['title'];
$tags = $_POST['tags'];
$typeMedia = $_POST['typeMedia'];
$pathMedia = $_POST['pathMedia'];


// Check the data  
$check_title = strlen($title) > 50;
$check_tags = strlen($tags) > 60;
$check_Media = ($typeMedia === "photo" || $typeMedia === "video");
if (empty($title)) {
    $_SESSION['error'] = 'Cannot Create a Post - Title is missing';
} elseif ($check_title) {
    $_SESSION['error'] = 'Cannot Create a Post - Title must not have more 50 characters';
} elseif ($check_tags) {
    $_SESSION['error'] = 'Cannot Create a Post - Tags must not have more 60 characters';
} elseif (!$check_Media) {
    $_SESSION['error'] = 'Cannot Create a Post - Type Media must be photo or video';
}

// If there is a error, return to newPost.php
if (isset($_SESSION['error'])) {
    header("Location: newPost.php");
    exit();
}

require_once __DIR__ . "/../database/connection/db.php";

// Insert new media in a table app_medias
$insert_media = "INSERT INTO app_medias (type, path) VALUES (?, ?)";
$stmt_media = $connection->prepare($insert_media);
$stmt_media->bind_param("ss", $typeMedia, $pathMedia);

if ($stmt_media->execute()) {
    // Recupera l'ID del media appena inserito
    $media_id = $connection->insert_id;

    // Inserisci il post nella tabella app_posts con l'ID del media correlato, utilizzando un'istruzione preparata
    $insert_post = "INSERT INTO app_posts (title, tags, media_id) VALUES (?, ?, ?)";
    $stmt_post = $connection->prepare($insert_post);
    $stmt_post->bind_param("ssi", $title, $tags, $media_id);

    if ($stmt_post->execute()) {
        $_SESSION['success'] = "Nuovo post creato con successo!";
    } else {
        $_SESSION['error'] = "Errore nell'inserimento del post: " . $connection->error;
    }
} else {
    $_SESSION['error'] =  "Errore nell'inserimento del media: " . $connection->error;
}

// Close connection
$stmt_media->close();
$stmt_post->close();
$connection->close();


// If everything is ok, go to welcome page
header("Location: ../welcome.php");
exit();
