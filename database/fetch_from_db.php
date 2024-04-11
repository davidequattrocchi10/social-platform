<?php

require __DIR__ .  '/connection/db.php';

/* Query SQL */
$sql = "SELECT `id`,`username`,`email`,`birthdate`,`phone` 
        FROM `users` 
        WHERE YEAR(`birthdate`) BETWEEN 1990 AND 1995;";

$result = $connection->query($sql);
