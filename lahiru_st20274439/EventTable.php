<?php

include'Admindbconet.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="eventtable.css"  rel="stylesheet" type="text/css">
<title>Untitled Document</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
		<button class="btn btn- primary"><a href="AdminHome.php">Go Back</a></button>
		<button class="btn btn- primary"><a href="AddEvent.php">Add Event</a></button>
		
		<h2 class="event_table">Event Table</h2>
		
		
		
		<table class="table-offers">
		
		<thead>
			<tr>
			<th scope="col">Event Id</th>
			<th scope="col">Event Name</th>	
			<th scope="col">Date</th>
			<th scope="col">Time</th>
				<th scope="col">Price</th>
		    <th scope="col">Image</th>
			<th scope="col">Oparation</th>	
			</tr>
			</thead>
			
			<tbody>
				
				<?php 
				
				$sql="Select * from`event`";
				$result=mysqli_query($con,$sql);
				
				if($result){
					while($row=mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$event_name=$row['event_name'];
	                $date=$row['date'];
	                $time=$row['time'];
	                $price=$row['price'];
	                $image=$row['image'];	
					
					echo'<tr>
				<th scope="row">'.$id.'</th>
				<td>'.$event_name.'</td>
				<td>'.$date.'</td>
				<td>'.$time.'</td>
				<td>'.$price.'</td>
				<td>'.$image.'</td>
				<td>
				
				
				<button class="btn btn-danger"><a href="Event_delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>	
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