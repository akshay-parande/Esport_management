<?php
session_start(); 

require_once('connection.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM info1 WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; 
        header("Location: index.php"); 
        exit();
    } else {
        
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles1.css"> 
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form class="login-form" method="post" action="">
        <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
        <div>
            <a href="reg.php">Sign Up</a>
        </div>
    </form>
</div>

</body>
</html>
