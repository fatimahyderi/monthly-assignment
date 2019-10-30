<?php
	include 'conn.php';
		
		if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(isset($_POST['submit'])){
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$sql_update = 'UPDATE user SET firstname="'.$fname.'", lastname="'.$lname.'", email="'.$email.'", age='.$age.' WHERE id = '.$id;
		if(mysqli_query($conn, $sql_update)){
			header('location: http://localhost/practice/nf/crud/');
			exit();
		} else{
			echo mysqli_error($conn);
		}
	}
	//echo $id;
	$n=mysqli_query($conn,"select * from `user` where id='$id'");
		$nrow=mysqli_fetch_array($n);
		//print_r($nrow);
		}
	?>
	
  
   
			<center><h3>Update Member</h3></center>
		
		<form action='#' method="post">
		
			Firstname: <input type="text" name='firstname' value="<?php echo $nrow['firstname']; ?>" id="ufirstname<?php echo $nrow['id']; ?>">
			Lastname: <input type="text" name='lastname' value="<?php echo $nrow['lastname']; ?>" id="ulastname<?php echo $nrow['id']; ?>" >
			Email: <input type="text" name='email' value="<?php echo $nrow['email']; ?>" id="uemail<?php echo $nrow['id']; ?>" >
			Age: <input type="text" name='age' value="<?php echo $nrow['age']; ?>" id="uage<?php echo $nrow['id']; ?>" >
			
			<input name='submit' type='submit' />
		
			<!--<button  type=" button" id="updateuser" value="<?php echo $nrow['id']; ?>">Save</button>-->
		
		</form>
  
  