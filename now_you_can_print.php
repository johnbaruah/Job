<?php 
session_start();
session_regenerate_id( true );
 if(!isset($_SESSION['email'])){
  header('location:advertise.php');
 }


include('connection.php');
$email = $_SESSION["email"];
$resultSet = $mysqli->query("select * from signin where email = '$email' limit 1");
if($resultSet){
  $row = $resultSet->fetch_assoc();
    $id = $row['id'];
    }else{
  $error = "session error";
}

$resultSet2 = $mysqli->query("select * from user_details where f_id_sign = '$id' limit 1");
  if($resultSet2){
    $row2 = $resultSet2->fetch_assoc();
   
  $statuss = $row2['status'];
}else{
  $error = "foreign key fetch error";
}
if ($statuss == 0) {
      //continue processing
  header('location:home.php');
      // echo "print application form <a href='application_form.php'>here</a> <br>";
    }elseif ($statuss == 2) {
      //continue processing
  header('location:view_form.php');
      // echo "print application form <a href='application_form.php'>here</a> <br>";
    }else{ 

  ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   

    <title>Ads</title>
  </head>
<body>

<div class="container-fluid">
  <div class="row pt-4">
    <div class="col-md-2"></div>
<div class="col-md-8">
  <h3>Thank You.., Your Data has been Recorded. Now you can Print your Application By Clicking on the Button Below..</h3>
</div>
</div>
<div class="row pt-4">
  
  <div class="col-md-4"></div>
  <div class="col-md-4">
<br><br>
    <form action="application_form.php" method="post">
          <button type="submit" class="btn btn-success" value="submit" name="submit">Print Application Now</button>
        </form>
        <br><br>
        <div>
          <label>or Now<a href="logout.php"> Logout, </a>May be latter..</label>
        </div>

  </div>
  <center>
         
        </center>
</div>

     </div>
</body>
</html>
<?php 
}

  ?>