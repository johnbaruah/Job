<?php
$error = NULL;
include ('connection.php');
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
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
</div>

     </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>