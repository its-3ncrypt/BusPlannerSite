<?php

$email=$_POST['email'];
$password=$_POST['password'];
$naam=$_POST['naam'];
$voornaam=$_POST['voornaam'];
$afdeling=$_POST['afdelingen'];

$md5_password = md5($password);

if (strpos($email, '@kiwoluwe.be') !== false or strpos($email, '@fracarita.org') !== false or strpos($email, '@bwtwi.be') !== false )
{
    include ("connectie.php");

    $sql = "INSERT INTO users (Email, Password, Naam, Voornaam, Afdeling_ID, Rol, Bevestigd)
        VALUES ('$email', '$md5_password', '$naam', '$voornaam', '$afdeling', 'Gebruiker', 0)";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
echo "<script type='text/javascript'>alert('Account is succesvol gecreeërd, Uw account wordt gecontroleerd door een beheerder.')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>"; 

}
else {
    echo "<script type='text/javascript'>alert('U email voldoet niet aan de voorwaarden!')</script>";
    echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>"; 
}
