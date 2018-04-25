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

//Order
$idresult = "";
$row = "";
$id = "";
$order1 = $order2 = $order3 = $order4 = $order5 = $order6 = $order7 = $order8 = $order9 = "";

$id_sql =  "SELECT id FROM pizzadb.account WHERE email = '".$email."' ";

    

if (isset($_POST['user_order']))
{
   
    if (isset($_POST['order1']))
    {
        $order1 = $_POST['order1'];
    }
    if (isset($_POST['order2']))
    {
        $order2 = $_POST['order2'];    
    }
    if (isset($_POST['order3']))
    {
        $order3 = $_POST['order3'];    
    }
    if (isset($_POST['order4']))
    {
       $order4 = $_POST['order4']; 
    }
    if (isset($_POST['order5']))
    {
        $order5 = $_POST['order5'];
    }
    if (isset($_POST['order6']))
    {
        $order6 = $_POST['order6'];  
    }
    if (isset($_POST['order7']))
    {
        $order7 = $_POST['order7'];
    }
    if (isset($_POST['order8']))
    {
        $order8 = $_POST['order8'];
    }
     if (isset($_POST['order9']))
    {
        $order8 = $_POST['order9'];
    }
    
    
    $sql = "INSERT INTO pizzadb.order VALUES ('$id', '$order1', '$order2', '$order3', '$order4', '$order5', '$order6', '$order7', '$order8', '$order9')";

     if (!mysqli_query($db, $sql))
     {
        die  (mysqli_error($db));
     }
}

?>
    