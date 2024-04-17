<?php

require __DIR__ .  '/connection/db.php';

/* Query SQL */
$sql = "SELECT `app_posts`.`id`, `app_posts`.`title`, `app_posts`.`tags`,`app_medias`.`id` AS `media_id`, `app_medias`.`type`, `app_medias`.`path`
        FROM `app_posts`
        JOIN `app_medias` ON `app_posts`.`media_id` = `app_medias`.`id`";

$result = $connection->query($sql);
