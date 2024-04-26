<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    /* Connection database */
    require_once __DIR__ . '/connection/db.php';

    /* Query SQL */
    $sql = "SELECT id, username, email, birthdate, phone FROM users WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    /* Close Connection */
    $stmt->close();
    $connection->close();
}
