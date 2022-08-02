<?php 
session_start();
	if(isset($_COOKIE['s1'])){
?>
 
<html>
	<head>
		<title>Home Page</title>
	</head>
	<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		
		<center><form>
			
			<fieldset style="width: 700px;height: 350; margin: 150px 200px 200px">
					<h1 align="center"><b><i>Trip Planner</i></b></h1>
					<h3 align="center"><b><i>Make Your Trips Easier</i></b></h3>	
					<hr noshade="" width="600">	
					<a href="../controller/Available_Packages.php"> Available Packages </a><br/>
					<a href="AddPackages.html"> Customize Packages </a><br/>
					<a href="../controller/SearchRestaurants.php"> Restaurants </a><br/>
					<a href="../controller/SearchHotels.php"> Hotels </a><br/>
					<a href="../controller/RTansport.php"> Transport </a><br/>
					<a href="HBooking.html"> Book Hotels </a><br/>
					<a href="RBooking.html"> Book Restaurants </a><br/>
					<a href="TBooking.html"> Book Transports </a><br/>
					<a href="../controller/Review.php"> Review </a><br/>
					<a align="center" href="../controller/Logout.php"> Logout </a>
					<hr noshade="" width="600">
			</fieldset>
		</form>
		</center>
	</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>