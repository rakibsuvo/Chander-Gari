<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "tourist";
// Create connection
$conn = new mysqli($server, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>