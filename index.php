<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Sergio's Pizza
  </title>
  <link rel = "stylesheet" href = "style.css" />
</head>
<body>
  <div id="titleheader">
    Sergio's Pizza
    <img src="logo.png" alt="logo" height="110" width="110" align="absmiddle"/>
  </div>
  <nav>
    <ul id="navbar">
        <?php if (isset($_SESSION['email'])) : ?>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="locations.html">Locations</a></li>
      <li><a href="about.html">About us</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
        <?php else  : ?>
        <li><a class="active" href="index.php">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="locations.html">Locations</a></li>
      <li><a href="about.html">About us</a></li>
      <li style="float:right"><a href="login.php">Log in</a></li>
        <li style="float:right"><a href="register.php">Register</a></li>
        <?php endif ?>
    </ul>
  </nav>
    <div id="pizzacenter">
        <h1 id="welcome">Welcome to Sergio's Pizza</h1>
        To bring you a truly authentic pizza experience our dough is still freshly made every day in each of our stores and we ensure that only the best ingredients are used.
        <br>
        We have been around the block a few times, so we know what we are doing … you can taste it.
       
    </div>
    <div id="pizzapic">
        <img style="vertical-align: text-top" src="pizza.jpeg" alt="pizza box" height="341" width="512"/>
        <div id="textright">
            <h1 id="notes">Store Notes</h1><hr>
            The store or the delivery driver may call the number you provide to confirm your order/address
            <br><br>
        </div>
    </div>
    <div id="ordernow">
        <button type="button" id="orderbutton"><span>Order Now </span></button>
    </div>
    <div class="slideshowcontainer">
        <div class="mySlide fade">
            <div class="numbertext">1 / 3</div>
            <img src="dough.jpg" style="width: 100%">
            <div class="text">Caption Text</div>
        </div>
        
        <div class="mySlide fade">
            <div class="numbertext">2 / 3</div>
            <img src="cookies.jpeg" style="width: 100%">
            <div class="text">Caption Two</div>
        </div>
        
         <div class="mySlide fade">
            <div class="numbertext">3 / 3</div>
            <img src="pie.jpg" style="width: 100%">
            <div class="text">Caption Three</div>
        </div>
        
        <!-- Next and back buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- slide dots -->
    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    
    <script src="slidescript.js"></script>

</body>

</html>
