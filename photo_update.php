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
    // process login
    $row = $resultSet->fetch_assoc();
    $id = $row['id'];
}else{
	echo "error";
}



// submit photo form 

$error = NULL;
if (isset($_POST['photo'])) {
  $photo = $_FILES['photo'];
  

  $filename = $photo['name'];
  $fileerror = $photo['error'];
  $filetmp = $photo['tmp_name'];
  $filesize = $photo['size'];
  $fileext = explode('.', $filename);
  $filecheck = strtolower(end($fileext));  
  $fileextstored = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck, $fileextstored)){
    $temp = explode(".", $filename);
    $newfilename = round(microtime(true)) . 'aa'.'.' . end($temp);
    $destinationfile = 'user_docs/'.$newfilename;
    move_uploaded_file($filetmp, $destinationfile);
  }

if($filesize > 8290832){
      echo '<script>alert("Photo Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }elseif($filesize < 10400){
      echo '<script>alert("Photo Size is less then 10KB, OR If you update your form update All photos one more time")</script>'; 
    }else{
     
      $photo  = $mysqli->real_escape_string($destinationfile);
      
         $qy = $mysqli->query("update user_details set photo ='$photo' where f_id_sign= '$id'");
        if($qy){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}



// submit sign form 

$error = NULL;
if (isset($_POST['sign'])) {
  $sign = $_FILES['sign'];


  $filename1 = $sign['name'];
  $fileerror1 = $sign['error'];
  $filetmp1 = $sign['tmp_name'];
  $filesize1 = $sign['size'];
  $fileext1 = explode('.', $filename1);
  $filecheck1 = strtolower(end($fileext1));  
  $fileextstored1 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck1, $fileextstored1)){
    $temp1 = explode(".", $filename1);
    $newfilename1 = round(microtime(true)) . 'qq'.'.' . end($temp1);
    $destinationfile1 = 'user_docs/'.$newfilename1;
    move_uploaded_file($filetmp1, $destinationfile1);
  }

if($filesize1 > 8290832){
      echo '<script>alert("Signature Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }elseif($filesize1 < 10400){
      echo '<script>alert("Signature Size is less then 10KB, OR If you update your form update All photos one more time")</script>'; 
    }else{
     
      $sign  = $mysqli->real_escape_string($destinationfile1);
      
         $qy1 = $mysqli->query("update user_details set sign ='$sign' where f_id_sign= '$id'");
        if($qy1){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}



// submit birth form 

$error = NULL;
if (isset($_POST['dob_doc'])) {
  $dob_doc = $_FILES['dob_doc'];


  $filename9 = $dob_doc['name'];
  $fileerror9 = $dob_doc['error'];
  $filetmp9 = $dob_doc['tmp_name'];
  $filesize9 = $dob_doc['size'];
  $fileext9 = explode('.', $filename9);
  $filecheck9 = strtolower(end($fileext9));  
  $fileextstored9 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck9, $fileextstored9)){
    $temp9 = explode(".", $filename9);
    $newfilename9 = round(microtime(true)) .'cc'. '.' . end($temp9);
    $destinationfile9 = 'user_docs/'.$newfilename9;
    move_uploaded_file($filetmp9, $destinationfile9);
  }

if($filesize9 > 8290832){
      echo '<script>alert("Birth proof file Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }elseif($filesize9 < 10400){
      echo '<script>alert("Birth proof file Size is less then 10KB, OR If you update your form update All photos one more time")</script>'; 
    }else{
     
      $dob_doc  = $mysqli->real_escape_string($destinationfile9);
      
         $qy2 = $mysqli->query("update user_details set dob_doc ='$dob_doc' where f_id_sign= '$id'");
        if($qy2){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";  
  }
}

// e_doc

$error = NULL;
if (isset($_POST['e_doc'])) {
  $e_doc = $_FILES['e_doc'];


 $filename2 = $e_doc['name'];
  $fileerror2 = $e_doc['error'];
  $filetmp2 = $e_doc['tmp_name'];
  $filesize2 = $e_doc['size'];
  $fileext2 = explode('.', $filename2);
  $filecheck2 = strtolower(end($fileext2));  
  $fileextstored2 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck2, $fileextstored2)){
    $temp2 = explode(".", $filename2);
    $newfilename2 = round(microtime(true)) .'zz'. '.' . end($temp2);
    $destinationfile2 = 'user_docs/'.$newfilename2;
    move_uploaded_file($filetmp2, $destinationfile2);
  }

