<?php
	session_start();
	require_once("class_dbconnection.php");

	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
		//echo($uname);
	$obj=new Connection();
	$con=$obj->db_con();
	$sql="SELECT * FROM epms_users WHERE User_username='$uname';";
	$result=$con->query($sql);
	if($con->errno)
	{
		echo("SQL Error".$con->error);
		exit;
	}
	$nor=$result->num_rows;
	//echo($nor);
	if($nor>0)
	{
		$rec=$result->fetch_assoc();
		$pass=md5($pass);
		if($pass==$rec["User_password"])
		{
			if($rec["User_status"]=="1")
			{
				$_SESSION["user"]["uname"]=$uname;
				$_SESSION["user"]["uid"]=$rec["User_sn"];
				$_SESSION["user"]["utype"]=$rec["User_type_name"];
				echo("3");
			}
			else
			{
				echo("2");
			}
		}
		else
		{
			echo("1");
		}
	}
	else
	{
		echo("1");
	}
	$con->close();
?>