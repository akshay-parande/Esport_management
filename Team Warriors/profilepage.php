<?php
// Start the session (assuming you are using sessions to manage user login)
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Database connection
require_once('connection.php'); // Include your database connection file



// Fetch user data based on the logged-in user's username
$username = $_SESSION['username'];
$result = $conn->query("SELECT * FROM info1 WHERE username = '$username'");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userUsername = $row['username'];
    $Eemail=$row['email'];
    $Nnumber=$row['number'];
    // You can fetch and display other user-related data as needed
} else {
    // Handle the case where the user is not found in the database
    echo "User not found.";
    exit();
}




// Close the database connection

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGMI Player Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('back.webp'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
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
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        .profile-header {
            color:white;
            text-align: center;
        }
        .profile-img {
            max-width: 200px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }
        .profile-info {
            color:white;
            margin-top: 10px;
            text-align: center;
        }
        .social-links {
            margin-top: 20px;
            text-align: center;
        }
        .social-links a {

            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .menu {
            color:white;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .menu a {
            text-decoration: none;
            color: white;
            padding: 10px;
            border: 1px solid white;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .menu a:hover {
            background-color: #333;

            color: white;
        }
        .event-table {
            display: none;
            margin-top: 20px;
        }
        .settings-options {
            color:white;
            margin-top: 20px;
        }
        h2{
            color:white;
        }
        h3{
            color:white;
        }
        .settings-options input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .feedback-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        td{
            background-color:rgba(255,255,255,0.6);
        }
        th {
            background-color: rgba(255,255,255,0.6);
            color: #333;
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
        <div class="profile-header">
            <img src="prof.jpg" alt="Profile Image" class="profile-img">
            <div class="profile-info">
                <h2>Player Name</h2>
                <p>User ID: <?php echo $userUsername; ?></p>
            </div>
        </div>
        <div class="social-links">
            <a href="https://twitter.com/exampleplayer" target="_blank">Twitter</a>
            <a href="https://instagram.com/exampleplayer" target="_blank">Instagram</a>
            <a href="https://youtube.com/exampleplayer" target="_blank">YouTube</a>
        </div>
        <div class="menu">
            <!-- <a href="#" id="notifications">Notification</a> -->
            <a href="#" id="registeredEventsBtn">Registered Events</a>
            <a href="#" id="settingsBtn">Settings</a>
            <a href="#" id="resultsBtn">Results</a>
            <a href="#" id="feedbackBtn">Feedback</a>
            <a href="logout.php">Log Out</a>
        </div>

        <!-- <div class="notifications" id="notifications">
            <h2>Notification</h2>
        </div> -->
        <div class="event-table" id="registeredEventsTable" style="display: none;">
            <h2>Registered Events</h2>
            <table>
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php

require_once('val_connection.php');

$result1 = $conn->query("SELECT * FROM reg");

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()){
        if ($row['name1']==$userUsername||$row['name2']==$userUsername||$row['name3']==$userUsername||$row['name4']==$userUsername||$row['name5']==$userUsername) {
            echo "<tr>";
            echo "<td>Valo Champs</td>"; 
            echo "<th>13 Feb 24</th>"; 
            echo "<tr>";
        }
    }


    
}

$result1 = $conn->query("SELECT * FROM reg2");

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()){
        if ($row['name1']==$userUsername||$row['name2']==$userUsername||$row['name3']==$userUsername||$row['name4']==$userUsername||$row['name5']==$userUsername) {
            echo "<tr>";
            echo "<td>VCT</td>"; 
            echo "<th>17 Feb 2024</th>"; 
            echo "<tr>";
        }
    }


    
}
$result1 = $conn->query("SELECT * FROM reg3");

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()){
        if ($row['name1']==$userUsername||$row['name2']==$userUsername||$row['name3']==$userUsername||$row['name4']==$userUsername||$row['name5']==$userUsername) {
            echo "<tr>";
            echo "<td>Valo Series</td>"; 
            echo "<th>20 Feb 2024</th>"; 
            echo "<tr>";
        }
    }


    
}


require_once('bgmi_connection.php');
$result2 = $conn->query("SELECT * FROM reg");

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()){
        if ($row['name1']==$userUsername||$row['name2']==$userUsername||$row['name3']==$userUsername||$row['name4']==$userUsername) {
            echo "<tr>";
            echo "<td>BGMI Tournament</td>"; 
            echo "<th>15 Feb 2024</th>"; 
            echo "<tr>";
        }
    }


    
}

