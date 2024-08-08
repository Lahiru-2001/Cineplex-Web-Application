<?php

include'Admindbconet.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="offers table.css"  rel="stylesheet" type="text/css">
<title>Offertable</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
		<button class="btn btn- primary"><a href="AdminHome.php">Go Back</a></button>
		<button class="btn btn- primary"><a href="offers.php">Add offers</a></button>
		
		<h2 class=" of_table">Offers Table</h2>
		
		
		
		<table class="table-offers">
		
		<thead>
			<tr>
			<th scope="col">Offer Id</th>
			<th scope="col">Offer Name</th>	
			<th scope="col">Offer Details</th>
			
			<th scope="col">Date From</th>	
			<th scope="col">Date To</th>		
		    <th scope="col">Image</th>
			<th scope="col">Oparation</th>	
			</tr>
			</thead>
			
			<tbody>
				
				<?php 
				
				$sql="Select * from`offers`";
				$result=mysqli_query($con,$sql);
				
				if($result){
					while($row=mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$offer_name=$row['offer_name'];
	                $offer_details=$row['offer_details'];
	                $from_=$row['from_'];
	                $to_=$row['to_'];
	                $o_image=$row['o_image'];	
					
					echo'<tr>
				<th scope="row">'.$id.'</th>
				<td>'.$offer_name.'</td>
				<td>'.$offer_details.'</td>
				<td>'.$from_.'</td>
				<td>'.$to_.'</td>
				<td>'.$o_image.'</td>
				<td>
				
				
				<button class="btn btn-danger"><a href="ofdelete.php?deleteid='.$id.'"class="text-light">Delete</a></button>	
				</td>
				</tr>';
					
				}
				}
				
?>
			</tbody>
			
			</table>
			
			</div>
		
</body>
</html>