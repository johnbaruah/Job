<?php 
session_start();
session_regenerate_id( true );
 if(!isset($_SESSION['email'])){
 	header('location:profile.php');
 }


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

    <title>Registration</title>
  </head>
  <body>
    <div class="container">

<div class="row pt-4">
<div class="col-md-12">
  <div class="prgrs">
<div class="progress1">
  <div class="prgrs-br progress-bar-animated prgrs-r-strpd" role="progressbar" style="width: 23%"></div>
</div>
<div class="stp1 ctr">1</div>
<div class="stp2 ctr">2</div>
<div class="stp3 ctr">3</div>
<div class="stp4 ctr">4</div>
<div class="stp5 ctr">5</div>
</div>
</div>
</div>

<?php
include ('connection.php');
if (isset($_POST['next'])) {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $father = $_POST['father'];
  $spouse= $_POST['spouse'];
  $gender = $_POST['gender'];
  $dofb = $_POST['dofb'];
  $mobile = $_POST['mobile'];
  $nationality = $_POST['nationality'];
  $maritial = $_POST['maritial'];
  $p_address = $_POST['p_address'];
  $p_po = $_POST['p_po'];
  $p_ps = $_POST['p_ps'];
  $p_dist = $_POST['p_dist'];
  $p_pin = $_POST['p_pin'];
  $p_land = $_POST['p_land'];
  $p_state = $_POST['p_state'];
  $pr_address = $_POST['pr_address'];
  $pr_po = $_POST['pr_po'];
  $pr_ps = $_POST['pr_ps'];
  $pr_dist = $_POST['pr_dist'];
  $pr_pin = $_POST['pr_pin'];
  $pr_land = $_POST['pr_land'];
  $pr_state = $_POST['pr_state'];
  $education = $_POST['education'];
  $e_board = $_POST['e_board'];
  $e_ins_name = $_POST['e_ins_name'];
  $pass_year = $_POST['pass_year'];
  $class = $_POST['class'];
  $percent = $_POST['percent'];
  $other_quali = $_POST['other_quali'];
  $other_board = $_POST['other_board'];
  $other_pass_year = $_POST['other_pass_year'];
  $other_ins_name = $_POST['other_ins_name'];
  $other_class = $_POST['other_class'];
  $other_percent = $_POST['other_percent'];
  $sport_ins_name = $_POST['sport_ins_name'];
  $sport_board = $_POST['sport_board'];
  $prof_sport_name = $_POST['prof_sport_name'];
  $any_job_exp_name = $_POST['any_job_exp_name'];
  $any_job_exp_year = $_POST['any_job_exp_year'];
  $cat = $_POST['cat'];
  $tr_chalan_no = $_POST['tr_chalan_no'];
  $tr_chalan_date = $_POST['tr_chalan_date'];
  $place = $_POST['place'];
  


  if(!(preg_match('/^\d{10}$/',$mobile))){  
  $error = 'Phone number invalid !';
}elseif(empty($gender)) {

        $error = "Provide a gender";


}else{
      $fname = $mysqli->real_escape_string(strtoupper($fname));
      $mname = $mysqli->real_escape_string(strtoupper($mname));
      $lname = $mysqli->real_escape_string(strtoupper($lname));
      $father = $mysqli->real_escape_string(strtoupper($father));
      $spouse = $mysqli->real_escape_string(strtoupper($spouse));
      $gender = $mysqli->real_escape_string(strtoupper($gender));
      $dofb = $mysqli->real_escape_string($dofb);
      $mobile = $mysqli->real_escape_string($mobile);
      $nationality  = $mysqli->real_escape_string(strtoupper($nationality));
      $maritial  = $mysqli->real_escape_string(strtoupper($maritial));
      $p_address  = $mysqli->real_escape_string(strtoupper($p_address));
      $p_po  = $mysqli->real_escape_string(strtoupper($p_po));
      $p_ps  = $mysqli->real_escape_string(strtoupper($p_ps));
      $p_dist  = $mysqli->real_escape_string(strtoupper($p_dist));
      $p_pin  = $mysqli->real_escape_string($p_pin);
      $p_land  = $mysqli->real_escape_string(strtoupper($p_land));
      $p_state  = $mysqli->real_escape_string(strtoupper($p_state));
      $pr_address  = $mysqli->real_escape_string(strtoupper($pr_address));
      $pr_po  = $mysqli->real_escape_string(strtoupper($pr_po));
      $pr_ps  = $mysqli->real_escape_string(strtoupper($pr_ps));
      $pr_dist  = $mysqli->real_escape_string(strtoupper($pr_dist));
      $pr_pin  = $mysqli->real_escape_string($pr_pin);
      $pr_land  = $mysqli->real_escape_string(strtoupper($pr_land));
      $pr_state  = $mysqli->real_escape_string(strtoupper($pr_state));
      $education  = $mysqli->real_escape_string(strtoupper($education));
      $e_board  = $mysqli->real_escape_string(strtoupper($e_board));
      $e_ins_name  = $mysqli->real_escape_string(strtoupper($e_ins_name));
      $pass_year  = $mysqli->real_escape_string($pass_year);
      $class  = $mysqli->real_escape_string($class);
      $percent  = $mysqli->real_escape_string($percent);
      $other_quali  = $mysqli->real_escape_string(strtoupper($other_quali));
      $other_board  = $mysqli->real_escape_string(strtoupper($other_board));
      $other_pass_year  = $mysqli->real_escape_string($other_pass_year);
      $other_ins_name  = $mysqli->real_escape_string(strtoupper($other_ins_name));
      $other_class  = $mysqli->real_escape_string(strtoupper($other_class));
      $other_percent  = $mysqli->real_escape_string(strtoupper($other_percent));
      $sport_board  = $mysqli->real_escape_string(strtoupper($sport_board));
      $sport_ins_name  = $mysqli->real_escape_string(strtoupper($sport_ins_name));
      $prof_sport_name  = $mysqli->real_escape_string(strtoupper($prof_sport_name));
      $any_job_exp_name  = $mysqli->real_escape_string(strtoupper($any_job_exp_name));
      $any_job_exp_year  = $mysqli->real_escape_string($any_job_exp_year);
      $cat  = $mysqli->real_escape_string(strtoupper($cat));
      $tr_chalan_no  = $mysqli->real_escape_string($tr_chalan_no);
      $tr_chalan_date  = $mysqli->real_escape_string($tr_chalan_date);
      $place  = $mysqli->real_escape_string(strtoupper($place));
      

      $update = $mysqli->query("update signin set fname = '$fname', mname = '$mname', lname = '$lname', mobile = '$mobile' where id = '$id'");


      if($update){
         $qy = $mysqli->query("update user_details set father ='$father', f_id_sign = '$id', spouse = '$spouse', gender = '$gender', dofb ='$dofb', maritial ='$maritial', nationality='$nationality', p_address ='$p_address', p_po ='$p_po', p_ps ='$p_ps', p_dist ='$p_dist', p_pin ='$p_pin', p_land ='$p_land', p_state ='$p_state', pr_address ='$pr_address', pr_po ='$pr_po', pr_ps ='$pr_ps', pr_dist ='$pr_dist', pr_pin ='$pr_pin', pr_land ='$pr_land', pr_state ='$pr_state', education ='$education', e_board ='$e_board', e_ins_name ='$e_ins_name', pass_year ='$pass_year', class ='$class', percent ='$percent', other_quali ='$other_quali', other_board ='$other_board', other_pass_year ='$other_pass_year', other_ins_name = '$other_ins_name', other_class = '$other_class', other_percent = '$other_percent', sport_board ='$sport_board', prof_sport_name ='$prof_sport_name', sport_ins_name = '$sport_ins_name', any_job_exp_name ='$any_job_exp_name', any_job_exp_year ='$any_job_exp_year', cat ='$cat', tr_chalan_no ='$tr_chalan_no', tr_chalan_date ='$tr_chalan_date', place ='$place' where f_id_sign= '$id'");


        if($qy){
              // send email;
              $updatefinal2 = $mysqli->query("update user_details set status = 0 where f_id_sign = '$id' limit 1");
              if($updatefinal2){
        header('location:photo_update.php');
              }else{
              $error = "Page error";
              }
        }else{
        echo $mysqli->error;
      }
        // echo "Success";
    }else{
        echo $mysqli->error;
      }
  }




   
}
  ?> 
