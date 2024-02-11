<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Points Table</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('back.webp'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
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
        width: 100%;
        max-width: 800px;
        margin: 20px auto;
        padding: 10px;
        background-color: rgba(255,255,255,0.7);
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
    @media (max-width: 480px) {
        .container {
            padding: 5px;
        }
        th, td {
            padding: 5px;
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
    <h2>Points Table</h2>

    <table>
        <thead>
            <tr>
                <th>Team</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Team A</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Team B</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Team C</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Team D</td>
                <td>7</td>
            </tr>
            <tr>
                <td>Team E</td>
                <td>5</td>
            </tr>
            <!-- Add more rows if needed -->
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