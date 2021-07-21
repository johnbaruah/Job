<?php 
session_start();
session_regenerate_id( true );
 if(!isset($_SESSION['email'])){
  header('location:profile.php');
 }

 // $email = $mysqli_real_escape_string($db, $_POST['id']);
 // echo $email;
 ?>


 <?php
 include('connection.php');
$email = $_SESSION["email"];
$resultSet = $mysqli->query("select * from signin where email = '$email' limit 1");
if($resultSet){
    // process login
    $row = $resultSet->fetch_assoc();
    $id = $row['id'];
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $mobile = $row['mobile'];
    
}else{
  echo "error";
}
  ?>


<?php

include('connection.php');
 $resultSet1 = $mysqli->query("select * from user_details where f_id_sign = '$id' limit 1");
  if($resultSet1->num_rows !=0){
    $row1 = $resultSet1->fetch_assoc();
   
    $status = $row1['status'];

  $gender =  $row1['gender'];  
  $father = $row1['father'];
  $spouse= $row1['spouse'];
  $post_name =  $row1['post_name'];
  
  $dofb = $row1['dofb'];
  $id = $row1['id'];
  $maritial = $row1['maritial'];
  $photo = $row1['photo'];
  $sign = $row1['sign'];
  $p_address = $row1['p_address'];
  $p_po = $row1['p_po'];
  $p_ps = $row1['p_ps'];
  $p_dist = $row1['p_dist'];
  $p_pin = $row1['p_pin'];
  $p_land = $row1['p_land'];
  $p_state = $row1['p_state'];
  $pr_address = $row1['pr_address'];
  $pr_po = $row1['pr_po'];
  $pr_ps = $row1['pr_ps'];
  $pr_dist = $row1['pr_dist'];
  $pr_pin = $row1['pr_pin'];
  $pr_land = $row1['pr_land'];
  $pr_state = $row1['pr_state'];
  $education = $row1['education'];
  $e_board = $row1['e_board'];
  $e_ins_name = $row1['e_ins_name'];
  $pass_year = $row1['pass_year'];
  $class = $row1['class'];
  $percent = $row1['percent'];
  $e_doc = $row1['e_doc'];
  $other_quali = $row1['other_quali'];
  // $other_quali_name = $row1['other_quali_name'];
  $other_quali_doc = $row1['other_quali_doc'];
  // $prof_sport = $row1['prof_sport'];
  $prof_sport_name = $row1['prof_sport_name'];
  $prof_sport_doc = $row1['prof_sport_doc'];
  $any_job_exp_name = $row1['any_job_exp_name'];
  $any_job_exp_year = $row1['any_job_exp_year'];
  $any_job_exp_doc = $row1['any_job_exp_doc'];
  $cat = $row1['cat'];
  $cat_doc = $row1['cat_doc'];
  $tr_chalan_no = $row1['tr_chalan_no'];
  $tr_chalan_date = $row1['tr_chalan_date'];
  $tr_chalan_doc = $row1['tr_chalan_doc'];
  $place =$row1['place'];
  $cr_date =$row1['cr_date'];
}?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Application form</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <title>Application form</title>
  </head>
  <body>
    <div class="container">



    <table style="width:100%">
  
  <tr>
    <th>Application Number:</th>
    <th colspan="3"><?php echo $id; ?></th>
  </tr>
  <tr>
    <th>Applied Post</th>
    <td colspan="3"><?php echo $post_name; ?></td>
  </tr>
  <tr>
    <th colspan="4" class="bg-clr">Personal details:</th>
  </tr>
  <tr>
    <th>Aplicant Name:</th>
    <td colspan="2"><?php echo "{$fname} {$mname} {$lname}"; ?></td>
    <td style="width: 210px; height: 170px;" rowspan="6" class="p-0 b-0" >
    <center class="p-0 b-0">
      <img src="<?php echo $photo; ?>" type="file" height="140px" width="130px" name="photo" value="<?php echo $photo; ?>"><br><b>Photograph</b>
    </center></td>
  </tr>
  <tr>
    <th>Father's/Husband Name:</th>
    <td colspan="2"><?php echo $father; ?></td>
  </tr>
  <tr>
    <th>Spouse Name:</th>
    <td colspan="2"><?php echo $spouse; ?></td>
  </tr>
  <tr>
    <th>Gender:</th>
    <td colspan="2"><?php echo $gender; ?></td>
  </tr>
  <tr>
    <th>Date of birth:</th>
    <td colspan="2"><?php echo date('d-m-Y', strtotime($dofb)); ?></td>
  </tr>
  <tr>
    <th>Email:</th>
    <td colspan="2"><?php echo $email; ?></td>
  </tr>
  <tr>
    <th>Mobile No.:(+91)</th>
    <td colspan="2"><?php echo $mobile; ?></td>
    <td style="width: 210px; height: 50px;" rowspan="4" class="p-0 b-0" >
    <center class="p-0 b-0">
      <img src="<?php echo $sign; ?>" type="file" height="60px" width="200px" name="sign" value="<?php echo $sign; ?>"><br><b>Signature</b>
    </center></td>
  </tr>
  <tr>
    <th>Cast:</th>
    <td colspan="2"><?php echo $cat; ?></td>
  </tr>
  <tr>
    <th>Maritial Status:</th>
    <td colspan="2"><?php echo $maritial; ?></td>
  </tr>
  <tr>
    <th>Nationality:</th>
    <td colspan="2"><?php echo $email; ?></td>
  </tr>
  <tr>
    <th colspan="2" class="bg-clr">Contact details:<p>(Present Address)</p></th>
    <th colspan="2" class="bg-clr">Contact details:<p>(Parmanent Address)</p></th>
  </tr>
  <tr>
    <th>Address line:</th>
    <td ><?php echo $p_address; ?></td>

    <th>Address line:</th>
    <td ><?php echo $pr_address; ?></td>
  </tr>
  <tr>
    <th>Post Office:</th>
    <td ><?php echo $p_po; ?></td>

    <th>Post Office:</th>
    <td ><?php echo $pr_po; ?></td>
  </tr>
  <tr>
    <th>Police Station:</th>
    <td><?php echo $p_ps; ?></td>

    <th>Police Station:</th>
    <td><?php echo $pr_ps; ?></td>
  </tr>
  <tr>
    <th>District:</th>
    <td><?php echo $p_dist; ?></td>

    <th>District:</th>
    <td><?php echo $pr_dist; ?></td>
  </tr>
  <tr>
    <th>Landmark:</th>
    <td><?php echo $p_land; ?></td>

    <th>Landmark:</th>
    <td><?php echo $pr_land; ?></td>
  </tr>
  <tr>
    <th>PIN no:</th>
    <td><?php echo $p_pin; ?></td>

    <th>PIN no:</th>
    <td><?php echo $pr_pin; ?></td>
  </tr>
  <tr>
    <th>State:</th>
    <td><?php echo $p_state; ?></td>

    <th>State:</th>
    <td><?php echo $pr_state; ?></td>
  </tr>
  <tr>
    <th colspan="4" class="bg-clr">Education details:</th>
  </tr>
  <tr>
    <th>Education Name:</th>
    <td colspan="3"><?php echo $education; ?></td>
