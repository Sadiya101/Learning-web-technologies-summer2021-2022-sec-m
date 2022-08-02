<?php
require_once"../model/packageModel.php";

		if(isset($_COOKIE['c1']))
		{
			$con = getConnection();
    		$sql = "select * from packagemodel";
    		$result = mysqli_query($con, $sql);
			echo "<table border=1>
            		<tr>
            		 	
		                <td>Destination</td>
		                <td>Duration</td>
		                <td>Budget</td>
		                <td>Hotel</td>
		                <td>Restaurant</td>
		                <td>Transport</td>
		                <td>Tour_Guide</td>
		               
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
		                    <td>{$row['Travel_Guide']}</td>
		            		</tr>";
		    		}
		    			echo "</table>";
		}
		else
		{
			echo "invalid request";
		}


?>