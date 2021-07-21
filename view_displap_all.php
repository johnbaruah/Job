<?php
include 'connection.php';
$query = "select * from user_details";
$query2 = mysqli_query($mysqli,$query);
$num = mysqli_num_rows($query2);


// $res = mysqli_fetch_array($query2);

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

    <title>Registration</title>
  </head>
<body>




<div class="card-body">
	<h2>Total No of Applicant: <?php echo $num; ?></h2>
<table class="tbl border text-center">
  <thead>
    <tr class="table-light">
      <td class="inpt">Application No:</td>
        <td>Display</td>
    </tr>
</thead>
<tbody>


<?php
while($res = mysqli_fetch_array($query2)){ 
	
?>


 <tr class="tbl-bg">
      <td class="inpt"><?php echo $res['id']; ?></td>
       <td><a href="details_view.php?id=<?php echo $res['f_id_sign']; ?>">View/Print</a></td>
    </tr>

<?php
}
?>


   
    </tbody>

  
</table>
</div>




</body>
</html>