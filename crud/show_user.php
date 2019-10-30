
<?php
	include('conn.php');
	if(isset($_POST['show'])){
		?>
		<script type = "text/javascript">
	$(document).ready(function(){
		document.getElementById("form-inline").reset();
	});
	</script>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>checkbox</th>
				<th>S.No</th>
				<th><a class="column_sort" id="firstname-asc" >Firstname</a></th>
				<th><a class="column_sort" id="lastname-asc">Lastname</a></th>
				<th><a class="column_sort" id="email-asc">Email</a></th>
				<th><a class="column_sort" id="age-asc">Age</a></th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"select * from user");
						$count = 0;
						while($urow = mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><input type="checkbox" name="id" value="<?php echo $urow["id"]; ?>" /></td>
									<td><?php echo ++$count; ?></td>
									<td><?php echo $urow['firstname']; ?></td>
									<td><?php echo $urow['lastname']; ?></td>
									<td><?php echo $urow['email']; ?></td>
									<td><?php echo $urow['age']; ?></td>
									<td><a href="edit_modal.php?id=<?php echo $urow['id']; ?>"> Edit</a> </td>
									<td><button class="btn btn-danger delete" value="<?php echo $urow['id']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									
									
									</td>
								</tr>
								 <?php
						}
						
					
					?>
					<button type="button" name="btn_delete"  id="btn_delete" class="btn btn-success">Delete</button>
							
				</tbody>
			</table>
		<?php
	}
	

?>
