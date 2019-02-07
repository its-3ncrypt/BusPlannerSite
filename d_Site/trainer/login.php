<?php
session_start(); // Starting Session
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
$md5_password = md5($password);

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = include "connectie.php";  

$email = stripslashes($email);
$md5_password = stripslashes($md5_password);
$email = mysqli_real_escape_string($email);
$md5_password = mysqli_real_escape_string($md5_password);

// SQL query to fetch information of registerd users and finds user match.
$query = "select Email, Password from users where Password='$password' AND Email='$email'"  ;
$rows = mysqli_num_rows($query);

if ($rows->num_rows != 0) {   
    if ($email == "admin@kiwoluwe.be") { 
        $_SESSION['logged_in'] = 3;
        echo "<script language='javascript' type='text/javascript'> location.href='admin.php' </script>"; 
    }
    if ($email == "beheerder@kiwoluwe.be") {
        $_SESSION['logged_in'] = 2;
        echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
    }
    else {   
        $_SESSION['logged_in'] = 1;
        echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>"; 
    }
}
else {
        $_SESSION['logged_in'] = 0;
        //echo "<script type='text/javascript'>alert('Username Or Password Invalid!')</script>";
        //echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";   
}
?>  