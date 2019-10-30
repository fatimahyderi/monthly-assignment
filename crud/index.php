<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<style>
table, th, td {
  border: 1px solid black;
  
	width:150px;
 height:30px;
}
</style>
		<title>PHP CRUD Operation using AJAX/JQuery</title>
	</head>
<body>
	          <center><h2>PHP - CRUD Operation using AJAX/JQuery</h2></center>
					<hr>
				<div>
					<form id = "form-inline">
						<div class = "form-group">
							<label>Firstname:</label>
							<input type  = "text"  id = "firstname" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Lastname:</label>
							<input type  = "text" id = "lastname" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Email:</label>
							<input type  = "text"  id = "email" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Age:</label>
							<input type  = "number"  id = "age" class = "form-control">
						</div>
						<div class = "form-group">
							<button type = "button" id="addnew" > Add</button>
						</div>
					</form>
				</div>
                <br>
			
			<div id="userTable"></div>
			
		
	
</body>
<script src = "js/jquery-3.4.1.min.js"></script>	
<script src="js/javascript.js"></script>
</html>