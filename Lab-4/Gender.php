<?php 
$gender = $_POST['Gender'];

if(isset($gender))
    {
		echo "Valid Gender";
	}
	else
	{
		echo "Invalid Gender";
	}
?>