<?php
session_start();
include 'connection.php';

// Sample credentials for demonstration purposes
$users = [
    "user@example.com" => "password123",
    // Add more users here if needed
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($users[$email]) && $users[$email] === $password) {
        // Redirect to document-request.php if credentials are correct
        header("Location: document-request.php");
        exit();
    } else {
        // Show alert for wrong credentials
        echo "<script>
                alert('Wrong credentials!');
                window.location.href = '../index.html';
              </script>";
    }
} else {
    // If accessed without form submission
    header("Location: ../index.html");
    exit();
}
?>
