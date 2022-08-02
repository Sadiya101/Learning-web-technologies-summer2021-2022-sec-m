<?php

$Name=$_POST['Name'];
$location =$_POST['location'];
$Type =$_POST['Type'];
$Link =$_POST['Link'];
// session_start();
// if(isset($_COOKIE['s1']))
// {
	require_once"../model/HotelModel.php";

	// AddHotels($Name,$location,$Type,$Link);
	$status = AddHotels($Name,$location,$Type,$Link);
	if($status)
		{	
				header('location:../controller/ShowHList.php');
		}
	else
		{
			echo "Error!";
        }