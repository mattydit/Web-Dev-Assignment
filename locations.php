<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Sergio's Pizza
  </title>
  <link rel = "stylesheet" href = "style.css" />
    <link rel="icon" href="images/logo.png">
</head>
<body>
  <div id="titleheader">
    Sergio's Pizza
    <img src="images/logo.png" alt="logo" height="110" width="110" align="absmiddle"/>
  </div>
  <nav>
    <ul id="navbar">
        <?php if (isset($_SESSION['email'])) : ?>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="locations.php">Locations</a></li>
      <li><a href="about.html">About us</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
        <?php else  : ?>
        <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a class="active" href="locations.php">Locations</a></li>
      <li><a href="about.html">About us</a></li>
      <li style="float:right"><a href="login.php">Log in</a></li>
        <li style="float:right"><a href="register.php">Register</a></li>
        <?php endif ?>
    </ul>
  </nav>
    <br>
    <br>
    <div id="map_descript">
        <h2 id="location_header">Sergio's Location Map</h2> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br>
        <br>
        <img src="images/delivery1.jpeg" alt="bike"/>
        <div id="map">
        Google map
        <script src="map.js"></script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxp-f0JUBNzhFByV2W4LqiemA_utqtmcU&callback=locationMap"></script>   
    </div>
    </div>
   
    
    <div class="bottom_bar">
        <a href="#home" class="bottom_active">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
    </div>
    </body>
</html>