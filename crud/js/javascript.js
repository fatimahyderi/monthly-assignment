$(document).ready(function(){
		
   	
		showUser();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#firstname').val()=="" || $('#lastname').val()=="" || $('#email').val()=="" || $('#age').val()==""){
				alert('Please input data first');
			}
			else{
			$firstname=$('#firstname').val();
			$lastname=$('#lastname').val();	
			$email=$('#email').val();
			$age=$('#age').val();
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						firstname: $firstname,
						lastname: $lastname,
						email: $email,
						age: $age,
						add: 1,
					},
					success: function(){
						showUser();
					}
				});
			}
		});
		
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
			//$id=$(this).val();
			//console.log($id);
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		
		
		//delete multiple
 $(document).on('click', '#btn_delete', function(){
   var mid = [];
   $(':checkbox:checked').each(function(i){
    mid[i] = $(this).val();
   });
   console.log(mid);
   if(mid.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else{
	   //alert("Please one checkbox");
    $.ajax({
	
					type: "POST",
					url: "multiple.php",
					data: {
						mid : mid,
						del: 1,
					},
				
					success: function(){
						showUser();
					
					}
					
					
				});
			}
		});
		
		
	//sorting
		 
      $(document).on('click', '.column_sort', function(){  
           var getSortHeading = $(this);
			var getNextSortOrder = getSortHeading.attr('id');
			
			var splitID = getNextSortOrder.split('-');
			
			var splitIDName = splitID[0];
			var splitOrder = splitID[1];
			
			//get current td value
			var getColumnName = getSortHeading.text();
           $.ajax({  
                  
                type:"POST", 
				url: "sort.php",
                data:{'column':getColumnName,'sortOrder':splitOrder},
						
					//console.log(data);
                success: function(response){
					if(splitOrder == 'asc')
					{
						getSortHeading.attr('id',splitIDName+'-desc');
					}
					else
					{
						getSortHeading.attr('id',splitIDName+'-asc');
					}	
						$("#userTable tr:not(:first)").remove();
 
						$("#userTable").append(response);
						
					}  
				
           });
    });  
 });  
	
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			//async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
	
	