<?php
// Database connection
$servername = "127.0.0.1"; // Your database host, e.g., localhost
$username = "root"; // Your database username
$password = "mariadb"; // Your database password (if any)
$dbname = "craft_culture"; // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>