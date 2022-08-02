<?php
session_start();
require_once"../model/ClientModel.php";
$name = $_POST['name'];
$pass = $_POST['Password'];

	if($name == null || $pass == null)
	{
		echo "Error! Empty field!!!";

	}

	else
	{    
		$status = Login($name, $pass);
		    
		if($status)
		   	{
		   		$_SESSION['s1'] = true;
	    		setcookie('s1','true',time()+14400,'/');
	    		header('location:../view/Home.php');
	    	}
		else
	    	{
	    		echo "Invalid User!";
	    	}
		    	    
	}
?>	