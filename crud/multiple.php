<?php
	
include('conn.php');
	if(isset($_POST["mid"]))
{
	//die('hello');
 foreach($_POST["mid"] as $id)
 {
	
  mysqli_query($conn,"delete from `user` where id='$id'");
 // echo $id;

 }
}
?>