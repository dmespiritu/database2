<?php

include ("session.php");
session_start();
 
$database = "BlazeCoin";
$table = "Blazecoin";

if ($db){

$insertCrypto = "INSERT INTO $table (Name, Price) 
VALUES ('$_POST[Name]','$_POST[Price]')";
mysqli_query($db,$insertCrypto);

$insertCrypto = "INSERT INTO $table (Name, Price,) 
VALUES ('$_POST[Name]','$_POST[Price]',)";
mysqli_query($db,$insertCrypto);

$insertCrypto = "INSERT INTO $table (Name, Price)
VALUES ('$_POST[Name]','$_POST[Price]')";
mysqli_query($db,$insertCrypto);


header("Location: admin.php");


}

 
?>