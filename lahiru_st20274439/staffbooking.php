<?php

include'staffdb.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="bookingstaff.css"  rel="stylesheet" type="text/css">
<title>booking details</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
		<button type="submit" class="btn btn-primary" name="submit"><a href="staffmenu.php">GO Back</a></button>
		
		<h2 class="event_table">Booking Details Table</h2>
		
		
		
		<table class="table-offers">
		
		<thead>
			<tr>
			<th scope="col">Booking Id</th>
			<th scope="col">email</th>	
			<th scope="col">Movie Name</th>
			<th scope="col">Seats</th>
				<th scope="col">Price</th>
				<th scope="col">Oparation</th>
		    
				
			
			</thead>
			
			<tbody>
				
				<?php 
				
				$sql="Select * from`booking`";
				$result=mysqli_query($con,$sql);
				
				if($result){
					while($row=mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$email=$row['email'];
	                $movie=$row['movie'];
	                $seat=$row['seat'];
	                $price=$row['price'];
					
					echo'<tr>
				<th scope="row">'.$id.'</th>
				<td>'.$email.'</td>
				<td>'.$movie.'</td>
				
				<td>'.$seat.'</td>
				<td>'.$price.'</td>
				
				
				<td>
				
				<button class="btn btn-danger"><a href="deletebooking.php?deleteid='.$id.'">Delete</a></button>	
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