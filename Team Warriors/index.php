<?php
session_start(); 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page</title>
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
    <div class="event">
        <div class="card-container">
                <div class="card">
                    <a href="val_tour.php">
                        <img src="val.jpg" alt="Avatar" >
                        <div class="container">
                            VALORANT 
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="bgmi_tour.php">
                        <img src="BGMI.jpg" alt="Avatar" >
                        <div class="container">
                            BGMI 
                        </div>
                    </a>
                </div>
        </div>
    </div>

    <div class="container1">
        <h2><strong>VALORANT LIVE EVENTS</strong></h2>
        <table>
            <thead>
                <tr>
                    <th>Event</th>
                    <th>WATCH LIVE</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once('live.php');
                $result = $conn->query("SELECT * FROM event1");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['event']}</td>";
                    echo "<td> <a href='{$row['link']}'><button>Watch Live</button></a><br>";
                    echo "</tr>";
                }
            ?>
            
            </tbody>
        </table>
    </div>
    <div class="container1">
        <h2><strong>BGMI LIVE EVENTS</strong></h2>
        <table>
            <thead>
                <tr>
                    <th>Event</th>
                    <th>WATCH LIVE</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once('live.php');
                $result1 = $conn->query("SELECT * FROM event");
                while ($row = $result1->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['event']}</td>";
                    echo "<td> <a href='{$row['link']}'><button>Watch Live</button></a><br>";
                    echo "</tr>";
                }
                $conn->close();
            ?>
            
            </tbody>
        </table>
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