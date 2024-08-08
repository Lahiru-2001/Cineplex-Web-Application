<?php 



if(isset($_POST['submit'])){
	
	include('Admindbconet.php');
	
	$offer_name=$_POST['offer_name'];
	$offer_details=$_POST['offer_details'];
	$from_=$_POST['from_'];
	$to_=$_POST['to_'];
	$o_image=$_POST['o_image'];
	
	 
	
	$sql="insert into `offers`(offer_name,offer_details,from_,to_,o_image) values ('$offer_name','$offer_details','$from_','$to_','$o_image')";
	
	$result=mysqli_query($con,$sql);
	if($result){
		//echo"Movie Added Successfully";
		
		header('location:offers table.php');
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
<link href="offers.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container  autocomplete="off"">
		
		<h2>Add offers</h2>
	
	<form method="post">
		
		<label for="offer_name">Offer Name:</label>
            <input type="text" id="offer_name" name="offer_name" required>
            
            <label for="offer_detauls">Offer Detsils:</label>
            <input type="text" id="offer_details" name="offer_details" required>
              
            <label for="from_">Date(from):</label>
            <input type="date" id="from_" name="from_" required>
            
            <label for="to_">Date (To):</label>
            <input type="date" id="to_" name="to_" required>
            
            <label for="o_image">Offer Image:</label>
            <input type="file" id="o_image" name="o_image" accept="image/*">
            
		
		
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		
		</form>
	</div>
	
</body>
</html>