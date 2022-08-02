<?php
require_once"../model/HotelModel.php";
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
					<th>Hotel_Name</th>
					<th>Location</th>
					<th>Type</th>
					<th>Link</th>
				</tr>
					<?php
					require_once"../model/dbModel.php";
					$con = getConnection();
    				$sql = "select * from hotelmodel";
    				$result = mysqli_query($con, $sql);
					echo "<table border=2>
            		<tr>
            		 	
		                <td>Hotel_Name</td>
		                <td>Location</td>
		                <td>Type</td>
		                <td>Link</td>		              		               
            		</tr>";


					while($row = mysqli_fetch_assoc($result))
		    		{
		        		echo "<tr>
		                    <td>{$row['Hotel_Name']}</td>
		                    <td>{$row['Location']}</td>
		                    <td>{$row['Type']}</td>
		                    <td>{$row['Link']}</td>
		            		</tr>";
		    		}
		    			echo "</table>";

					?>


				</table><br/>
				<center><a href="../view/HBooking.html">Book Now</a></center>
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