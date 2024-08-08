<?php

include'staffdb.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="bookingstaff.css"  rel="stylesheet" type="text/css">
<title>Feedback</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
		<button type="submit" class="btn btn-primary" name="submit"><a href="staffmenu.php">GO Back</a></button>
		
		<h2 class="event_table">Feedback</h2>
		
		
		
		<table class="table-offers">
		
		<thead>
			<tr>
			<th scope="col">Feedback Id</th>
			<th scope="col">Name</th>	
			<th scope="col">Email</th>
			<th scope="col">Feedback</th>
				
				<th scope="col">Oparation</th>
		    
				
			
			</thead>
			
			<tbody>
				
				<?php 
				
				$sql="Select * from`feedback`";
				$result=mysqli_query($con,$sql);
				
				if($result){
					while($row=mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$name=$row['name'];
	                $email=$row['email'];
	                $feedback=$row['feedback'];                
					
					echo'<tr>
				<th scope="row">'.$id.'</th>
				<td>'.$name.'</td>
				<td>'.$email.'</td>
				
				<td>'.$feedback.'</td>
			
				
				
				<td>
				
				<button class="btn btn-danger"><a href="deletefeedback.php?deleteid='.$id.'">Delete</a></button>	
				</td>
				</tr>';
				
				
					
				}
				}
				
?>
			</tbody>
			
			
			
		</table>
		
		
		
	</div>
		
</body>
</html>