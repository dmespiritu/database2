<?php

include ("session.php");
session_start();
 
$database = "BlazeCoin";
$table = "Customer";

if ($db){

$insertCustomers = "INSERT INTO $table (Username, Password, Email) 
VALUES ('$_POST[username]', '$_POST[password]','$_POST[email]')";
mysqli_query($db,$insertCustomers);



header("Location: admin.php");


}

 
?>