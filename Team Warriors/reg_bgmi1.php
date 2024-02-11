<?php
session_start(); 

require_once('bgmi_connection.php'); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tname = $_POST['tname'];
    $name1 = $_POST['name1'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $userid1 =$_POST['userid1'];
    $name2 = $_POST['name2'];
    $userid2=$_POST['userid2'];
    $name3 = $_POST['name3'];
    $userid3= $_POST['userid3'];
    $name4 = $_POST['name4'];
    $userid4 = $_POST['userid4'];


    $check_email_query = "SELECT * FROM reg WHERE email='$email'";
    $check_email_result = $conn->query($check_email_query);

    if ($check_email_result->num_rows > 0) {
        $error_message = "Email already exists. Please choose a different email.";
    }else{
        $sql = "INSERT INTO reg (tname,name1, number, email,userid1,name2,userid2,name3,userid3,name4,userid4) VALUES ('$tname','$name1','$number','$email', '$userid1','$name2','$userid2','$name3','$userid3','$name4','$userid4')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
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
    <title>eSports Player Registration</title>
    <style>
        body {
            margin-top: 0;
            padding: 0;
            background-image: url('bgmi1.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif; 
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, .8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .header {
  top: 0;
  z-index:1000;
  background-color: #652525;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  width: 200px; 
  height: 40px; 
  margin-right: 20px; 
}

.profile-container {
  position: relative;
  display: inline-block;
  margin-right: 20px;
}

.profile-icon {
  width: 40px; 
  height: 40px;
  background-color: #fff;
  border-radius: 50%;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.profile-icon img {
  width: 100%; 
  height: 100%;
  object-fit: cover;
  border-radius: 50%; 
}
 .footer-content {
  background-color: #333;
  color: #fff;
  }

  .footer-sections-container {
      display: flex;
      justify-content: space-between;
      padding: 40px;
      
  }

  .footer-section {
      flex: 0 0 calc(33.333% - 20px);
  }

  .footer-section h3 {
      margin-top: 0;
      margin-left: 20px;
  }

  .footer-section p {
      margin-bottom: 10px;
      margin-left: 20px;
  }

  .footer-section ul {
      list-style-type: none;
      padding: 0;
  }

  .footer-section ul li {
      margin-bottom: 5px;
      margin-left: 20px;
  }

  .footer-section ul li a {
      color: #fff;
      text-decoration: none;
  }

  .footer-bottom {
      background-color: #555;
      color: #fff;
      padding: 10px 20px;
      text-align: center;
  }
  
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  .sticky + .content {
    padding-top: 102px;
  }
    </style>
</head>
<body>


<header>
        <div class="header" id="myHeader">
            <a href="index.php"><img src="Esports.png" alt="Company Logo" class="logo"></a>
            <div class="profile-container">
                <div class="profile-icon">
                    <a href="profilepage.php"><img src="user.png" alt="User Profile"></a>
                </div>
                
            </div>
        </div>
        <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
    </header>


<div class="container">
    <h2>eSports Player Registration</h2>
    <form action="" method="POST">
        <label for="name">Team Name:</label>
        <input type="text" id="tname" name="tname" required>

        <label for="name">Leader Name:</label>
        <input type="text" id="name1" name="name1" required>

        <label for="email">Leader Email ID :</label>
        <input type="email" id="email" name="email" required>

        <label for="name">Leader Phone:</label>
        <input type="text" id="number" name="number" required>

        <label for="UserID">Leader UserID : </label>
        <input type="text" id="userid1" name="userid1" required><br>

        <label for="name">Player2 Name:</label>
        <input type="text" id="name2" name="name2" required>

        <label for="UserID">UserID : </label>
        <input type="text" id="userid2" name="userid2" required><br>
        <label for="name">Player3 Name:</label>
        <input type="text" id="name3" name="name3" required>

        <label for="UserID">UserID : </label>
        <input type="text" id="userid3" name="userid3" required><br>
        <label for="name">Player4 Name:</label>
        <input type="text" id="name4" name="name4" required>

        <label for="UserID">UserID : </label>
        <input type="text" id="userid4" name="userid4" required><br>


        <input type="submit" value="Register">
    </form>
</div>

<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <br>
            <h3>About Us</h3>
            <p></p>
            <hr>

        </div>
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p>Email: pansemohit@example.com</p>
            <p>Phone: +91 8208658017</p>
            <p>Address: DIT, Pimpri, India</p>
            <hr>
        </div>
        <div class="footer-section quick-links">
            <h3>Quick Links</h3>
            <ul>
            <li><a href="profilepage.pjp">Dashboard</a></li>
                <li><a href="bgmi_tour.php">Bgmi Tournaments</a></li>
                <li><a href="val_tour.php">Valorant Tournaments</a></li>
                <li><a href="profilepage.php">Settings</a></li>
                <li><a href=">profilepage.php"></a></li>
                <br>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 Esports.com | Designed by Team Worriers
    </div>
</footer>

</body>
</html>