<!-- update form data-->

<?php
$error = NULL;
include ('connection.php');
if (isset($_POST['modify'])) {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $father = $_POST['father'];
  $spouse= $_POST['spouse'];
  $gender = $_POST['gender'];
  $dofb = $_POST['dofb'];
  $mobile = $_POST['mobile'];
  $nationality = $_POST['nationality'];
  $maritial = $_POST['maritial'];
  $p_address = $_POST['p_address'];
  $p_po = $_POST['p_po'];
  $p_ps = $_POST['p_ps'];
  $p_dist = $_POST['p_dist'];
  $p_pin = $_POST['p_pin'];
  $p_land = $_POST['p_land'];
  $p_state = $_POST['p_state'];
  $pr_address = $_POST['pr_address'];
  $pr_po = $_POST['pr_po'];
  $pr_ps = $_POST['pr_ps'];
  $pr_dist = $_POST['pr_dist'];
  $pr_pin = $_POST['pr_pin'];
  $pr_land = $_POST['pr_land'];
  $pr_state = $_POST['pr_state'];
  $education = $_POST['education'];
  $e_board = $_POST['e_board'];
  $e_ins_name = $_POST['e_ins_name'];
  $pass_year = $_POST['pass_year'];
  $class = $_POST['class'];
  $percent = $_POST['percent'];
  $other_quali = $_POST['other_quali'];
  $other_board = $_POST['other_board'];
  $other_pass_year = $_POST['other_pass_year'];
  $other_ins_name = $_POST['other_ins_name'];
  $other_class = $_POST['other_class'];
  $other_percent = $_POST['other_percent'];
  $sport_ins_name = $_POST['sport_ins_name'];
  $sport_board = $_POST['sport_board'];
  $prof_sport_name = $_POST['prof_sport_name'];
  $any_job_exp_name = $_POST['any_job_exp_name'];
  $any_job_exp_year = $_POST['any_job_exp_year'];
  $cat = $_POST['cat'];
  $tr_chalan_no = $_POST['tr_chalan_no'];
  $tr_chalan_date = $_POST['tr_chalan_date'];
  $place = $_POST['place'];
  


  if(!(preg_match('/^\d{10}$/',$mobile))){  
  $error = 'Phone number invalid !';
}elseif(empty($gender)) {

        $error = "Provide a gender";


}else{
      $fname = $mysqli->real_escape_string(strtoupper($fname));
      $mname = $mysqli->real_escape_string(strtoupper($mname));
      $lname = $mysqli->real_escape_string(strtoupper($lname));
      $father = $mysqli->real_escape_string(strtoupper($father));
      $spouse = $mysqli->real_escape_string(strtoupper($spouse));
      $gender = $mysqli->real_escape_string(strtoupper($gender));
      $dofb = $mysqli->real_escape_string($dofb);
      $mobile = $mysqli->real_escape_string($mobile);
      $nationality  = $mysqli->real_escape_string(strtoupper($nationality));
      $maritial  = $mysqli->real_escape_string(strtoupper($maritial));
      $p_address  = $mysqli->real_escape_string(strtoupper($p_address));
      $p_po  = $mysqli->real_escape_string(strtoupper($p_po));
      $p_ps  = $mysqli->real_escape_string(strtoupper($p_ps));
      $p_dist  = $mysqli->real_escape_string(strtoupper($p_dist));
      $p_pin  = $mysqli->real_escape_string($p_pin);
      $p_land  = $mysqli->real_escape_string(strtoupper($p_land));
      $p_state  = $mysqli->real_escape_string(strtoupper($p_state));
      $pr_address  = $mysqli->real_escape_string(strtoupper($pr_address));
      $pr_po  = $mysqli->real_escape_string(strtoupper($pr_po));
      $pr_ps  = $mysqli->real_escape_string(strtoupper($pr_ps));
      $pr_dist  = $mysqli->real_escape_string(strtoupper($pr_dist));
      $pr_pin  = $mysqli->real_escape_string($pr_pin);
      $pr_land  = $mysqli->real_escape_string(strtoupper($pr_land));
      $pr_state  = $mysqli->real_escape_string(strtoupper($pr_state));
      $education  = $mysqli->real_escape_string(strtoupper($education));
      $e_board  = $mysqli->real_escape_string(strtoupper($e_board));
      $e_ins_name  = $mysqli->real_escape_string(strtoupper($e_ins_name));
      $pass_year  = $mysqli->real_escape_string($pass_year);
      $class  = $mysqli->real_escape_string($class);
      $percent  = $mysqli->real_escape_string($percent);
      $other_quali  = $mysqli->real_escape_string(strtoupper($other_quali));
      $other_board  = $mysqli->real_escape_string(strtoupper($other_board));
      $other_pass_year  = $mysqli->real_escape_string($other_pass_year);
      $other_ins_name  = $mysqli->real_escape_string(strtoupper($other_ins_name));
      $other_class  = $mysqli->real_escape_string(strtoupper($other_class));
      $other_percent  = $mysqli->real_escape_string(strtoupper($other_percent));
      $sport_board  = $mysqli->real_escape_string(strtoupper($sport_board));
      $sport_ins_name  = $mysqli->real_escape_string(strtoupper($sport_ins_name));
      $prof_sport_name  = $mysqli->real_escape_string(strtoupper($prof_sport_name));
      $any_job_exp_name  = $mysqli->real_escape_string(strtoupper($any_job_exp_name));
      $any_job_exp_year  = $mysqli->real_escape_string($any_job_exp_year);
      $cat  = $mysqli->real_escape_string(strtoupper($cat));
      $tr_chalan_no  = $mysqli->real_escape_string($tr_chalan_no);
      $tr_chalan_date  = $mysqli->real_escape_string($tr_chalan_date);
      $place  = $mysqli->real_escape_string(strtoupper($place));
      

      $update = $mysqli->query("update signin set fname = '$fname', mname = '$mname', lname = '$lname', mobile = '$mobile' where id = '$id'");


      if($update){
         $qy = $mysqli->query("update user_details set father ='$father', f_id_sign = '$id', spouse = '$spouse', gender = '$gender', dofb ='$dofb', maritial ='$maritial', nationality='$nationality', p_address ='$p_address', p_po ='$p_po', p_ps ='$p_ps', p_dist ='$p_dist', p_pin ='$p_pin', p_land ='$p_land', p_state ='$p_state', pr_address ='$pr_address', pr_po ='$pr_po', pr_ps ='$pr_ps', pr_dist ='$pr_dist', pr_pin ='$pr_pin', pr_land ='$pr_land', pr_state ='$pr_state', education ='$education', e_board ='$e_board', e_ins_name ='$e_ins_name', pass_year ='$pass_year', class ='$class', percent ='$percent', other_quali ='$other_quali', other_board ='$other_board', other_pass_year ='$other_pass_year', other_ins_name = '$other_ins_name', other_class = '$other_class', other_percent = '$other_percent', sport_board ='$sport_board', prof_sport_name ='$prof_sport_name', sport_ins_name = '$sport_ins_name', any_job_exp_name ='$any_job_exp_name', any_job_exp_year ='$any_job_exp_year', cat ='$cat', tr_chalan_no ='$tr_chalan_no', tr_chalan_date ='$tr_chalan_date', place ='$place' where f_id_sign= '$id'");


        if($qy){
              // send email;
              echo "<script  type='text/javascript'>alert('Form data updated Successfully')</script>";
        }else{
        echo $mysqli->error;
      }
        // echo "Success";
    }else{
        echo $mysqli->error;
      }
  }
}
?>


