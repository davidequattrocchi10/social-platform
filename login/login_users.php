<?php
// Saved the data  
$username = $_POST['username'];
$password = $_POST['password'];


// Connection database 
require __DIR__ . '/../database/connection/db.php';

var_dump($username);
var_dump($password);
