<?php
$error = NULL;
include ('connection.php');
if (isset($_POST['submit'])) {
  $email = $_POST['email'];

$resultSet = $mysqli->query("select * from signin where email = '$email' and verified = 1 limit 1");

if($resultSet->num_rows == 1){
   $row = $resultSet->fetch_assoc();
    $fname = $row['fname'];
    $vkey = $row['vkey'];
    $password = $row['password'];
    $password = md5(md5($password));

if($resultSet){
      // send email;
        $to = $email;
        $subject = "Password Reset";
        $message = "<a href='http://localhost/job/reset.php?vkey=$vkey'>Hello, $fname Click Here to reset your Password</a>";
        $headers = "From:roompartners.com@gmail.com \r\n";
        $headers .= "MIME-Version:1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

        mail($to,$subject,$message,$headers);
        $error = "Verfication Link has been sent to  " .$email. " ";
        header('location:reset_verified_msg.php');
      }else{
        echo $mysqli->error;
      }

  }}
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

<div class="row pt-4">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="" method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" style="width: 100%;" name="email" class="form-control" placeholder="Enter Mail Id">
          </div>
          <button type="submit" class="btn btn-primary" value="submit" name="submit">submit</button>
        </form>

  </div>
  <center>
          <p class="text-danger"><?php echo $error; ?></p>
        </center>
</div>

     </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>