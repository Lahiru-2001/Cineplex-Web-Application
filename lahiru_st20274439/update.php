<?php 

include('Admindbconet.php');
$id=$_GET['updateid'];
$sql="Select * from `movies` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$movie_name=$row['movie_name'];
	$movie_language=$row['movie_language'];
     $movie_category=$row['movie_category'];
	$show_date=$row['show_date'];
	$show_time=$row['show_time'];
	$duration=$row['duration'];
    $price=$row['price'];
    $image=$row['image'];

if(isset($_POST['submit'])){
	
	$movie_name=$_POST['movie_name'];
	$movie_language=$_POST['movie_language'];
	$movie_category=$_POST['movie_category'];
	$show_date=$_POST['show_date'];
	$show_time=	$_POST['show_time'];
	$duration=	$_POST['duration'];
	$price=$row['price'];
    $image=$row['image'];
	 
	
	$sql="update`movies`set id=$id,movie_name='$movie_name',movie_language='$movie_language',movie_category='$movie_category',show_date='$show_date',show_time='$show_time',duration='$duration',price='$price',image='$image'where id=$id";
	
	$result=mysqli_query($con,$sql);
	if($result){
		//echo"update Successfully";
		
		header('location:AdminHome.php');
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
<link href="style3.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container  autocomplete="off"">
		
		<h2>Add Movie Details</h2>
	
	<form method="post">
		
		<label for="movie_name">Movie Name:</label>
            <input type="text" id="movie_name" name="movie_name" value=<?php echo $movie_name;?> required>
            
            <label for="movie_language">Movie Language:</label>
            <input type="text" id="movie_language" name="movie_language"  value=<?php echo $movie_language;?> required>
            
            <label for="movie_category">Movie Category:</label>
            <input type="text" id="movie_category" name="movie_category"  value=<?php echo $movie_category;?>>
            
            <label for="show_date">Show Date:</label>
            <input type="date" id="show_date" name="show_date"  value=<?php echo $show_date;?>required>
            
            <label for="show_time">Show Time:</label>
            <input type="time" id="show_time" name="show_time"  value=<?php echo $show_time;?> required>
            
            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" value=<?php echo $duration;?> required>
            
            <label for="image">Movie Image:</label>
            <input type="file" id="image" name="image" accept="image/*" value=<?php echo $image;?>>
            
		
		
		<button type="submit" class="btn btn-primary" name="submit">Edite</button>
		
		</form>
	</div>
	
</body>
</html>