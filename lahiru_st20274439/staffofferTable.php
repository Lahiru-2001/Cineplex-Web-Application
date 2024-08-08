<?php

include'staffdb.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="SofferTab.css"  rel="stylesheet" type="text/css">
<title>Untitled Document</title>

</head>

<body>
	
	<div class="navbar"></div>
	<div class="container">
		
				<button type="submit" class="btn btn-primary" name="submit"><a href="staffmenu.php">GO Back</a></button>
		
		<h2 class=" of_table">Offers Table</h2>
		
		
		
		<table class="table-offers">
		
		<thead>
			<tr>
			<th scope="col">Offer Id</th>
			<th scope="col">Offer Name</th>	
			<th scope="col">Offer Details</th>
			<th scope="col">Movie Category</th>	
			<th scope="col">Date From</th>	
			<th scope="col">Date To</th>		
		    <th scope="col">Image</th>
			
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
				
				</tr>';
					
				}
				}
				
?>
			</tbody>
			
			</table>
			
			</div>
		
</body>
</html>