$result2 = $conn->query("SELECT * FROM reg2");

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()){
        if ($row['name1']==$userUsername||$row['name2']==$userUsername||$row['name3']==$userUsername||$row['name4']==$userUsername) {
            echo "<tr>";
            echo "<td>BGIS</td>"; 
            echo "<th>17 Feb 2024</th>"; 
            echo "<tr>";
        }
    }


    
}

$result2 = $conn->query("SELECT * FROM reg3");

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()){
        if ($row['name1']==$userUsername||$row['name2']==$userUsername||$row['name3']==$userUsername||$row['name4']==$userUsername) {
            echo "<tr>";
            echo "<td>BGIS 2</td>"; 
            echo "<th>20 Feb 2024</th>"; 
            echo "<tr>";
        }
    }


    
}


?>
                </tbody>
            </table>
        </div>
        <div  class="settings-container"id="Settings" style="display: none;">
            <h2>Settings</h2>
            <h3>Edit Profile</h3>
            <div class="settings-options">
    
                <label method="posr" for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="<?php echo $Eemail; ?>">
    
                <label method="post" for="number">Mobile Number:</label>
                <input type="tel" id="number" name="number" placeholder="<?php echo $Nnumber; ?>">
            </div>
    




            <h3>Edit Social Media Handles</h3>
            <form method="post"class="settings-options" action="insert.php">
                <label for="insta">Instagram:</label>
                <input type="text" id="insta" name="insta" placeholder="New Instagram Handle">
    
                <label for="ytube">YouTube:</label>
                <input type="text" id="ytube" name="ytube" placeholder="New YouTube Handle">
    
                <label for="twitter">Twitter:</label>
                <input type="text" id="twitter" name="twitter" placeholder="New Twitter Handle">
</form>
    
            <button type="submit" class="handle-button">Save Changes</button>
        </div>

        
     

        <div class="feedback-container" id="Feedback" style="display: none;">
            <h1>Feedback Form</h1>
            <form action="submit_feedback.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <hr>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <hr>
                
        
                <label for="message">Your Feedback:</label>
                <textarea id="message" name="message" required></textarea>
                <hr>
        
                <input type="submit" value="Submit Feedback">
                


            </form>
        </div>
        <div class="result-container" id="Results" style="display: none;">
            <h2>Match 1 Results</h2>
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Player Name</th>
                        <th>Kills</th>
                        <th>Survival Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Player 1</td>
                        <td>5</td>
                        <td>25:00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Player 2</td>
                        <td>4</td>
                        <td>20:30</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            
            <h2>Match 2 Results</h2>
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Player Name</th>
                        <th>Kills</th>
                        <th>Survival Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Player 3</td>
                        <td>7</td>
                        <td>30:00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Player 4</td>
                        <td>3</td>
                        <td>18:45</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function scrollPageDown() {
            window.scrollBy(0, 500); // You can adjust the value (500) as needed
        }
    
        document.getElementById('registeredEventsBtn').addEventListener('click', function() {
            var table = document.getElementById('registeredEventsTable');
            table.style.display = table.style.display === 'none' ? 'block' : 'none';
            document.getElementById('Settings').style.display = 'none';
            document.getElementById('Feedback').style.display = 'none';
            document.getElementById('Results').style.display = 'none';
        });
    
        document.getElementById('settingsBtn').addEventListener('click', function() {
            var settings = document.getElementById('Settings');
            settings.style.display = settings.style.display === 'none' ? 'block' : 'none';
            document.getElementById('registeredEventsTable').style.display = 'none';
            document.getElementById('Feedback').style.display = 'none';
            document.getElementById('Results').style.display = 'none';
        });
    
        document.getElementById('resultsBtn').addEventListener('click', function() {
            var settings = document.getElementById('Results');
            settings.style.display = settings.style.display === 'none' ? 'block' : 'none';
            document.getElementById('registeredEventsTable').style.display = 'none';
            document.getElementById('Settings').style.display = 'none';
            document.getElementById('Feedback').style.display = 'none';
        });
    
        document.getElementById('feedbackBtn').addEventListener('click', function() {
            var settings = document.getElementById('Feedback');
            settings.style.display = settings.style.display === 'none' ? 'block' : 'none';
            document.getElementById('registeredEventsTable').style.display = 'none';
            document.getElementById('Settings').style.display = 'none';
            document.getElementById('Results').style.display = 'none';
        });
    </script>
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
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Bgmi Tournaments</a></li>
                <li><a href="#">Valorant Tournaments</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Feedback</a></li>
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
