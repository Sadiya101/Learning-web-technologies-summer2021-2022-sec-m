<?php

$degree = $_POST['Degree[]'];

if(isset($degree) && count($degree)>=2)
    {
		echo "Valid";
	}
	else
	{
		echo "Invalid";
	}

?>