<?php
require_once"../model/packageModel.php";
session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Show Available Packages </title>
</head>
<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form>
			
				<h1><b><i><legend align="center">	Available Packages</legend></i></b></h1>
							
					<?php
					$con = getConnection();
    				$sql = "select * from packagemodel";
    				$result = mysqli_query($con, $sql);
					echo "<table border=2>
            		<tr>
            		 	
		                <td>Destination</td>
		                <td>Duration</td>
		                <td>Budget</td>
		                <td>Hotel</td>
		                <td>Restaurant</td>
		                <td>Transport</td>
		                
		               
            		</tr>";


					while($row = mysqli_fetch_assoc($result))
		    		{
		        		echo "<tr>
		                    <td>{$row['Destination']}</td>
		                    <td>{$row['Duration']}</td>
		                    <td>{$row['Budget']}</td>
		                    <td>{$row['Hotel']}</td>
		                    <td>{$row['Restaurant']}</td>
		                    <td>{$row['Transport']}</td>
		            		</tr>";
		    		}
		    			echo "</table>";

					?>

				<br/>
				    <center> <b>Liked any package?</b>
						<a href="../view/PBooking.html">Book Now</a>
					</center>
			
		</form>
		<?php

		?>
		
</body>
</html>

<?php
			}
			else
			{
				echo "invalid request";
			}

?>