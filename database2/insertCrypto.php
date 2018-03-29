<?php

include ("session.php");
session_start();
 
$database = "SneakerGang";
$table = "Shoes";

if ($db){

$insertShoes = "INSERT INTO $table (Name, Price, Color, Weight, UpperHeight, Size, Quantity) 
VALUES ('$_POST[name]','$_POST[price]', '$_POST[color]','$_POST[weight]', '$_POST[upperHeight]', '10', '2')";
mysqli_query($db,$insertShoes);

$insertShoes = "INSERT INTO $table (Name, Price, Color, Weight, UpperHeight, Size, Quantity) 
VALUES ('$_POST[name]','$_POST[price]', '$_POST[color]','$_POST[weight]', '$_POST[upperHeight]', '10.5', '2')";
mysqli_query($db,$insertShoes);

$insertShoes = "INSERT INTO $table (Name, Price, Color, Weight, UpperHeight, Size, Quantity) 
VALUES ('$_POST[name]','$_POST[price]', '$_POST[color]','$_POST[weight]', '$_POST[upperHeight]', '11', '2')";
mysqli_query($db,$insertShoes);


header("Location: admin.php");


}

 
?>