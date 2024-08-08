<?php

$con=new mysqli('localhost','root','','cineplex_db');

if(!$con){
	
	die(mysqli_error($con));
	
}
?>

