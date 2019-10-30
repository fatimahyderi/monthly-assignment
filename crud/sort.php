  <?php  
include 'conn.php'; 
if(isset($_POST['column']) && isset($_POST['sortOrder']))
	{
		$columnName = str_replace(" ","_",strtolower($_POST['column']));
		$sortOrder  = $_POST['sortOrder'];
$select_query = "SELECT * FROM user ORDER BY ".$columnName." ".$sortOrder." ";

$result = mysqli_query($conn,$select_query);


  $count = 0;
    while($urow = mysqli_fetch_assoc($result))
			{
				?>
				
				<tr>
									<td><input type="checkbox" name="id" value="<?php echo $urow["id"]; ?>" /></td>
									<td><?php echo ++$count; ?></td>
									<td><?php echo $urow['firstname']; ?></td>
									<td><?php echo $urow['lastname']; ?></td>
									<td><?php echo $urow['email']; ?></td>
									<td><?php echo $urow['age']; ?></td>
									<td><a href="edit_modal.php?id=<?php echo $urow['id']; ?>"> Edit</a>  </td>
									<td><button class="btn btn-danger delete" value="<?php echo $urow['id']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									
									
									</td>
								</tr>
								<?php
			}
}

 ?>  