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

// Adesso bisogna aggiungere i dati nel database 

//da fare
