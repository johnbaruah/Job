<?php

include ('connection.php');


$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$father = $_POST['father'];
$mother= $_POST['mother'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
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
		echo "Email is Already Registered";
	}
	else
	{
		$qy = mysql_query("insert into signin(fname, mname, lname, father, mother, email, mobile, gender, password) values('$fname', '$mname', '$lname', '$father', '$mother', '$email', '$mobile', '$gender', '$password')");
	}
	?>