<?php
session_start();
include "connectie.php";

$email=$_POST['email'];
$password=$_POST['password'];
$md5_password = md5($password);
// print $md5_password;

$_SESSION["login_user"]=$email; 
  
// set parameters and execute
if (!($stmt = $conn->prepare("SELECT Email FROM users WHERE Email= ? and Password= ? and Bevestigd = ?"))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
$bevestigd = 1;
if (!($stmt->bind_param("ssi", $email, $md5_password, $bevestigd))) {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
}
if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

$result = $stmt->get_result();

if ($result->num_rows != 0) {   
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
        echo "<script type='text/javascript'>alert('Gebruikersnaam of wachtwoord is fout!')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";   
}