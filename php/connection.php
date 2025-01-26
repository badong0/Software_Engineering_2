<?php
// Example: Database connection (adjust credentials accordingly)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "document_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>