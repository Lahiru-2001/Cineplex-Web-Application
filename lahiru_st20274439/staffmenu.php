<?php

include'staffdb.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="Smenu.css"  rel="stylesheet" type="text/css">
<title>Untitled Document</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
		<h1 class="container-hede">Staff Menu</h1>
	
	
		
		<button type="submit" class="btn btn-primary" name="submit"><a href="feedbackstaff.php">Feedback Message</a></button>
		<button type="submit" class="btn btn-primary" name="submit"><a href="staffbooking.php">Booking Details</a></button>
		<button type="submit" class="btn btn-primary" name="submit"><a href="staffofferTable.php">Offer Details</a></button>
		<button type="submit" class="btn btn-primary" name="submit"><a href="staffeventtable.php">Event Details</a></button>
		
		<button type="submit" class="btn btn-primary" name="submit"><a href="adminstafflogin.html">Logout</a></button>
		
		<table class="table">
			
			<h2>Movie Table</h2>
		
		<thead>
			<tr>
			<th scope="col">Movie Id</th>
			<th scope="col">Movie Name</th>	
			<th scope="col">Movie Language</th>
			<th scope="col">Movie Category</th>	
			<th scope="col">Show Date</th>	
			<th scope="col">Show Time</th>	
			<th scope="col">Duration</th>
			<th scope="col">Price</th>	
		    <th scope="col">Image</th>
				
			</tr>
			</thead>
			
			<tbody>
				
				<?php 
				
				$sql="Select * from`movies`";
				$result=mysqli_query($con,$sql);
				
				if($result){
					while($row=mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$movie_name=$row['movie_name'];
	                $movie_language=$row['movie_language'];
	                $movie_category=$row['movie_category'];
	                $show_date=$row['show_date'];
	                $show_time=$row['show_time'];
	                $duration=$row['duration'];
					$price=$row['price'];	
					$image=$row['image'];	
					
					echo'<tr>
				<th scope="row">'.$id.'</th>
				<td>'.$movie_name.'</td>
				<td>'.$movie_language.'</td>
				<td>'.$movie_category.'</td>
				<td>'.$show_date.'</td>
				<td>'.$show_time.'</td>
				<td>'.$duration.'</td>
				<td>'.$price.'</td>
				<td>'.$image.'</td>
				
				</tr>';
					
				}
				}
				
?>
			</tbody>
			
			
			
		
		
		
		
	</div>
		
</body>
</html>