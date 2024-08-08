<?php 
session_start();

include('dbuser.php');
if(isset($_POST['submit'])){
	
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	
	$result=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'") or die("error");
	
	$row =mysqli_fetch_assoc($result);
	
	
	
	if(is_array($row)&& !empty($row)){
		
		$_SESSION['email']=$row['email'];
		$_SESSION['password']=$row['password'];
		
		echo"<script>alert('login successfull');</script>";
		
		header("location:HomePageuser.html");
		
		
	}else{
		
		echo"<script>alert('login Failed');</script>";
		
	}
}










?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="Userlogin.css" rel="stylesheet" type="text/css">
</head>

<body>
		
		<h2>User Login</h2>
	
	<div class="container">
	
	<form method="post">
		
 
          <div class="form-group">
		<label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
		</div>
          <div class="form-group">
		<label>Password:</label>
            <input type="password" class="form-control"  name="password" required>
		</div>
            
		
		<button type="submit" class="btn btn-primary" name="submit">Login</button>
		
		</form>
		
		<div>
			Do not have a account:-<a href="Registation.php">Registation</a>
		
		
		</div>
		
	</div>
	
</body>
</html>