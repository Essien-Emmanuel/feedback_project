<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Essien');
define('DB_PASS', '123456');
define('DB_NAME', 'feedback_db');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Database Connection Failed❌ ' . $conn->connect_error);
}
