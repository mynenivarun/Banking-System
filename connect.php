<?php
///local host experiment data connection

//$servername = "localhost";
// Enter your MySQL username below(default=root)
//$username = "admin";
// Enter your MySQL password below
//$password = "RxIzoEazNWB65m4i";
//$dbname = "net_banking";


//remote sql connection

$servername = "remotemysql.com";
// Enter your MySQL username below(default=root)
$username = "xKRi93wHXs";
// Enter your MySQL password below
$password = "YSTLzBJ5ST";
$dbname = "xKRi93wHXs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
