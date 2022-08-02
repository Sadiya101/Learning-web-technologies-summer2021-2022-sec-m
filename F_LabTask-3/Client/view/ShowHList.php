<?php
session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Show Hotel Info</title>
</head>
<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form>
			<h1><b><i><legend align="center">Hotel Info</legend></i></b></h1>
			<table border="2" align="center">
				<tr>
					<th>Serial_No.</th>
					<th>Hotel_Name</th>
					<th>Location</th>
					<th>Type</th>
					<th>Website</th>
				</tr>
					<?php
					$status =ShowHotelList();
		    
					if($status)
				   	{
			    		return true;
			    	}
				else
			    	{
			    		echo "Invalid User!";
			    	}	
							
					?>

				</table><br/>
				<center><a href="HBooking.html">Book Now</a></center>
		</form>
		
</body>
</html>

<?php
			}
			else
			{
				echo "invalid request";
			}

?>