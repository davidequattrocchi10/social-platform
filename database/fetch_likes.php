<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    /* Connection database */
    require_once __DIR__ . '/../database/connection/db.php';

    /* Query SQL */
    $sql = "SELECT post_id FROM app_likes WHERE user_id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $liked_posts = [];
    while ($row = $result->fetch_assoc()) {
        $liked_posts[] = $row['post_id'];
    }
}
