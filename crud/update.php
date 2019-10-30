<?php
	include('conn.php');

	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		
		$up = mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where id='$id'");
	}print_r($up);
?>