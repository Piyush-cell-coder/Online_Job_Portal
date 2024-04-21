<?php
session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jobportal');

if(!$db)
    die("Sorry!!! We failed to connect: ".mysqli_connect_error());
else{
if(isset($_POST['form_submit']))
{
	$position=($_POST['position']);
	$fname=($_POST['fname']);
	$mname=($_POST['mname']);
	$lname=($_POST['lname']);
      $fathername=($_POST['fathername']);
	$mothername=($_POST['mothername']);
      $dob=($_POST['dob']);
	$gender=($_POST['gender']);
      $mobile=($_POST['mobile']);
      $email=($_POST['email']);
      $category=($_POST['category']);
      $nationality=($_POST['nationality']);
	$uid_no=($_POST['uid_no']);

            //address
      $currentadd=($_POST['currentadd']);
      $permanentadd=($_POST['permanentadd']);

      //Education
      $highboard=($_POST['highboard']);
      $highyear=($_POST['highyear']);
      $highpercent=($_POST['highpercent']);
      $interboard=($_POST['interboard']);
      $interyear=($_POST['interyear']);
      $interpercent=($_POST['interpercent']);
      $graduationboard=($_POST['graduationboard']);
      $graduationyear=($_POST['graduationyear']);
      $graduationpercent=($_POST['graduationpercent']);
      $postboard=($_POST['postboard']);
      $postyear=($_POST['postyear']);
      $postpercent=($_POST['postpercent']);
      $otherB=($_POST['otherB']);
      $otherY=($_POST['otherY']);
      $otherP=($_POST['otherP']);

      $file_name = $_FILES['resume']['name'];
      $file_tmp = $_FILES['resume']['tmp_name'];
      
     move_uploaded_file($file_tmp,"./cv/".$file_name);


     //experience

      $organisation1 = $_POST['organisation1'];
      $designation1 = $_POST['designation1'];
      // $salary = $_POST['Salary'];
      $from1= $_POST['from1'];
      $to1 = $_POST['to1'];
      $organisation2 = $_POST['organisation2'];
      $designation2 = $_POST['designation2'];
      // $salary = $_POST['Salary'];
      $from2= $_POST['from2'];
      $to2 = $_POST['to2'];
      $organisation3 = $_POST['organisation3'];
      $designation3 = $_POST['designation3'];
      // $salary = $_POST['Salary'];
      $from3= $_POST['from3'];
      $to3 = $_POST['to3'];

      //other Details
      $totalexp=($_POST['totalexp']);
	$interest=($_POST['interest']);
      $compknow=($_POST['compknow']);
      $otherinfo=($_POST['otherinfo']);

      $file_name1 = $_FILES['document1']['name'];
      $file_tmp1 = $_FILES['document1']['tmp_name'];
     move_uploaded_file($file_tmp1,"./additional/".$file_name1);

      $datee=($_POST['datee']);
	$place=($_POST['place']);


	
	// $pay_status='Paid'; 
	// $course_fees='6000'; 
	$reg_no='NRIDA'.rand(99,10).time();
      $reg_no = substr($reg_no, 0, 6);
	$folder = "uploads/";
      
            //Photo 
      $image_file=$_FILES['image']['name'];
      $file = $_FILES['image']['tmp_name'];
      $path = $folder . $image_file; 
      $target_file=$folder.basename($image_file);
      $file_name_array = explode(".", $image_file);
      $extension = end($file_name_array);
      $new_image_name = 'photo_'.rand() . '.' . $extension;

      //Sign 
      $simage_file=$_FILES['simage']['name'];
      $sfile = $_FILES['simage']['tmp_name'];
      $spath = $folder . $simage_file; 
      $starget_file=$folder.basename($simage_file);
      $file_name_array = explode(".", $simage_file);
      $extension = end($file_name_array);
      $snew_image_name = 'sign_'.rand() . '.' . $extension;

      if($file!='')
      {
      move_uploaded_file($file,  $folder . $new_image_name); 
      }
      if($sfile!='')
      {
      move_uploaded_file($sfile, $folder . $snew_image_name); 
      }

      $insertquery = "INSERT INTO `registrations`(`reg_no`,`position`, `fname`, `mname`, `lname`, `fathername`, `mothername`, `dob`, `gender`, `mobile`, `email`, `category`, `nationality`, `uid`, `image`, `sign`, `current add`, `permanentadd`, `highboard`, `highyear`, `highpercent`, `interboard`, `interyear`, `interpercent`, `graduationboard`, `graduationyear`, `graduationpercent`, `postboard`, `postyear`, `postpercent`, `otherB`, `otherY`, `otherP`, `cv`, `organisation1`, `designation1`, `from1`, `to1`, `organisation2`, `designation2`, `from2`, `to2`, `organisation3`, `designation3`, `from3`, `to3`, `totalexp`, `interest`, `compknow`, `additionalinfo`, `additional doc`, `date`, `place`) 
       VALUES('$reg_no','$position','$fname','$mname','$lname','$fathername','$mothername','$dob','$gender','$mobile','$email','$category','$nationality','$uid_no','$image_file','$simage_file','$currentadd','$permanentadd','$highboard','$highyear','$highpercent','$interboard','$interyear','$interpercent','$graduationboard','$graduationyear','$graduationpercent','$postboard','$postyear','$postpercent','$otherB','$otherY','$otherP','$file_name','$organisation1','$designation1','$from1','$to1','$organisation2','$designation2','$from2','$to2','$organisation3','$designation3','$from3','$to3','$totalexp','$interest','$compknow','$otherinfo','$file_name1','$datee','$place')"; 
      $iquery = mysqli_query($db, $insertquery);
      
            if($iquery){
            ?>
            <div class="alert alert-success" role="alert">
                  <strong>Your have successfully stored the data!!!</strong>
            </div>
            
            <?php
            }
            else{
            ?>
            <div class="alert alert-danger" role="alert">
                  <strong>Failed!!!</strong>
            </div>
            <?php
            }

   
    header("location:preview.php?id=".$reg_no);
      }
}
?>