<?php

include('connection.php');
 $resultSet1 = $mysqli->query("select * from user_details where f_id_sign = '$id' limit 1");
  if($resultSet1->num_rows !=0){
    $row1 = $resultSet1->fetch_assoc();

  $status = $row1['status'];
  $post_name = $row1['post_name'];
  $father = $row1['father'];
  $gender = $row1['gender'];
  $dofb = $row1['dofb'];
  $spouse = $row1['spouse'];
  $maritial = $row1['maritial'];
  $nationality = $row1['nationality'];
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
  $other_board = $row1['other_board'];
  $other_pass_year = $row1['other_pass_year'];
  $other_ins_name = $row1['other_ins_name'];
  $other_class = $row1['other_class'];
  $other_percent = $row1['other_percent'];
  $other_quali_doc = $row1['other_quali_doc'];
  $sport_board = $row1['sport_board'];
  $prof_sport_name = $row1['prof_sport_name'];
  $sport_ins_name = $row1['sport_ins_name'];
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




 if ($status == 1) {
      //continue processing
  header('location:now_you_can_print.php');
      // echo "print application form <a href='application_form.php'>here</a> <br>";
    }else{ ?> 
      <!-- for update form -->
<div class="container">
  <div class="card p-2 mt-2 mb-2">
<form method="post" action="" enctype="multipart/form-data">

    <!-- candidate details -->
<div class="card">
  <div class="card-header">
    <h5><b>Candidate Details</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-12">
      <fieldset disabled>
      <label for="post_name" class="required">Post Name</label>
      <input type="text" value="<?php echo $post_name; ?>" class="form-control">
    </fieldset>
    </div>
    <div class="form-group col-md-4">
      <label for="fname" class="required">First Name</label>
      <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="mname">Middle Name</label>
      <input type="text" class="form-control" name="mname" value="<?php echo $mname; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="lname" class="required">Last Name</label>
      <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>" required="required">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="father" class="required">Father's Name</label>
    <input type="text" class="form-control" name="father" value="<?php echo $father; ?>" required="required">
</div>
    <div class="form-group col-md-6">
      <label for="sname">Spouse Name</label>
      <input type="text" class="form-control" name="spouse" value="<?php echo $spouse; ?>">
    </div>
  </div>
    <div class="form-row">
  <div class="form-group col-md-4">
      <label for="gender" class="required">Gender</label>
      <select class="form-control" name="gender" required>
        <option selected><?php echo $gender; ?></option>
          <option value="MALE">MALE</option>
          <option value="FEMALE">FEMALE</option>
          <option value="OTHER">OTHER</option>
      </select>
    </div>
    <div class="col-sm-3">
    
      <label for="dob" class="required">Date of Birth</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="images2/cal.gif" onclick="javascript:NewCssCal('dob3','YYYYMMDD','','','','','')" style="cursor:pointer;"/></div>
        </div>
        <input type="text" name="dofb" value="<?php echo $dofb; ?>" required class="form-control" id="dob3" required="">
     </div>
  </div>
  <div class="form-group col-md-5">
    <fieldset disabled>
      <label for="email" class="required">Email</label>
      <input type="email" class="form-control" value="<?php echo $email; ?>" id="disabledTextInput">
  </fieldset>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-3">
      <label for="maritial" class="required">Maritial Status</label>
      <select class="form-control" name="maritial" required>
          <option><?php echo $maritial; ?></option>
          <option value="MARRIED">MARRIED</option>
          <option value="UNMARRIED">UNMARRIED</option>
          <option value="DIVORCHED">DIVORCHED</option>
        </select>
    </div>
    <div class="form-group col-md-3">
      <label for="mobile">Contact No.(+91)</label>
      <input type="number" class="form-control" name="mobile" value="<?php echo $mobile; ?>" required="required">
    </div>
    
    <div class="form-group col-md-3">
      <label for="cast" class="required">Cast</label>
      <select  class="form-control" name="cat" required>
          <option><?php echo $cat; ?></option>
          <option value="SC">SC</option>
          <option value="ST">ST(P)</option>
          <option value="ST">ST(H)</option>
          <option value="OBC">OBC</option>
          <option value="GENERAL">GENERAL</option>
</select>
    </div>
    <div class="form-group col-md-3">
      <label for="nationality" class="required">Nationality</label>
      <select class="form-control" name="nationality" value="<?php echo $nationality; ?>" required>
          <option value="INDIAN">INDIAN</option>
        </select>
    </div>
  </div>

  </div>
</div>
<br>
<!-- candidate address (permanent) -->
<div class="card">
  <div class="card-header">
    <h5><b>Permanent address of the candidate</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="address" class="required">House No./Street/Locality</label>
      <input type="text" name="p_address" class="form-control" value="<?php echo $p_address; ?>" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="p_po" class="required">Post Office</label>
      <input type="text" class="form-control" name="p_po" value="<?php echo $p_po; ?>" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="p_ps" class="required">Police Station</label>
      <input type="text" class="form-control" name="p_ps" value="<?php echo $p_ps; ?>" required="required">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="Landmark" class="required">Landmark</label>
      <input type="text" name="p_land" class="form-control" value="<?php echo $p_land; ?>" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="District" class="required">District</label>
      <input type="text" class="form-control" name="p_dist" value="<?php echo $p_dist; ?>" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="State" class="required">State</label>
      <input type="text" class="form-control" name="p_state" value="<?php echo $p_state; ?>" required="required">
    </div>
    <div class="form-group col-md-2">
      <label for="pin" class="required">Pin</label>
      <input type="number" class="form-control" name="p_pin" value="<?php echo $p_pin; ?>" required="required">
    </div>
  </div>
  </div>
</div>
<br>

<!-- candidate address (present) -->
<div class="card">
  <div class="card-header">
   <h5><b>Present address of the candidate</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="address" class="required">House No./Street/Locality</label>
      <input type="text" name="pr_address" class="form-control" value="<?php echo $pr_address; ?>" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="pr_po" class="required">Post Office</label>
      <input type="text" class="form-control" name="pr_po" value="<?php echo $pr_po; ?>" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="pr_ps" class="required">Police Station</label>
      <input type="text" class="form-control" name="pr_ps" value="<?php echo $pr_ps; ?>" required="required">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="Landmark" class="required">Landmark</label>
      <input type="text" name="pr_land" class="form-control" value="<?php echo $pr_land; ?>" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="District" class="required">District</label>
      <input type="text" class="form-control" name="pr_dist" value="<?php echo $pr_dist; ?>" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="State" class="required">State</label>
      <input type="text" class="form-control" name="pr_state" value="<?php echo $pr_state; ?>" required="required">
    </div>
    <div class="form-group col-md-2">
      <label for="pin" class="required">Pin</label>
      <input type="number" class="form-control" name="pr_pin" value="<?php echo $pr_pin; ?>" required="required">
    </div>
  </div>
  </div>
</div>
<br>

<!-- candidate education -->
<div class="card">
  <div class="card-header">
   <h5><b>Educational qualification</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group  col-sm-4">
      <label for="edu" class="required">Education Name</label>
      <input type="text" name="education" class="form-control" value="<?php echo $education; ?>" required="required">
    </div>
    <div class="form-group col-sm-4">
      <label for="board" class="required">Board/University Name</label>
      <input type="text" class="form-control" name="e_board" value="<?php echo $e_board; ?>" required="required">
    </div>
    <div class="form-group  col-sm-4">
      <label for="Institute" class="required">Institute Name</label>
      <input type="text" class="form-control" name="e_ins_name" value="<?php echo $e_ins_name; ?>" required="required">
    </div>
  <div class="form-group  col-sm-4">
      <label for="passing" class="required">Year of passing</label>
      <input type="number" name="pass_year" class="form-control" value="<?php echo $pass_year; ?>" required="required">
    </div>
    <div class="form-group  col-sm-4">
      <label for="Division" class="required">Division</label>
      <input type="text" class="form-control" name="class" value="<?php echo $class; ?>" required="required">
    </div>
    <div class="form-group  col-sm-4">
      <label for="permanent" class="required">Percentage</label>
      <input type="number" class="form-control" name="percent" value="<?php echo $percent; ?>" required="required">
    </div>
  </div>
  </div>
</div>
<br>

<!-- other qualification -->
<div class="card">
  <div class="card-header">
   <h5><b>Other Educational qualification (Optional)</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="edu">Education Name</label>
      <input type="text" name="other_quali" class="form-control" value="<?php echo $other_quali; ?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="board">Board/University Name</label>
      <input type="text" class="form-control" name="other_board" value="<?php echo $other_board; ?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="Institute">Institute Name</label>
      <input type="text" class="form-control" name="other_ins_name" value="<?php echo $other_ins_name; ?>">
    </div>
  <div class="form-group col-sm-4">
      <label for="passing">Year of passing</label>
      <input type="number" name="other_pass_year" class="form-control" value="<?php echo $other_pass_year; ?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="Division">Division</label>
      <input type="text" class="form-control" name="other_class" value="<?php echo $other_class; ?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="permanent">Percentage</label>
      <input type="number" class="form-control" name="other_percent" value="<?php echo $other_percent; ?>">
    </div>
  </div>
  </div>
</div>
<br>

<!-- Sport Proficiency -->
<div class="card">
  <div class="card-header">
   <h5><b>Proficiency in Sports</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="prof_sport_name">Sport Name</label>
      <input type="text" name="prof_sport_name" class="form-control" value="<?php echo $prof_sport_name; ?>" >
    </div>
    <div class="form-group col-md-4">
      <label for="sport_board">Board/University Name</label>
      <input type="text" class="form-control" name="sport_board" value="<?php echo $sport_board; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="sport_ins_name">Institute Name</label>
      <input type="text" class="form-control" name="sport_ins_name" value="<?php echo $sport_ins_name; ?>">
    </div>
  </div>
  </div>
</div>
<br>


<!-- Job Experience -->
<div class="card">
  <div class="card-header">
   <h5><b>Preivious Job Experience if Any?</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="any_job_exp_name">Privious Job Name</label>
      <input type="text" name="any_job_exp_name" class="form-control" value="<?php echo $any_job_exp_name; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="any_job_exp_year">Privious Job in Year</label>
      <input type="text" class="form-control" name="any_job_exp_year" value="<?php echo $any_job_exp_year; ?>">
    </div>
  </div>
  </div>
</div>
<br>


<!-- Tresury Challan -->
<div class="card">
  <div class="card-header">
   <h5><b>Tresury Challan Details</b></h5>
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="tr_chalan_no" class="required">Tresury Challan No.</label>
      <input type="text" name="tr_chalan_no" class="form-control" value="<?php echo $tr_chalan_no; ?>" required="required">
    </div>
     <div class="col-sm-4">
    
      <label for="dob" class="required">Tresury Challan Date</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><img src="images2/cal.gif" onclick="javascript:NewCssCal('dob2','YYYYMMDD','','','','','')" style="cursor:pointer;"/></div>
        </div>
        <input type="text" name="tr_chalan_date" value="<?php echo $tr_chalan_date; ?>" required class="form-control" id="dob2" required="">
     </div>
  </div>
   <div class="form-group col-md-4">
      <label for="place" class="required">Current place</label>
      <input type="text" class="form-control" name="place" value="<?php echo $place; ?>" required="required">
    </div>
  </div>
  </div>
</div>
<br>






  

<center>
<button class="btn btn-primary" type="submit" value="update" name="modify">Update form data <i class="fas fa-edit"></i></button>

 <button class="btn btn-primary" type="submit" name="next">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</center>
<br>
</form>
</div>
</div>
<!-- end of update form -->

<?php  }} ?>

<center>
  <?php
    echo $error;
  ?>
</center>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="datetimepicker_css.js"></script>

  </body>
</html>