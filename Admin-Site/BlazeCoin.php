<!DOCTYPE html>
<html>
<title>BlazeCoin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
    background-image: url("pic.jpg");
}
</style> 
<body>

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
      
      
	<a href="viewCoin.php" class="w3-bar-item w3-button">Cart</a>
	<a href="logout.php" class="w3-bar-item w3-button">Sign Out</a>
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
    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16">Buy CryptoCurrency</h2>
  </div>

  <div class="w3-row-padding">
   <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">ByrdCoin $920</div>
        <img src="articuno.jpg" alt="House" style="width:100%">
		<form action="addToMongo2.php" method="post">
    </br>
		<input type="Submit">
		</form>
	<p> 
		
	</p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">BlazikenCoin $10,000</div>
        <img src="blaze.jpg" alt="House" style="width:100%">
		<form action="addToMongo1.php" method="post">
    </br>
		<input type="Submit">
		</form>
      </div>
    </div>
    <div>


    </div>