<?php 

include'staffdb.php';

if(isset($_GET['deleteid'])){
	
	$id=$_GET['deleteid'];
	
	
	$sql="delete from `feedback` where id=$id";
	
	$result=mysqli_query($con,$sql);
	
	if($result){
		
		//echo"Delete successfull";
		
		header('location:feedbackstaff.php');
	}else{
		die(mysqli_error($con));
	}
}



?>