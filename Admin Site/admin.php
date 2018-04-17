<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>BlazeCoin</title>
</head>
<body>
<?php
   include("session.php");      
   session_start();
?>
<style>
body{
}
</style>
        <h1><a href = "admin.php">BlazeCoin Admin <?php echo $login_session; ?></h1> 
            <h2><a href = "logout.php">Sign Out Here</a></h2>

<h2>Add CryptoCurrency Here </h2>
<form action="insertCrypto.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="pname">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="pprice">
    </p>
   


    <input type="submit" value="Submit">
</form>



<p>
<?php


$database = "BlazeCoin";
$table = "Blazecoin";


$sql = "SELECT * FROM Blazecoin";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Crypto_ID: " . $row["Crypto_ID"]. " - Name: " . $row["Name"]. " - Price: " . $row["Price"]. "
        <br>";
    }
} else {
    echo "0 results";
}

?>
</p>


<h2> Add Customers </></h2>

<form action="insertCustomers.php" method="post">
    <p>
        <label for="fName">First Name:</label>
        <input type="text" name="fName" id="cfname">
    </p>
    <p>
        <label for="lName">Last Name:</label>
        <input type="text" name="lName" id="clname">
    </p>
    <p>
        <label for="pNumber">Phone Number:</label>
        <input type="text" name="pNumber" id="cPnumber">
    </p>
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="cUsername">
    </p>
    
    <p>
        <label for="password">Password:</label>
        <input type="text" name="password" id="cpassword">
    </p>
    

    <input type="submit" value="Submit">
</form>

<!--
Adding a customer to the database, make sure it's connected to BlazeCoin
<form action="insertCustomers.php" method="post">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="cUsername">
    </p>
    <p>
        <label for="password">Password:</label>
        <input type="text" name="password" id="cPassword">
    </p>
      
    <p>
        <label for="password">Email:</label>
        <input type="text" name="email" id="cEmail">
    </p>


    <input type="submit" value="Submit">
</form>
-->

<p>
<?php
$database = "BlazeCoin";
$table = "Customer";


$sql = "SELECT * FROM Customer";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "CustomerID: ". $row["CustomerID"]. " - Name: ". $row["FirstName"]. " " . $row["LastName"] . " - Phone Number: ". $row["PhoneNumber"]. " - Username: ". $row["Username"]. "<br>" ;
    }
} else {
    echo "0 results";
}
?>
</p>

</body>
</html>
