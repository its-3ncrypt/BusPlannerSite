<?php

/*
$conn = mysqli_connect("ID149222_loic.db.webhosting.be","ID149222_loic","Koffie278","ID149222_loic");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    */
    $conn = mysqli_connect("localhost","root","","bussen");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
  
?>