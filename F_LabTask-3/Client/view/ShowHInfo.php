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
									<th>Hotel Name</th>
									<th>Location</th>
									<th>Link</th>
								</tr>	
					<?php
			            
                        $hName=$_POST['F_Hotels'];
						$file = fopen('HotelList.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							$hList = explode('|', $Info);
							$Name = trim($hList[0]); 
							$location = trim($hList[1]);
							$Link = trim($hList[2]);
					
							if(strtolower(trim($hList[0])) == strtolower($hName))
							{
								echo "<tr>";
							 	echo "<td>".$Name."</td>";
								echo "<td>".$location."</td>";
								echo "<td>".$Link."</td>";
								echo "</tr>";

								break;
							}
						}
					?>
					</table>
					<center><br/><a href="HBooking.html">Book Now</a></center>
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