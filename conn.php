<?php
 
//MySQLi DB Connection
$conn = mysqli_connect("localhost","root","","chat_system"); 
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>