<?php
		if(isset($_COOKIE['c1'])){

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
					<th>Hotel Name</th>
					<th>Location</th>
					<th>Link</th>
				</tr>
					<?php
					
						$file = fopen('HotelList.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							if($Info!= null)
							{
								$hList = explode('|', $Info);
								$Name = trim($hList[0]);
								$location = trim($hList[1]);
								$Link = trim($hList[2]);
								echo "<tr>";
								echo "<td>".$Name."</td>";
								echo "<td>".$location."</td>";
								echo "<td>".$Link."</td>";
								echo "</tr>";
							}

						}
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