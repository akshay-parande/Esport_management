<?php
session_start(); // Start the session

// Database connection
require_once('connection.php'); // Include your database connection file

// Check if the registration form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $number=$_POST['number'];
    $email=$_POST['email'];

    $check_email_query = "SELECT * FROM info1 WHERE email='$email'";
    $check_email_result = $conn->query($check_email_query);

    if ($check_email_result->num_rows > 0) {
        $error_message = "Email already exists. Please choose a different email.";
    }else{
        $sql = "INSERT INTO info1 (username, number, email, password) VALUES ('$username','$number','$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            $error_message = "Registration failed. Please try again.";
        }
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Registration Page</title>
</head>
<body>

<div class="container">
<form method="post" action="">
    <h2>Register :</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="number">Number:</label>
    <input type="text" id="number" name="number" required>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Register</button>
    <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</form>
</div>
</body>
</html>
