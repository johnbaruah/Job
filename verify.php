<?php 
	if(isset($_GET['vkey'])){
		//process verification
		$vkey = $_GET['vkey'];
		include('connection.php');
		$resultSet = $mysqli->query("select verified, vkey from signin where verified = 0 and vkey = '$vkey' limit 1");

		if($resultSet->num_rows == 1){
			//validate the email
			$update = $mysqli->query("update signin set verified = 1 where vkey = '$vkey' limit 1");
			if ($update){
				header('location:account_verified_msg.php');
			}else{
				echo $mysqli->error;
			}
		}else{
			echo "This Account invalid or Already verified";
		}
	}else{
		die("Somthing went wrong");
	}
?>