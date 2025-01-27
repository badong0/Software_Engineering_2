<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collecting form data
    $userCategory = $_POST['user_category'];
    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $dob = $_POST['date_of_birth'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // Validate password and confirm password
    if ($password !== $confirmPassword) {
        echo "<script>
                alert('Passwords do not match!');
                window.location.href = '../code/combine.php';
              </script>";
        exit();
    }

    // Sample response for a successful signup (add actual user creation logic here, e.g., saving to database)
    echo "<script>
            alert('Account created successfully!');
            window.location.href = '../code/combine.php';
          </script>";
} else {
    // If accessed without form submission
    header("Location: ../code/combine.php");
    exit();
}
?>
