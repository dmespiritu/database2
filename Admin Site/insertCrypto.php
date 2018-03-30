<?php

include ("session.php");
session_start();
 
$database = "BlazeCoin";
$table = "Blazecoin";

if ($db){

$insertCrypto = "INSERT INTO $table (Name, Price) 
VALUES ('$_POST[name]','$_POST[price]')";
mysqli_query($db,$insertCrypto);


header("Location: admin.php");


}

 
?>