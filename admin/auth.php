<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireLogin() {
    if (empty($_SESSION['admin_id'])) {
        header('Location: ' . getAdminBase() . 'login.php');
        exit;
    }
}

function isLoggedIn() {
    return !empty($_SESSION['admin_id']);
}

function logout() {
    session_unset();
    session_destroy();
    header('Location: ' . getAdminBase() . 'login.php');
    exit;
}

// Returns base path for the admin folder (handles subdirectory installs)
function getAdminBase() {
    $script = $_SERVER['SCRIPT_NAME'];
    $dir    = dirname($script);
    // Normalize trailing slash
    return rtrim($dir, '/') . '/';
}