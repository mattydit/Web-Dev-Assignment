<?php include 'server2.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Sergio's Pizza - Login
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
      <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="locations.php">Locations</a></li>
      <li><a href="about.html">About us</a></li>
      <li style="float:right"><a href="login.php">Log in</a></li>
        <li style="float:right"><a class="active" href="register.php">Register</a></li>
    </ul>
  </nav>
    
    <form method="post" action="register.php">
        <div class="register_container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            
            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password1" required>
            
            <label for="pass-repeat"><b>Re-enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="password2" required>
            <hr>
            
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbutton" name="reg_user">Register Now</button>
        </div>
        
        <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
    </form>
    
</body>
    
</html>