<?php 
session_start();
session_regenerate_id( true );
 if(!isset($_SESSION['email'])){
 	header('location:advertise.php');
 }
 include("connection.php");
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>