<?php
session_start();

//variables
$email = "";
$errors = array();

//connect to the DB
$db = mysqli_connect("localhost", "root", "", "pizzadb");

if (mysqli_connect_errno())
{
  echo "Failed to connect to mysql: " . mysqli_connect_error();

}

if (isset($_POST['reg_user']))
{
    if($_POST[password1] != $_POST[password2])
    {
        echo "The passwords do not match";
    }
    else
    {
        $password = md5($_POST[password1]);
        
         //Register the account
        $sql = "INSERT INTO account (email, password)
        VALUES ('$_POST[email]', '$password')";

        if (!mysqli_query($db, $sql))
        {
            die('Error: '. mysqli_error());
        }
    
    }
    

   
}

//Login
if (isset($_POST['login_user']))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    $password = md5($password);
    $query = "SELECT * FROM account WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    if (mysqli_num_rows($results) == 1)
    {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
    else
    {
        array_push($errors, "Wrong email/password");
    }
}

?>
    