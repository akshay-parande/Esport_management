<?php
// Include the database connection
require_once('feedback.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize it
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the 'feedback' table
    $sql = "INSERT INTO event1 (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
      header("Location: profilepage.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>