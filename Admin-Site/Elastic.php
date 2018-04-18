<!DOCTYPE html>
<html>
<title>BlazeCoin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
body {
    background-image: url("pic.jpg");
}
</style> 
<?php
   include("config.php");		
   session_start();
?>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="admin.php" class="w3-bar-item w3-button"><b>BlazeCoin</b> Products</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      
      <a href="admin.php" class="w3-bar-item w3-button">Admin</a>
 <a href="Elastic.php"class="w3-bar-item w3-button">Elastic</a> 
	<a href="viewCoin.php" class="w3-bar-item w3-button">Cart</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <div class="w3-display-middle w3-margin-top w3-center">

  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
<div class="w3-container w3-padding-32" id="projects">
<center><h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Elastic Search Bar<h3><center>
</div>
<center> <input type="text" placeholder="Search.."><center>