<?php
 

$conn = mysqli_connect("localhost","root","","cruddb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>