<?php
session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Show Reviews </title>
</head>
		<body  style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
			<form>
				<h1><b><i><legend align="center">Show Reviews</legend></i></b></h1>
				<table border="2" align="center">
					<tr>
						<th>Reviews</th>
						<th>Ratings</th>
					</tr>
						<?php
							$file = fopen('Reviews.txt', 'r');
							while (!feof($file)) 
							{
								$CReview=fgets($file);
								if($CReview!= null)
								{
									$r = explode('|', $CReview);
									$rev = trim($r[0]);
									$rating = trim($r[1]);
									echo "<tr>";
									echo "<td>".$rev."</td>";
									echo "<td>".$rating."</td>";
									echo "</tr>";
							    }

							}
						?>
				</table>
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