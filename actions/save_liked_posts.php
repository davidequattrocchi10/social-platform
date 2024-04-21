<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['likedPosts'])) {
    $_SESSION['likedPosts'] = json_decode($_POST['likedPosts'], true);
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
