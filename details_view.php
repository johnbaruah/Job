 <?php
 include('connection.php');
 $idd = $_GET['id'];
$resultSet = $mysqli->query("select * from signin where id = '$idd' limit 1");
if($resultSet){
    // process login
    $row = $resultSet->fetch_assoc();
    $id = $row['id'];
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $mobile = $row['mobile'];
    $email = $row['email'];

    
}else{
  echo "error";
}


 $resultSet1 = $mysqli->query("select * from user_details where f_id_sign = '$idd' limit 1");
  if($resultSet1->num_rows !=0){
    $row1 = $resultSet1->fetch_assoc();
   
    $status = $row1['status'];

  $gender =  $row1['gender'];  
  $father = $row1['father'];
  $mother= $row1['mother'];
  
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
  $other_quali_name = $row1['other_quali_name'];
  $other_quali_doc = $row1['other_quali_doc'];
  $prof_sport = $row1['prof_sport'];
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
  </head>
  <body>
    <div class="container">

      <div class="card">
        
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="tbl-bg">
      <td class="inpt">Application Number:</td>
        <td><?php echo $id; ?>
      
    </td>
    <td><img src="<?php echo $photo; ?>" type="file" height="120px" width="110px" name="photo" value="<?php echo $photo; ?>">
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Name:</td>
        <td><?php echo "{$fname} {$mname} {$lname}"; ?>
    </td>
    
    </tr>
    
     <tr class="tbl-bg">
      <td class="inpt">Fathers/Husband Name:</td>
        <td><?php echo $father; ?>
      
    </td>
    <td><img src="<?php echo $sign; ?>" type="file" height="40px" width="170px" name="sign" value="<?php echo $sign; ?>">
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Mothers Name:</td>
        <td><?php echo $mother; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Gender:</td>
        <td><?php echo $gender; ?>
          
</td>
    </div>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Date of birth:</td>
        <td><?php echo $dofb; ?>
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Email:</td>
        <td> <?php echo $email; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Mobile No.:(+91)</td>
        <td><?php echo $mobile; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Maritial Status:</td>
        <td><?php echo $maritial; ?>
      
    </td>
    </tr>   
  </tbody>
</table>
</div>
</div>
<br>







<div class="card">
        
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Permanent Address:</h5>
        
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Address line:</td>
        <td><?php echo $p_address; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Post Office:</td>
        <td><?php echo $p_po; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Police Station:</td>
        <td><?php echo $p_ps; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">District:</td>
        <td><?php echo $p_dist; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">PIN no:</td>
        <td><?php echo $p_pin; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Landmark:</td>
        <td><?php echo $p_land; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">State:</td>
        <td><?php echo $p_state; ?>
    </td>
    </tr>
    
    


    
  </tbody>
</table>
</div>
</div>


<div class="card">
       
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Present Address:</h5>
        
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="tbl-bg">
      <td class="inpt">Address line:</td>
        <td><?php echo $pr_address; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Post Office:</td>
        <td><?php echo $pr_po; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Police Station:</td>
        <td><?php echo $pr_ps; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">District:</td>
        <td><?php echo $pr_dist; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">PIN no:</td>
        <td><?php echo $pr_pin; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Landmark:</td>
        <td><?php echo $pr_land; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">State:</td>
        <td><?php echo $pr_state; ?>
    </td>
    </tr>
    
    


    
  </tbody>
</table>
</div>
</div>





<div class="card">
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Education Qualifications:</h5>
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Education:</td>
        <td><?php echo $education; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Board:</td>
        <td><?php echo $e_board; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">College/University/Institution Name:</td>
        <td><?php echo $e_ins_name; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Pass Year:</td>
        <td><?php echo $pass_year; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Divison:</td>
        <td><?php echo $class; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Percentence(%):</td>
        <td><?php echo $percent; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Pass Certificate:</td>
        <td><img src="<?php echo $e_doc; ?>" type="file" height="100px" width="100px" name="e_doc">
      
    </td> 
    </tr>
    
    
    


    
  </tbody>
</table>
</div>
</div>


<div class="card">
       
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Other Qualification:</h5>
       
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="tbl-bg">
      <td class="inpt">Qualification have to drop:</td>
        <td><?php echo $other_quali; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Qualification Name:</td>
        <td><?php echo $other_quali_name; ?>
      
    </td>
    </tr>
     <tr class="tbl-bg">
      <td class="inpt">Qualification Certificate:</td>
      <td><img src="<?php echo $other_quali_doc; ?>" type="file" height="100px" width="100px" name="other_quali_doc">
      
    </td>
       
    </tr>
    


    
  </tbody>
</table>
</div>
</div>





<div class="card">
       
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Proficiency in Sports:</h5>
      
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Sport Prificiency:</td>
        <td><?php echo $prof_sport; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Sport Prificiency Name:</td>
        <td><?php echo $prof_sport_name; ?>
      
    </td>
    </tr>
    <tr class="table-light">
      <td class="inpt">Document:</td>
      <td><img src="<?php echo $prof_sport_doc; ?>" type="file" height="100px" width="100px" name="prof_sport_doc">
      
    </td>
        
    </tr>
    


    
  </tbody>
</table>
</div>
</div>






<div class="card">
        
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Preivious Job Experience:</h5>
       
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Job Name:</td>
        <td><?php echo $any_job_exp_name; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Experince in Year:</td>
        <td><?php echo $any_job_exp_year; ?>
      
    </td>
    </tr>

    <tr class="table-light">
      <td class="inpt">Documents:</td>
       <td><img src="<?php echo $any_job_exp_doc; ?>" type="file" height="100px" width="100px" name="any_job_exp_doc">
      
    </td>
        
    </tr>
    
    


    
  </tbody>
</table>
</div>
</div>









<div class="card">
        
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Category:</h5>
     
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Select Category:</td>
        <td><?php echo $cat; ?>
      
    </td>
    </tr>

    <tr class="tbl-bg">
      <td class="inpt">Category Document:</td>
      <td><img src="<?php echo $cat_doc; ?>" type="file" height="100px" width="100px" name="cat_doc">
      
    </td>
        
    </tr>


    
  </tbody>
</table>
</div>
</div>






<div class="card">
    
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Tresury Challan Details:</h5>
      
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Tresury Challan No.:</td>
        <td><?php echo $tr_chalan_no; ?>
      
    </td>
    </tr>
    <tr class="tbl-bg">
      <td class="inpt">Tresury Challan Date:</td>
        <td><?php echo $tr_chalan_date; ?>
      
    </td>
    </tr>

     <tr class="table-light">
      <td class="inpt">Tresury Challan Copy:</td>
      <td><img src="<?php echo $tr_chalan_doc; ?>" type="file" height="100px" width="100px" name="tr_chalan_doc">
      
    </td>
        
    </tr>
    
    
    


    
  </tbody>
</table>
</div>
</div>





<div class="card">
   
          <h5 class="display-5">&nbsp;&nbsp;&nbsp;Place:</h5>
        <div class="card-body">
<table class="tbl border ">
  <tbody>
    <tr class="table-light">
      <td class="inpt">Current place:</td>
        <td><?php echo $place; ?>
      
    </td>
    </tr>
    


    
  </tbody>
</table>
</div>
</div>


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