</tr>
    <tr>
    <th>Board Name:</th>
    <td colspan="3"><?php echo $e_board; ?></td>
</tr>
    <tr>
    <th>College/University/Institution Name:</th>
    <td colspan="3"><?php echo $e_ins_name; ?></td>
</tr>
    <tr>
    <th>Pass Year:</th>
    <td colspan="3"><?php echo $pass_year; ?></td>
    <tr>
    <th>Divison:</th>
    <td colspan="3"><?php echo $class; ?></td>
  </tr>
  <tr>
    <th>Percentence(%):</th>
    <td colspan="3"><?php echo $percent; ?></td>
  </tr>
  <tr>
    <th colspan="4" class="bg-clr">Other Education Details:</th>
  </tr>
  <tr>
    <th>Education Name:</th>
    <td colspan="3"><?php echo $other_quali; ?></td>
</tr>
<tr>
    <th colspan="4" class="bg-clr">Sport Prificiency: details:</th>
  </tr>
  <tr>
    <th>Sports Name:</th>
    <td colspan="3"><?php echo $prof_sport_name; ?></td>
</tr>
<tr>
    <th colspan="4" class="bg-clr">Job Experience Details:</th>
  </tr>
  <tr>
    <th>Job Name:</th>
    <td colspan="3"><?php echo $any_job_exp_name; ?></td>
</tr>
<tr>
    <th>Job Experince in Year:</th>
    <td colspan="3"><?php echo $any_job_exp_year; ?></td>
</tr>
<tr>
    <th colspan="4" class="bg-clr">Tresury Challan Details:</th>
  </tr>
  <tr>
    <th>Tresury Challan No.:</th>
    <td colspan="3"><?php echo $tr_chalan_no; ?></td>
</tr>
<th>Tresury Challan Date:</th>
    <td colspan="3"><?php echo date('d-m-Y', strtotime($tr_chalan_date)); ?></td>
</tr>
<tr>
    <th colspan="4" class="bg-clr"><center>Declaration</center></th>
  </tr>
  <tr>
    <td colspan="4" class="dclrsn"><p>I hereby declare that all the particulars given by me in this form are true to the best of my knowledge and belief and any mistake / misinformation, detected at the time of admission or at any stage in future, will result in the cancellation of admission/candidature. I have read the information bulletin and understood all the procedures. In case I furnish any false information, my result will not be declared/ my candidature will automatically stand cancelled. I shall abide by terms and conditions therein.</p></td>
</tr>
<tr>
    <td colspan="4"><b>Place:</b>
    <?php echo $place; ?><span style="float: right;"><b>Date:</b> <?php echo date('d-m-Y H:i:s', strtotime($cr_date)); ?></span></td>
    
  </tr>
    
</table>




      



<div class="text-center">
  <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
</div>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="datetimepicker_css.js"></script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>