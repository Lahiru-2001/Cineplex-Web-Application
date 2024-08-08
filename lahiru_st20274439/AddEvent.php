<?php 



if(isset($_POST['submit'])){
	
	include('Admindbconet.php');
	
	$event_name=$_POST['event_name'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$price=$_POST['price'];
	$image=$_POST['image'];
	
	 
	
	$sql="insert into `event`(event_name,date,time,price,image) values ('$event_name','$date','$time','$price','$image')";
	
	$result=mysqli_query($con,$sql);
	if($result){
		//echo"Movie Added Successfully";
		
		header('location:EventTable.php');
	}else{
		
		die(mysqli_error($con));
	}


	
}


?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Addevent.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container  autocomplete="off"">
		
		<h2>Add Event</h2>
	
	<form method="post">
		
		<label for="event_name">Event Name:</label>
            <input type="text" id="event-name" name="event_name" required>
            
            
              
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
		
		<label for="time">Time:</label>
            <input type="time" id="date" name="time" required>
		
            
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>
            
            <label for="image">Event Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            
		
		
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		
		
		
		</form>
	</div>
	
</body>
</html>