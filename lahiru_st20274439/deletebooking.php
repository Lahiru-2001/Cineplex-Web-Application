<?php 

include'staffdb.php';

if(isset($_GET['deleteid'])){
	
	$id=$_GET['deleteid'];
	
	
	$sql="delete from `booking` where id=$id";
	
	$result=mysqli_query($con,$sql);
	
	if($result){
		
		//echo"Delete successfull";
		
		header('location:staffbooking.php');
	}else{
		die(mysqli_error($con));
	}
}



?>