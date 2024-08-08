<?php 

include('payment.php');

if(isset($_POST['submit'])){
	
	$email=$_POST['email'];
	$movie=$_POST['movie'];
	$seat=$_POST['seat'];
	$price=$_POST['price'];
		
	 
	
	$sql = "INSERT INTO `booking` (email, movie, seat, price) VALUES ('$email', '$movie', '$seat', '$price')";

	
	$result=mysqli_query($con,$sql);
	if($result){
		
		//echo"Movie Added Successfully";
		
		header('location:masage.html');
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
<link href="makepayment.css" rel="stylesheet" type="text/css">
</head>

<body>
		
		<h2>Make Payment</h2>
	
	<div class="container">
	
	<form method="post">
		<div class="form-group">
		<label>Email:</label>
            <input type="text" class="form-control" placeholder="Enter your user Email" name="email" required>
		</div>
            
            <div class="form-group">
      <label>Pick a movie:</label>
      <select name="movie">
       <option value="400">Guy Ritchie's The Covenant(Rs:400)</option>
		<option value="350">Captain Miller(Rs:350)</option>
		<option value="500">Extraction 2(Rs:500)</option>
		<option value="450">Gran Turismo(Rs:450)</option>
      </select>
    </div>

          <div class="form-group">
		<label>Number Of Seats:</label>
            <input type="text" class="form-control"  name="seat" required>
		</div>
		
		 <div class="form-group">
		<label>Price:Rs.</label>
            <input type="text" class="form-control"  name="price" required>
		</div>
            
		
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		
		</form>
		
		<div>
			<a class="go-back" href="booking.html">Go Back</a>
		
		
		</div>
		
	</div>
	
</body>
</html>