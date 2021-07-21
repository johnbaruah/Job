<?php
include ('connection.php');



$email = $_POST['email'];

$password = $_POST['password'];

$qry = mysql_query("select * from signin where email = '$email' && password = '$password'");
while($row=mysql_fetch_array($qry))
	{
		if($email==$row['email'] && $password==$row['password'])
		{
			$flag=1;
			break;
		}
	}
if($flag==1)
	{
		session_start();
		$_SESSION['userid']=$email;
		header("Location:home.php");
	}
	else
	{
		header("Location:advertise.php");
		echo "login_error";
	}
	?>