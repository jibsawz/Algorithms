<?php
// Cheking if user is logged in or not
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../../pages/signup.html");
    exit();
}