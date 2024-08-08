<?php 

include('Admindbconet.php');

if(isset($_POST['submit'])){
	
	$movie_name=$_POST['movie_name'];
	$movie_language=$_POST['movie_language'];
	$movie_category=$_POST['movie_category'];
	$show_date=$_POST['show_date'];
	$show_time=	$_POST['show_time'];
	$duration=	$_POST['duration'];
	$price=$_POST['price'];	
	 
	
	$sql="insert into `movies`(movie_name,movie_language,movie_category,show_date,show_time,duration,price) values ('$movie_name','$movie_language','$movie_category','$show_date','$show_time','$duration','$price')";
	
	$result=mysqli_query($con,$sql);
	if($result){
		
		
		header('location:AdminHome');
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
<link href="movieadd.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container  autocomplete="off"">
		
		<h2>Add Movie Details</h2>
	
	<form method="post">
		
		<label for="movie_name">Movie Name:</label>
            <input type="text" id="movie_name" name="movie_name" required>
            
            <label for="movie_language">Movie Language:</label>
            <input type="text" id="movie_language" name="movie_language" required>
            
            <label for="movie_category">Movie Category:</label>
            <input type="text" id="movie_category" name="movie_category" required>
            
            <label for="show_date">Show Date:</label>
            <input type="date" id="show_date" name="show_date" required>
            
            <label for="show_time">Show Time:</label>
            <input type="time" id="show_time" name="show_time" required>
            
            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" required>
		
		    <label for="price">Movie Price:</label>
            <input type="text" id="price" name="price" required>
            
            <label for="image">Movie Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            
		
		
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		
		</form>
	</div>
	
</body>
</html>