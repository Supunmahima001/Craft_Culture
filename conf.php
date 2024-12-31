<?php
// Database connection
$servername = "127.0.0.1"; 
$username = "root"; 
$password = "mariadb"; 
$dbname = "craft_culture"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>