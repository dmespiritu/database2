<?php

include ("session.php");
session_start();
 
$database = "SneakerGang";
$table = "Customer";

if ($db){

$insertCustomers = "INSERT INTO $table (FirstName, LastName, PhoneNumber, Username, Password) 
VALUES ('$_POST[fName]', '$_POST[lName]','$_POST[pNumber]', '$_POST[username]', '$_POST[password]')";
mysqli_query($db,$insertCustomers);



header("Location: admin.php");


}

 
?>