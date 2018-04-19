<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>BlazeCoin</title>
</head>
<style>
body {
    background-image: url("pic.jpg");
}
</style> 
<body>
<?php
   include("session.php");      
   session_start();
?>

<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="admin.php" class="w3-bar-item w3-button"><b>BlazeCoin</b> Products</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      
      <a href="admin.php" class="w3-bar-item w3-button">Admin</a>
      <a href="BlazeCoin.php"class="w3-bar-item w3-button">Customer View</a>
      <a href="Elastic.php"class="w3-bar-item w3-button">Elastic</a> 
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

</br>
</br>


<p>
<?php

		$input = escapeshellcmd('sh output.sh');
   		$output = shell_exec($input);
		echo $output; 
?>
</p>

<p>
<?php
if($db)
$sql = "SHOW GLOBAL STATUS LIKE 'Uptime' ";
$results = mysqli_query($db, $sql);

if ($results->num_rows > 0){
while($row = $results->fetch_assoc()) {

$seconds = $row["Value"];
echo "MYSQL Uptime = " .gmdate("H:i:s", $seconds);
  }
}
?>
</p>
<p>
<?php
$Mongo = shell_exec("mongo --quiet --eval \"db.serverStatus().uptime\"");
$mongoUptime = gmdate("H:i:s", $Mongo);
echo "Mongo Uptime = ". $mongoUptime;
?>
</p>
    

</body>
</html>
