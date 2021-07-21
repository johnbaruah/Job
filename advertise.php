<?php 
$error = NULL;
if(isset($_POST['submit'])){
  //connect to database
  include('connection.php');
  //get form data
  $email = $mysqli->real_escape_string($_POST['email']);
  $password = $mysqli->real_escape_string($_POST['password']); 
  $password = md5($password);
  // query the database
  $resultSet = $mysqli->query("select * from signin where email = '$email' and password = '$password' limit 1");
  if($resultSet->num_rows !=0){
    // process login
    $row = $resultSet->fetch_assoc();
    $verified = $row['verified'];
    $email = $row['email'];
    $date = $row['crdate'];
    $name = $row['fname'];
    $date = strtotime($date);
    $date = date('M d Y', $date);
    if ($verified == 1) {
      //continue processing
      session_start();
      $_SESSION['email'] = $email;
      session_regenerate_id( false );

      header('location:home.php');
    }else{
      $error = "This acccount has not yet been verified. An email was sent to $email on $date";
    }
  }else{
    // invalid cradentials
    $error = "The Email or Password you entered is incorrect";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ads</title>
  </head>
  <body>
   <div class="container-fluid">
   	<div class="row">
   		<div class="container">
   	<div class="row pt-3">
   		<div class="col-md-7">
   			
			<div class="shadow p-3 mb-3 bg-white rounded border border-success">Before Apply Read the notification Properly</div>
			<div class="shadow p-3 mb-3 bg-white rounded border border-success">Online application start date:<label style="color: red;"> 02/01/2021</label></div>
			<div class="shadow p-3 mb-3 bg-white rounded border border-success">Last date:<label style="color: red;">31/01/2021</label></div>
      <div class="shadow p-3 mb-3 bg-white rounded border border-success"><h5 style="color: red;">Keep the following documents ready before applying:<br>(All Documents format must be in .jpg or .jpeg):</h5><br>1.Recent Color Passport Size Photo (size: 20kb-400kb)<br>2.Signature(size: 20kb-400kb)<br>3.Examination Pass Certificate(size: 100kb-2mb)<br>4.Caste certificate if any?(size: 100kb-2mb)<br>5.Tresure Challan Scan Copy(size: 100kb-2mb)<br>6.Valid Sport Proficiency certificate(size: 100kb-2mb)<br>7.Other qualification certificate if any?(size: 100kb-2mb)</div>
   		</div>
   		<div class="col-md-1"></div>
   		<div class="col-md-4 border rounded border-muted">
   			<button type="button" onclick="location.href='registration.php'" class="btn btn-primary btn-lg btn-block mt-3 mb-3">New Registration</button>

   			
   			
   			<div class="card mb-3">
			  <div class="card-header text-center">
			  	<h3 class="display-5">Log In</h3>
			    
			  </div>
			  <div class="card-body">
			    <form action="" method="post">
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input style="border: 1px solid;" type="email" style="width: 100%;" name="email" class="form-control" placeholder="Enter Mail Id">
				  </div>
				  <div class="form-group">
				    <label for="Password">Password</label>
				    <input  style="border: 1px solid;" type="password" name="password" class="form-control" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary" value="submit" name="submit">Log In</button>
				</form>
        <button type="button" onclick="location.href='forgot_password.php'" class="btn btn-success btn-lg btn-block mt-3 mb-3">Forgot password</button>

        <center>
          <p class="text-danger"><?php echo $error; ?></p>
        </center>
			  </div>
			</div>


   		</div>
   	</div>
   </div>
   	</div>
   </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>