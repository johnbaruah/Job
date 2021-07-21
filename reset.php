<?php
$error = NULL;
include ('connection.php');
if (isset($_POST['submit'])) {
  $password = $_POST['password'];
  $password1 = $_POST['password1'];


if(isset($_GET['vkey'])){
  $vkey = $_GET['vkey'];
  



if(strlen($password) < 8){
    $error = 'Password at least contain 8 Character';
}elseif($password != $password1){
    $error = 'Password not Matching !';
}else{
     
      $password  = $mysqli->real_escape_string($password);
      $password1  = $mysqli->real_escape_string($password1);

      $password = md5($password);
      $update = $mysqli->query("update signin set password = '$password' where vkey = '$vkey'");
      if($update){
            header('location:password_change_msg.php');
        }else{
        echo "Password reset Failed, Try Again";
      }
  }
}else{
  echo "Try again to Reset, Occured an Error";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Password Reset</title>
  </head>
  <body>
    <div class="container-fluid">

<div class="row pt-4">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form class="needs-validation" action=" " method="post" novalidate>  

    <h4>Enter New Password</h4>    
     <label for="validationCustom05">New Password</label>
      <input type="Password" name="password" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid Password..
      </div>
   
   
     <label for="validationCustom05">Confirm Password</label>
      <input type="Password" name="password1" class="form-control" id="validationCustom05" required>
      <input type="hidden" name="vkey" class="form-control" id="validationCustom05" required>

      <div class="invalid-feedback">
        Please provide a valid Password..
      </div>
   
  
  
<br>
  <button class="btn btn-primary" type="submit" value="submit" name="submit">Reset Password</button>
</form>

</div>
  <center>
          <p class="text-danger"><?php echo $error; ?></p>
        </center>
</div>

     </div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
