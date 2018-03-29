<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'T4k3 0ff, eh?');
   define('DB_DATABASE', 'BlazeCoin');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$db)
{
die("Connection failed: ".mysqli_connect_error());
}

echo "Connected successfully";



?>