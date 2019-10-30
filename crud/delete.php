<?php
	include('conn.php');
	if(isset($_POST['del'])){
		$id=$_POST['id'];
		$del = mysqli_query($conn,"delete from `user` where id='$id'");
	}print_r($del);
?>