<?php
$error = NULL;
include ('connection.php');
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $password1 = $_POST['password1'];

// if(!empty($_POST['gender'])){
//   $gender = $_POST['gender'];
// }
  
// $resultSet4 = $mysqli->query("select email from signin where email = '$email' and verified = 0 limit 1");

// if($resultSet4->num_rows == 1){

//   $error = 'Email Already Registered. Please activate it using the link sent to your email and login to continue filling the application';
    
// }
  // Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);



$resultSet = $mysqli->query("select email from signin where email = '$email' and verified = 1 limit 1");
$resultSet2 = $mysqli->query("select email from signin where email = '$email' and verified = 0 limit 1");

if($resultSet->num_rows == 1){

  $error = 'Email Already Registered, If you forgot password click on the forgot password link on the login page';

}elseif($resultSet2->num_rows == 1){

  $error = 'Email Already Registered. Please activate it using the link sent to your email and login to continue filling the application';

}elseif(!(preg_match('/^\d{10}$/',$mobile))) // phone number is not empty
{  
  $error = 'Phone number invalid !';
}elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}elseif($password != $password1){
    $error = 'Password not Matching !';
}else{
      $fname = $mysqli->real_escape_string(strtoupper($fname));
      $mname = $mysqli->real_escape_string(strtoupper($mname));
      $lname = $mysqli->real_escape_string(strtoupper($lname));
      $email = $mysqli->real_escape_string($email);
      $mobile = $mysqli->real_escape_string($mobile);
      $password  = $mysqli->real_escape_string($password);
      $password1  = $mysqli->real_escape_string($password1);

      $vkey = md5(time().$fname);
      $password = md5($password);
      $qy = $mysqli->query("insert into signin(fname, mname, lname, email, mobile, password, vkey) values('$fname', '$mname', '$lname', '$email', '$mobile', '$password', '$vkey')");
      if($qy){
      // send email;
        $to = $email;
        $subject = "Email Verification";
        $message = "<a href='http://your_local_ip/job2/verify.php?vkey=$vkey'>register account</a>";
        $headers = "From:youremail_here.com@gmail.com \r\n";
        $headers .= "MIME-Version:1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

        mail($to,$subject,$message,$headers);
        header("location:reg_msg.php?id=$email");
      }else{
        $error = "Somthing went Wrong Please Try Again";
      }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ads</title>
  </head>
  <body>

    <div class="container">
    <!-- candidate registration -->
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 pt-2">
<div class="card n2n1">
  <div class="card-header n2n">
    <h4><center><b>New Candidate Registration</b></center></h4>
  </div>
  <div class="card-body">
    <form action=" " method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="fname" class="required">First Name</label>
      <input style="border: 1px solid;" type="text" name="fname" class="form-control" placeholder="First Name" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="mname">Middle Name</label>
      <input style="border: 1px solid;" type="text" class="form-control" name="mname" placeholder="Middle Name">
    </div>
    <div class="form-group col-md-4">
      <label for="lname" class="required">Last Name</label>
      <input style="border: 1px solid;" type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
    </div>
  </div>
    <div class="form-row">
  <div class="form-group col-md-12">
      <label for="email" class="required">Email</label>
      <input  style="border: 1px solid;"type="email" class="form-control" name="email" placeholder="Email"id="disabledTextInput" required="required">
    </div>
    <div class="form-group col-md-12">
      <label for="mobile" class="required">Contact No. (+91)</label>
      <input style="border: 1px solid;" type="number" class="form-control" name="mobile" placeholder="Contact No." required="required">
    </div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
      <label for="password" class="required">Password (Must be 8 Characters)</label>
      <input style="border: 1px solid;" type="password" class="form-control" name="password" placeholder="Password"id="disabledTextInput">
    </div>
    <div class="form-group col-md-12">
      <label for="pass" class="required">Re-type Password</label>
      <input style="border: 1px solid;" type="password" class="form-control" name="password1" placeholder="Retype password" required="required">
      <input type="hidden" name="vkey" class="form-control" id="validationCustom05" required>
    </div>
</div>

<center><button class="btn btn-success" type="submit" value="submit" name="submit">Register</button></center><center><label>&nbsp;&nbsp;Alraedy Register?<a href="advertise.php"> Login</a></label></center>
</form>
<center>
    <p class="text-danger"><?php echo $error; ?></p>
</center>
  </div>
</div>
</div>
</div>





  </div>


<div class="time" id="time"></div>





    <!-- Optional JavaScript; choose one of the two! -->

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="datetimepicker_css.js"></script>

<script type="text/javascript"> 
var timeDisplay = document.getElementById("time");


function refreshTime() {
  var dateString = new Date().toLocaleString();
  var formattedString = dateString.replace(", ", " - ");
  timeDisplay.innerHTML = formattedString;
}

setInterval(refreshTime, 1000);
</script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>