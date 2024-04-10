<?php
/* Connect to the database across PHP */

define('DB_SERVERNAME', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_social_platform');
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection && $connection->connect_error) {
    echo 'Database Connection Failed' . $connection->connect_error;
    die;
}
