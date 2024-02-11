<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Esports Event Schedule</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('back.webp'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family: Arial, sans-serif; 
    }
    .header {
        background-color: #c0bcbc;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
    width: 40px; 
    height: auto; 
    margin-right: 20px; 
    }

    .profile-container {
    position: relative;
    display: inline-block;
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
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    top: 100%;
    right: 0;
    }
    .dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }
    .dropdown-content a:hover {
    background-color: #ddd;
    }

    .profile-container:hover .dropdown-content {
    display: block;
    }


    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 10px;
        background-color: rgba(255, 255, 255,0.8);
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }
    th {
        background-color: #31b1ec;
        color: #fff;
    }
    tr:hover {
        background-color: #f2f2f2;
    }
    button{

        background-color: #31b1ec;
        border-radius: 5px;
    }
    a{
        color: black;
        text-decoration: none;
    }
    @media (max-width: 320px) {
        .container {
            padding: 5px;
        }
        th, td {
            padding: 5px;
        }
        
    }
    body {
        margin: 0;
        padding: 0;
        background-image: url('back.webp'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family: Arial, sans-serif; 
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
        padding: 10px;
        background-color: rgba(255, 255, 255,0.8);
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }
    th {
        background-color: #31b1ec;
        color: #fff;
    }
    tr:hover {
        background-color: #f2f2f2;
    }
    button{

        background-color: #31b1ec;
        border-radius: 5px;
    }
    a{
        color: black;
        text-decoration: none;
    }
    @media (max-width: 320px) {
        .container {
            padding: 5px;
        }
        th, td {
            padding: 5px;
        }
        .footer-content {
        background-color: #333;
        color: #fff;
        }
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
    <h2>SCHEDULE</h2>
</div>

<div class="container">
    <h2><strong>UPCOMING EVENTS</strong></h2>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Event</th>
                <th>Register</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Database connection
            require_once('event.php');

            // Fetch data from the database
            $result = $conn->query("SELECT * FROM event");
            $counter=1;
            // Display data in the table
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['date']}</td>";
                echo "<td>{$row['time']}</td>";
                echo "<td>{$row['event']}</td>";
                if ($counter == 1) {
                    echo "<td><a href='reg_bgmi1.php'><button>Register</button></a></td>";
                }else if($counter == 2){
                    echo "<td><a href='reg_bgmi2.php'><button>Register</button></a></td>";
                }
                else if($counter == 3){
                    echo "<td><a href='reg_bgmi3.php'><button>Register</button></a></td>";
                }

                echo "</tr>";
                
                $counter++; // Increment the counter for the next row
            }
            $conn->close();
            ?>
            
         
        </tbody>
    </table>
</div>

<div class="container">
        <h2><strong>LIVE EVENTS</strong></h2>
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
                $result = $conn->query("SELECT * FROM event");
                while ($row = $result->fetch_assoc()) {
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

<div class="container">
    <h2> <strong>Completed EVENTS</strong></h2>
   
    <table>
        <thead>
            <tr>
                <th>Date Compl</th>
                <th>Event</th>
                <th>Winner</th>
                <th>PTS Table</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once('event1.php');

            $result = $conn->query("SELECT * FROM event");

            $counter = 1; 
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['date']}</td>";
                echo "<td>{$row['event']}</td>";
                echo "<td>{$row['winner']}</td>";
                
                if ($counter == 1) {
                    echo "<td><a href='points.php'><button>Points Table</button></a></td>";
                }else if($counter == 2){
                    echo "<td><a href='points1.php'><button>Points Table</button></a></td>";
                }
                else if($counter == 3){
                    echo "<td><a href='points2.php'><button>Points Table</button></a></td>";
                }

                echo "</tr>";
                
                $counter++; 
            }
            $conn->close();
            ?>
         
        </tbody>
    </table>
</div>
<div class="container">
    <h2> <strong>RANKINGS</strong></h2>
   
    <table>
        <thead>
            <tr>
                <th>RANKING</th>
                <th>TEAM</th>
                <th>TOURNY WON</th>
                <th>PTS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once('event2.php');

            $result = $conn->query("SELECT * FROM event");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['rank']}</td>";
                echo "<td>{$row['team']}</td>";
                echo "<td>{$row['event']}</td>";
                echo "<td>{$row['pts']}</td>";
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
