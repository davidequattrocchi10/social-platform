<?php

session_start();
require_once __DIR__ . "/database/connection/db.php";
$response = [];

// Check if the request was made via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && isset($_POST['post_id'])) {
    $action = $_POST['action'];
    $post_id = $_POST['post_id'];

    if ($action === 'like') {
        // Check if the user has already liked this post
        $sql = "SELECT * FROM app_likes WHERE user_id = ? AND post_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ii", $_SESSION['user_id'], $post_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            // If the user hasn't liked this post yet, add a row in the app_likes table
            $sql = "INSERT INTO app_likes (user_id, post_id) VALUES (?, ?)";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("ii", $_SESSION['user_id'], $post_id);
            $stmt->execute();
            $stmt->close();

            $response['success'] = true;
            $response['message'] = 'Mi piace aggiunto con successo al post con ID ' . $post_id;
        } else {
            // The user has already liked this post
            $response['success'] = false;
            $response['error'] = 'Hai già messo mi piace a questo post';
        }
    } elseif ($action === 'unlike') {
        // Check if the user has already liked this post
        $sql = "SELECT * FROM app_likes WHERE user_id = ? AND post_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ii", $_SESSION['user_id'], $post_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // If the user liked this post, remove the corresponding row in the app_likes table
            $sql = "DELETE FROM app_likes WHERE user_id = ? AND post_id = ?";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("ii", $_SESSION['user_id'], $post_id);
            $stmt->execute();
            $stmt->close();

            $response['success'] = true;
            $response['message'] = 'Mi piace rimosso con successo dal post con ID ' . $post_id;
        } else {
            // The user hasn't still liked this post
            $response['success'] = false;
            $response['error'] = 'Non hai messo mi piace a questo post';
        }
    } else {
        $response['success'] = false;
        $response['error'] = 'Azione non supportata';
    }
} else {
    // If the request was not made via AJAX or sufficient parameters were not provided
    $response['success'] = false;
    $response['error'] = 'Richiesta non valida';
}

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
