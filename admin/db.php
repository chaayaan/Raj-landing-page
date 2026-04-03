<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');       // ← change to your MySQL username
define('DB_PASS', '');           // ← change to your MySQL password
define('DB_NAME', 'raj_aiswari'); // ← change to your database name

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('<div style="font-family:monospace;padding:24px;background:#1a1a1a;color:#ff6b6b;">
        <strong>Database connection failed:</strong><br>' . mysqli_connect_error() . '
    </div>');
}

mysqli_set_charset($conn, 'utf8mb4');