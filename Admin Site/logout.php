<?php
   session_start();
   
   include("config.php");
   
   $myusername = $_SESSION['login_user'];
   
   if(session_destroy()) {
   	$sql = "UPDATE Admin SET LoggedIn = 0 WHERE Username = '$myusername'";
		mysqli_query ($db,$sql);
   	if(isset($_SERVER['HTTP_COOKIE'])){
   		$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
   		foreach($cookies as $cookie){
   			$parts = explode('=', $cookie);
   			$name = trim($parts[0]);
   			setcookie($name, '', time()-1000);    
   			setcookie($name, '', time()-1000, '/');
   		}
   	}
      header("Location: login.php");
   }
?>

