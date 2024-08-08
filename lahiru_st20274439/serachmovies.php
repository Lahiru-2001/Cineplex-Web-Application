<?php 

include('dnAdminstaff.php');

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<! –– link with css sheet ––> 
<link href="searchmovie.css" rel="stylesheet" type="text/css">
	
	<! –– link with googel font ––>
	 <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body>
	<! –– create the navigation bar and menu list ––>
	
	<div class="navbar">
	
		<div class="navbar-container">
			<div class="logo-container">
				
		<a href="adminstafflogin.html"><hi class="logo">Cineplex</hi></a></div>
			
																			   
			
			<div class="menu-container">
			
				<ul class="menu-list"> <!--add menu list-->
				
					<li class="menu-list-item"><a href="HomePage.html">Home</a></li>
					<li class="menu-list-item"><a href="serachmovies.php">Serach</a></li>
					<li class="menu-list-item"><a href="upcommingmovie.html">Up Coming Movies</a></li>
					<li class="menu-list-item"><a href="booking.html">Buy Tickets</a></li>
					<li class="menu-list-item"><a href="offershome.html">Offers</a></li>
					<li class="menu-list-item"><a href="eventhome.css">Event</a></li>
					<li class="menu-list-item"><a href="feedback.php">Contact us</a></li>
					<li class="menu-list-item"><a href="Aboutus.html">About us</a></li>
				<li class="menu-list-item"><a href="parking.html">Parking Availablity</a></li>
				
				</ul>
			
			</div>
			<div class="profile-container">  <!--add pofile photo-->
			
				<img class="profile-picture" src="images/im2.jpg" alt=""> <!--add photo-->
				
			<div class="login-text-container"></div> <!--add login text-->
				
				<span class="login-text">LOGIN</span>

				 <button ><a href="LoginUser.php"><i class="fa-solid fa-square-caret-down"></i></a></button><!-- arrow icon-->
			
			</div>
		</div>
	</div>
	
	
	<div class="sidebar">
	
		
	
	</div>
	

 <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(1,0,0,0), #151515), url('images/war.jpeg');">
               
				
				<div class="container-serach"> 
		<form method="post">
		
		<input type="text" placeholder="Serach Movies" name="search">
			<button class="btn-search" name="submit">Search</button>
		
		
		</form>
	
		
		
		<table class="table">
			
			<?php 
			
			if(isset($_POST['submit'])){
				
				$search=$_POST['search'];
				
				$sql="Select * from`movies` where movie_name='$search' ";
				
				$result=mysqli_query($con,$sql);
	            if($result){
				
				   if(mysqli_num_rows($result)>0){
				
				echo '<thead>
				
				<tr>
				<th>Movie Name</th>
				<th>Movie Language</th>
				<th>Movie Category</th>
				<th>Show Date</th>
				<th>Show Time</th>
				<th>Duration</th>
				<th>Tecket Price</th>
				<th>Image</th>
				<th>Buy Teckets</th>
				</tr>
				</thead>
				';
					$row=mysqli_fetch_assoc($result);
					echo '<tbody>
					<tr>
					<td>'.$row['movie_name'].'</td>
					<td>'.$row['movie_language'].'</td>
					<td>'.$row['movie_category'].'</td>
					<td>'.$row['show_date'].'</td>
					<td>'.$row['show_time'].'</td>
					<td>'.$row['duration'].'</td>
					<td>'.$row['price'].'</td>
					<td>'.$row['image'].'</td>
					<td>
				    <button class="btn btn-primary"><a href="booking.html">Buy</a></button>
					
				</td>
					</tr>
					</tbody>
					
					';
					
					
				}
					else{
						echo '<h2 class=:text-danger>Not Availabel</h2>';
					}
				}
			}
			
			
			?>
			
			
			</table>
		
		</div>
	
	</div>
				
				
	</div>
	 </div>
	

</body>
	
</html>