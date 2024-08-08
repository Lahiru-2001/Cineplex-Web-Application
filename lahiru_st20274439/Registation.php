<?php
if(isset($_POST['submit'])){
	
	include('dbuser.php');
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Check if email already exists
	$email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$result = mysqli_query($con, $email_check_query);
	$user = mysqli_fetch_assoc($result);
	
	if ($user) { // If email exists
		echo "Email already exists. Please use a different email address.";
	} else {
		// Proceed with inserting user data into the database
		$sql = "INSERT INTO `users` (username, email, password) VALUES ('$username', '$email', '$password')";
		$insert_result = mysqli_query($con, $sql);
		
		if($insert_result){
			echo "Data added successfully.";
		} else {
			die(mysqli_error($con));
		}
	}
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="UserRegistation.css" rel="stylesheet" type="text/css">
</head>

<body>
		
		<h2>User Registation</h2>
	
	<div class="container">
	
	<form method="post">
		<div class="form-group">
		<label>User Name:</label>
            <input type="text" class="form-control" placeholder="Enter your user name" name="username" required>
		</div>
            
          <div class="form-group">
		<label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
		</div>
          <div class="form-group">
		<label>Password:</label>
            <input type="password" class="form-control"  name="password" required>
		</div>
            
		
		<button type="submit" class="btn btn-primary" name="submit">Registation</button>
		
		</form>
		
		<div>
			Alraedy have a account:-<a href="LoginUser.php">Login</a>
		
		
		</div>
		
	</div>
	
</body>
</html>