<?php
// Database connection file

$host = "localhost";
$user = "root";
$password = ""; // default for XAMPP
$database = "nano_elearning";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
