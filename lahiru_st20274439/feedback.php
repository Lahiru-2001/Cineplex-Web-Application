<?php 



if(isset($_POST['submit'])){
	
	include('dnAdminstaff.php');
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	
	
	 
	
	$sql="insert into `feedback`(name,email,feedback) values ('$name','$email','$feedback')";
	
	$result=mysqli_query($con,$sql);
	if($result){
		//echo"Movie Added Successfully";
		
		header('location:feedbackmassege');
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
<link href="feed.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container  autocomplete="off"">
		
		<h2>Feedback</h2>
	
	<form method="post">
		
		<label for="name">User Name:</label>
            <input type="text" id="name" name="name" required>
            
            
              
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
		
		
            
            <label for="feedback">Messages:</label>
            <input type="text" id="feedback" name="feedback" required>
            
            
            
		
		
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		
		
		
		</form>
	</div>
	
</body>
</html>