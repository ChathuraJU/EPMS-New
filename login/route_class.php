<?php
	session_start();

	if(!isset($_SESSION["user"]))
	{
	 	header("Location:../index.php");
	}
	
	$utype=$_SESSION["user"]["utype"];

	if($utype=="Admin")
	{
		header("Location:../Admin/dashboard.php");
		
	}

	else if($utype=="Consultant")
	{
		header("Location:../Consultant/dashboardcon.php");
		
	}

	else if($utype=="MOIC")
	{
		header("Location:../MOIC/dashboardmoic.php");
		
	}

	else if($utype=="Director")
	{
		header("Location:../Director/dashboarddir.php");
		
	}

	else if($utype=="Chief Accountant")
	{
		header("Location:../Chief_Accountant/dashboardchef.php");
		
	}

	else if($utype=="Surgical Pharmacist")
	{
		header("Location:../Surgical_Pharmacist/dashboardsurg.php");
		
	}

?>