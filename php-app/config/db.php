<?php
$host = "your-rds-endpoint";
$user = "admin";
$pass = "password";
$db   = "project5db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

echo "<p>Database Connected Successfully</p>";
?>