if($filesize2 > 8290832){
      echo '<script>alert("Education Document Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }elseif($filesize2 < 10400){
      echo '<script>alert("Education Document Size is less then 10KB, OR If you update your form update All photos one more time")</script>'; 
    }else{
     
      $e_doc  = $mysqli->real_escape_string($destinationfile2);
      
         $qy3 = $mysqli->query("update user_details set e_doc ='$e_doc' where f_id_sign= '$id'");
        if($qy3){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}

//other qualification doc

$error = NULL;
if (isset($_POST['other_quali_doc'])) {
  $other_quali_doc = $_FILES['other_quali_doc'];

$filename3 = $other_quali_doc['name'];
  $fileerror3 = $other_quali_doc['error'];
  $filetmp3 = $other_quali_doc['tmp_name'];
  $filesize3 = $other_quali_doc['size'];
  $fileext3 = explode('.', $filename3);
  $filecheck3 = strtolower(end($fileext3));  
  $fileextstored3 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck3, $fileextstored3)){
    $temp3 = explode(".", $filename3);
    $newfilename3 = round(microtime(true)) .'ee'. '.' . end($temp3);
    $destinationfile3 = 'user_docs/'.$newfilename3;
    move_uploaded_file($filetmp3, $destinationfile3);
  }

if($filesize3 > 8290832){
      echo '<script>alert("Other qualification Document Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }else{
     
      $other_quali_doc  = $mysqli->real_escape_string($destinationfile3);
      
         $qy4 = $mysqli->query("update user_details set other_quali_doc ='$other_quali_doc' where f_id_sign= '$id'");
        if($qy4){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}

//prof_sport doc

$error = NULL;
if (isset($_POST['prof_sport_doc'])) {
  $prof_sport_doc = $_FILES['prof_sport_doc'];

$filename4 = $prof_sport_doc['name'];
  $fileerror4 = $prof_sport_doc['error'];
  $filetmp4 = $prof_sport_doc['tmp_name'];
  $filesize4 = $prof_sport_doc['size'];
  $fileext4 = explode('.', $filename4);
  $filecheck4 = strtolower(end($fileext4));  
  $fileextstored4 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck4, $fileextstored4)){
    $temp4 = explode(".", $filename4);
    $newfilename4 = round(microtime(true)) .'ff'. '.' . end($temp4);
    $destinationfile4 = 'user_docs/'.$newfilename4;
    move_uploaded_file($filetmp4, $destinationfile4);
  }


if($filesize4 > 8290832){
      echo '<script>alert("Sport Proficiency Document Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }else{
     
      $prof_sport_doc  = $mysqli->real_escape_string($destinationfile4);
      
         $qy5 = $mysqli->query("update user_details set prof_sport_doc ='$prof_sport_doc' where f_id_sign= '$id'");
        if($qy5){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}

//any_job_exp_doc

$error = NULL;
if (isset($_POST['any_job_exp_doc'])) {
  $any_job_exp_doc = $_FILES['any_job_exp_doc'];


$filename5 = $any_job_exp_doc['name'];
  $fileerror5 = $any_job_exp_doc['error'];
  $filetmp5 = $any_job_exp_doc['tmp_name'];
  $filesize5 = $any_job_exp_doc['size'];
  $fileext5 = explode('.', $filename5);
  $filecheck5 = strtolower(end($fileext5));  
  $fileextstored5 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck5, $fileextstored5)){
    $temp5 = explode(".", $filename5);
    $newfilename5 = round(microtime(true)) .'gg'. '.' . end($temp5);
    $destinationfile5 = 'user_docs/'.$newfilename5;
    move_uploaded_file($filetmp5, $destinationfile5);
  }



if($filesize5 > 8290832){
      echo '<script>alert("Job Experiance Document Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }else{
     
      $any_job_exp_doc  = $mysqli->real_escape_string($destinationfile5);
      
         $qy6 = $mysqli->query("update user_details set any_job_exp_doc ='$any_job_exp_doc' where f_id_sign= '$id'");
        if($qy6){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}

//cat_doc

$error = NULL;
if (isset($_POST['cat_doc'])) {
  $cat_doc = $_FILES['cat_doc'];


$filename6 = $cat_doc['name'];
  $fileerror6 = $cat_doc['error'];
  $filetmp6 = $cat_doc['tmp_name'];
  $filesize6 = $cat_doc['size'];
  $fileext6 = explode('.', $filename6);
  $filecheck6 = strtolower(end($fileext6));  
  $fileextstored6 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck6, $fileextstored6)){
    $temp6 = explode(".", $filename6);
    $newfilename6 = round(microtime(true)) .'hh'. '.' . end($temp6);
    $destinationfile6 = 'user_docs/'.$newfilename6;
    move_uploaded_file($filetmp6, $destinationfile6);
  }



