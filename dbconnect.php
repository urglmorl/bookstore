<?php 
define('DB_HOST', 'mysql host'); 
define('DB_NAME', 'database name'); 
define('DB_USER','username'); 
define('DB_PASSWORD','password'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
?>