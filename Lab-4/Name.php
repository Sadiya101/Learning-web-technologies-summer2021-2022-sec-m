<?php
$name = $_POST['name'];


	if($name == null)
	{
		echo "Name field can not be empty";
	}

	else
	{
		for($i = 0;$i<100;$i++)
		{
			if($name[0]== 'a-z' || 'A-Z' || $name[i]!= '0-9')
			{ 
				$flag = 0;

		    }
		    else
		    {

		    }

		}
		echo "ok";

		
		
	}
?>