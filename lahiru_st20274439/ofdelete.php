<?php 

include'Admindbconet.php';

if(isset($_GET['deleteid'])){
	
	$id=$_GET['deleteid'];
	
	
	$sql="delete from `offers` where id=$id";
	
	$result=mysqli_query($con,$sql);
	
	if($result){
		
		//echo"Delete successfull";
		
		header('location:offers table.php');
	}else{
		die(mysqli_error($con));
	}
}



?>