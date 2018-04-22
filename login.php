<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Sergio's Pizza - Login
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
      <li><a href="index.php">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="locations.html">Locations</a></li>
      <li><a href="about.html">About us</a></li>
      <li style="float:right"><a class="active" href="login.php">Log in</a></li>
        <li style="float:right"><a href="register.php">Register</a></li>
    </ul>
  </nav>
    
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="imglogin">
            <img src="logo.png" alt="Avatar" class="avatar">
        </div>
        
        <div class="form_container">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="email" required>
            
            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            
            <button type="submit" id="loginbuttons" name="login_user">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        
        <div class="container" style="background-color: #f1f1f1">
           <button type="button" class="cancelbutton" id="loginbuttons">Cancel</button>
            <span class="pass">Forgot <a href="#">password?</a></span>
        </div>
        
    </form>

</body>
    
</html>