if($filesize6 > 8290832){
      echo '<script>alert("Cast certificate Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }else{
     
      $cat_doc  = $mysqli->real_escape_string($destinationfile6);
      
         $qy7 = $mysqli->query("update user_details set cat_doc ='$cat_doc' where f_id_sign= '$id'");
        if($qy7){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
  }
}


//cat_doc

$error = NULL;
if (isset($_POST['tr_chalan_doc'])) {
  $tr_chalan_doc = $_FILES['tr_chalan_doc'];

$filename7 = $tr_chalan_doc['name'];
  $fileerror7 = $tr_chalan_doc['error'];
  $filetmp7 = $tr_chalan_doc['tmp_name'];
  $filesize7 = $tr_chalan_doc['size'];
  $fileext7 = explode('.', $filename7);
  $filecheck7 = strtolower(end($fileext7));  
  $fileextstored7 = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck7, $fileextstored7)){
    $temp7 = explode(".", $filename7);
    $newfilename7 = round(microtime(true)) .'ii'. '.' . end($temp7);
    $destinationfile7 = 'user_docs/'.$newfilename7;
    move_uploaded_file($filetmp7, $destinationfile7);
  }




if($filesize7 > 8290832){
      echo '<script>alert("Tresuary Challan Certificate Size is grater than 6MB, OR If you update your form update All photos one more time")</script>';
    }else{
     
      $tr_chalan_doc  = $mysqli->real_escape_string($destinationfile7);
      
         $qy8 = $mysqli->query("update user_details set tr_chalan_doc ='$tr_chalan_doc' where f_id_sign= '$id'");
        if($qy8){
              // send email;
              header('location:photo_update.php');
        }else{
        echo $mysqli->error;
      }
        echo "Success";
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

    <title>Registration</title>
  </head>
  <body>
    <div class="container"><div class="row pt-4">
<div class="col-md-12">
  <div class="prgrs">
<div class="progress1">
  <div class="prgrs-br progress-bar-animated prgrs-r-strpd" role="progressbar" style="width: 48%"></div>
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

 $resultSet2 = $mysqli->query("select * from user_details where f_id_sign = '$id' limit 1");
  if($resultSet2->num_rows !=0){
    $row2 = $resultSet2->fetch_assoc();
   
  $status = $row2['status'];
  $photo = $row2['photo'];
  $sign = $row2['sign'];
  $dob_doc = $row2['dob_doc'];
  $e_doc = $row2['e_doc'];
  $other_quali_doc =$row2['other_quali_doc'];
  $prof_sport_doc =$row2['prof_sport_doc'];
  $any_job_exp_doc =$row2['any_job_exp_doc'];
  $cat_doc =$row2['cat_doc'];
  $tr_chalan_doc =$row2['tr_chalan_doc'];
  $cat =$row2['cat'];




// final submit button
if (isset($_POST['final1'])) {
  if($photo == NULL){
     echo '<script>alert(" Update Passport photo before Finel Submit")</script>';
  }elseif($sign == NULL){
     echo '<script>alert(" Update Signature before Finel Submit")</script>';
  }elseif($tr_chalan_doc == NULL){
     echo '<script>alert(" Update Tresuary Challan Document before Finel Submit")</script>';
  }elseif($e_doc == NULL){
     echo '<script>alert(" Update Education Documents before Finel Submit")</script>';
  }elseif($dob_doc == NULL){
    echo '<script>alert(" Update Birth Proof Documents before Finel Submit")</script>';
  }elseif($cat == !NULL && $cat_doc == NULL){
    echo '<script>alert(" Update Category Documents before Finel Submit")</script>';
  }else{
      $updatefinal1 = $mysqli->query("update user_details set status = 2 where f_id_sign = '$id' limit 1");


      if($updatefinal1){
        header('location:view_form.php');
 }}
}


if ($status == 1) {
      //continue processing
      header('location:now_you_can_print.php');
    }elseif ($status == 2) {
      //continue processing
      header('location:view_form.php');
    }else{ ?> 
      <!-- for photo update form -->
    <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-1">
        <div class="card-header">
          <h3 class="display-5" style="position: absolute;">Documents Update:</h3><span class="float-right">
                     <a href="logout.php" class="btn btn-info btn-md ">
                           Log out
                      </a></span>
        </div>
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Passport Photo:<label class="text-danger">*</label></td>
                <td class="inpt"><input class="dd" type="file" name="photo" value="<?php echo $photo; ?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="picup" name="photo">Update</button></td>
              </tr>

            </tbody>
          </table>
        </div>
    </div>

    
  </form>


 <!-- for sign update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-1">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Sign:<label class="text-danger">*</label></td>
                <td class="inpt"><input class="dd" type="file" name="sign" value="<?php echo $sign; ?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="picup" name="sign">Update</button></td>
              </tr>

            </tbody>
          </table>
        </div>
    </div>

    
  </form>

   <!-- for birth proof update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-1">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Age Proof:<label class="text-danger">*</label></td>
                <td class="inpt"><input class="dd" type="file" name="dob_doc" value="<?php echo $dob_doc; ?>"></td>
                <td><button class=" ml-2 btn btn-primary" type="submit" value="dob_doc" name="dob_doc">Update</button></td>
              </tr>

            </tbody>
          </table>
        </div>
    </div>

    
  </form>

 <!-- for e_doc update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-1">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Education Document:<label class="text-danger">*</label></td>
                <td class="inpt"><input class="dd" type="file" name="e_doc" value="<?php echo $e_doc;?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="e_doc" name="e_doc">Update</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    
  </form>

   <!-- for Tresuary Chalan update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-1">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Treasury Challan Doc:<label class="text-danger">*</label></td>
                <td class="inpt"><input class="dd" type="file" name="tr_chalan_doc" value="<?php echo $tr_chalan_doc;?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="tr_chalan_doc" name="tr_chalan_doc">Update</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    
  </form>

<div class="row">
  <div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $photo; ?>" height="130px" width="130px">
  <center>Color photo</center>
</div>
<div class="border border-dark m-2">
  <img class="border border-dark mt-5 m-2" src="<?php echo $sign;?>" height="50px" width="130px" >
  <center>Signature</center>
</div>
  <div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $dob_doc;?>"height="130px" width="130px">
  <center>Age proof</center>
</div>
  <div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $e_doc;?>" height="130px" width="130px">
  <center>Education certificate</center>
</div>
<div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $tr_chalan_doc;?>" height="130px" width="130px">
  <center>Tresuary Challan Doc</center>
</div>

</div>

<br><br>

<!-- for e_doc update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-3">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Other qualification Document:</td>
                <td class="inpt"><input class="dd" type="file" name="other_quali_doc" value="<?php echo $other_quali_doc;?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="other_quali_doc" name="other_quali_doc">Update</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    
  </form>

  <!-- for Prof_sport_doc update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-3">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Sport Document:</td>
                <td class="inpt"><input class="dd" type="file" name="prof_sport_doc" value="<?php echo $prof_sport_doc;?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="prof_sport_doc" name="prof_sport_doc">Update</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    
  </form>

   <!-- for job_exp_doc update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-3">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Job Experiance Doc:</td>
                <td class="inpt"><input class="dd" type="file" name="any_job_exp_doc" value="<?php echo $any_job_exp_doc;?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="any_job_exp_doc" name="any_job_exp_doc">Update</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    
  </form>

 <!-- for job_exp_doc update form -->

 <form method="post" action="" enctype="multipart/form-data">
      <div class="card mb-3">
        <div class="card-body">
          <table class="tbl border ">
            <tbody>
              <tr class="table-light">
                <td class="inpt">Caste certificate:</td>
                <td class="inpt"><input class="dd" type="file" name="cat_doc" value="<?php echo $cat_doc;?>"></td>
                <td><button class="ml-2 btn btn-primary" type="submit" value="cat_doc" name="cat_doc">Update</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    
  </form>


<div class="row">
  <div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $other_quali_doc; ?>" height="130px" width="130px">
  <center>Other Quali.. Doc</center>
</div>
<div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $prof_sport_doc;?>" height="130px" width="130px" >
  <center>Sport Doc</center>
</div>
  <div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $any_job_exp_doc;?>"height="130px" width="130px">
  <center>Job Experiance Doc</center>
</div>
  <div class="border border-dark m-2">
  <img class="border border-dark m-2" src="<?php echo $cat_doc;?>" height="130px" width="130px">
  <center>Category certificate</center>
</div>

</div>

<br>
<div>






<?php  }} ?>



<form action=" " method="post">
  <center>
  <div class="btn btn-primary" type="submit" onclick="location.href='modify_form_data.php'"><i class="fas fa-arrow-left"></i> Previous</div>
  <button class="btn btn-danger"  type="submit" value="final1" name="final1">Submit & Preview <i class="fas fa-arrow-right"></i></button>
</center>
</form><br><br><br>
</div>
<center>
  <?php
    echo $error;
  ?>
</center>


</div>
<div class="time" id="time"></div>
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
  </body>
</html>