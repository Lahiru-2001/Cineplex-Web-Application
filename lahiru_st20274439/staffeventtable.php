<?php

include'staffdb.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="Sevent.css"  rel="stylesheet" type="text/css">
<title>Untitled Document</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
		<button type="submit" class="btn btn-primary" name="submit"><a href="staffmenu.php">GO Back</a></button>
		
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
				
				</tr>';
					
				}
				}
				
?>
			</tbody>
			
			
			
		</table>
		
		
		
	</div>
		
</body>
</html>