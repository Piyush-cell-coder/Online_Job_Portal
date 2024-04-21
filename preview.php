<?php require_once("config.php");$reg_no=$_GET['id'];?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application form</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<style type="text/css">
	@page { size: auto;  margin: 10mm; margin-right: -70px; margin-left: -70px;}
@media print {
    a[href]:after {
        content: none !important;
    }
}
@media print {
        #printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }

    .underline{
line-height: 27px !important;
 text-decoration-style: dotted !important;
}
}


</style>
</head>
<body>
<div class="container-fluid">
	<?php $sql="SELECT count(*) from registrations WHERE reg_no=:reg_no"; 
    	 $stmt = $db->prepare($sql);
           $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
           $stmt->execute();
          $count=$stmt->fetchcolumn();
      if($count==0) 
      {
      	echo 'Registration number is missing or invalid.Kindly filup <a href="apply.php">application form</a>..';
      }
      else {
  ?>
<div class="row">
  <div class="col-sm-1">
  </div>

    <div class="col-sm-10" style="border: 2px solid black; padding:10px;">
    	<?php 

         $sql="SELECT * from registrations WHERE reg_no=:reg_no"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
           $stmt->execute();
           $rows=$stmt->fetchall();
         foreach($rows as $row)
         {
    	 ?> 
         <div class="row">
          <div class="col-2">
            <img src="pmgsy.png" class="img-fluid" height="80px" width="80px">
          </div>
           <div class="col">
              <div class="main-heading">National Rural Development Agency</div>
     <center><p class="sub-heading"> Ministry of Rural Development</p></center>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls"> 
          </div>
      </div>
      <div class="row">
  <p id="message"></p>
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="text-align: center;padding-bottom: 5px;">
   <h3> <u>Application form</u></h3>
  </div>
  <div class="col-sm-2">
  </div>

  </div>

<div class="row">
    <div class="col-6">
        <div class="form-group row">
   <div class="col-4">

      <label class="lable">Registration No</label>
    </div>
     <div class="col-8">
      <strong><?php echo $row['reg_no']; ?></strong>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4">

      <label class="lable">Full Name</label>
    </div>
     <div class="col-8">
      <?php echo $row['fname']; ?> <?php echo $row['mname']; ?>  <?php echo $row['lname']; ?>  
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">

      <label class="lable">Father's Name</label>
    </div>
     <div class="col-8">
      <?php echo $row['fathername']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Mother's Name</label>
    </div>
     <div class="col-8">
       <?php echo $row['mothername']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Date of Birth</label>
    </div>
     <div class="col-8">
      <?php echo $row['dob']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Gender</label>
    </div>
     <div class="col-8">
      <?php echo $row['gender']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Mobile No.</label>
    </div>
     <div class="col-8">
      <?php echo $row['mobile']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Email</label>
    </div>
     <div class="col-8">
      <?php echo $row['email']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Category</label>
    </div>
     <div class="col-8">
       <?php echo $row['category']; ?> 
    </div>
    </div>

<div class="form-group row">
   <div class="col-4">
      <label class="lable">Nationality</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['nationality']; ?> 
    </div>
    </div>
    
<div class="form-group row">
   <div class="col-4">
      <label class="lable">Aadhar No.</label>
    </div>
     <div class="col-8">
           <?php echo $row['uid']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
  <div class="row">
    <div class="col-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="width: 150px; ">
      <img src="uploads/<?php echo $row['image']; ?> "  width="150" height="150">
  </div>

  </div>
  </div>
  </div>  
  
  <div class="row">
    <div class="col-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Signature</label>
   <div style=" width: 150px; ">
      <img src="uploads/<?php echo $row['sign']; ?>"  width="151" height="120" />
  </div>
  </div>  
    </div>
  </div>

    </div>

</div> 
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Current Address</label>
    </div>
     <div class="col-8">
    <?php echo $row['current add']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Permanent Address</label>
    </div>
     <div class="col-8">
    <?php echo $row['permanentadd']; ?> 
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">High School</label>
    </div>
     <div class="col-8">
    <h6>Board</h6><?php echo $row['highboard']; ?><h6>Year</h6>
    <?php echo $row['highyear']; ?><h6>%</h6>
    <?php echo $row['highpercent']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Intermediate</label>
    </div>
     <div class="col-8">
     <h6>Board</h6><?php echo $row['interboard']; ?><h6>Year</h6>
    <?php echo $row['interyear']; ?><h6>%</h6>
    <?php echo $row['interpercent']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Graduation</label>
    </div>
     <div class="col-8">
     <h6>Board</h6><?php echo $row['graduationboard']; ?><h6>Year</h6>
    <?php echo $row['graduationyear']; ?><h6>%</h6>
    <?php echo $row['graduationpercent']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Post Graduation</label>
    </div>
     <div class="col-8">
     <h6>Board</h6><?php echo $row['postboard']; ?><h6>Year</h6>
    <?php echo $row['postyear']; ?><h6>%</h6>
    <?php echo $row['postpercent']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Other Degree</label>
    </div>
     <div class="col-8">
     <h6>Board</h6><?php echo $row['otherB']; ?><h6>Year</h6>
    <?php echo $row['otherY']; ?><h6>%</h6>
    <?php echo $row['otherP']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Resume</label>
    </div>
     <div class="col-8">
     <?php echo $row['cv']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Experience 1</label>
    </div>
     <div class="col-8">
     <h6>Organisation</h6><?php echo $row['organisation1']; ?><h6>Designation/Role</h6>
    <?php echo $row['designation1']; ?><h6>From</h6>
    <?php echo $row['from1']; ?><h6>To</h6><?php echo $row['to1']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Experience 2</label>
    </div>
     <div class="col-8">
     <h6>Organisation</h6><?php echo $row['organisation2']; ?><h6>Designation/Role</h6>
    <?php echo $row['designation2']; ?><h6>From</h6>
    <?php echo $row['from2']; ?><h6>To</h6><?php echo $row['to2']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Experience 3</label>
    </div>
     <div class="col-8">
     <h6>Organisation</h6><?php echo $row['organisation1']; ?><h6>Designation/Role</h6>
    <?php echo $row['designation3']; ?><h6>From</h6>
    <?php echo $row['from3']; ?><h6>To</h6><?php echo $row['to3']; ?>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Total Experience</label>
    </div>
     <div class="col-8">
     <?php echo $row['totalexp']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Area of Interest</label>
    </div>
     <div class="col-8">
     <?php echo $row['interest']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Knowledge of Computer</label>
    </div>
     <div class="col-8">
     <?php echo $row['compknow']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Additional Information</label>
    </div>
     <div class="col-8">
     <?php echo $row['additionalinfo']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Additional Document</label>
    </div>
     <div class="col-8">
     <?php echo $row['additional doc']; ?> 
    </div>
    </div>
    </div>
    <div class="col-50">
     <div class="form-group row">
   <div class="col-50">
    <p>I certify that the above information by me is true to the best of my knowledge and belief. I also agree that in the event of any mispresentation and/or falsification of information, my appointment shall be liable for termination without notice and without prejudice to any other 
                administrative/legal proceedings that -NRIDA may deem fit to initiate.</p>
      <label class="lable">Date</label>
    </div>
     <div class="col-8">
     <?php echo $row['date']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Place</label>
    </div>
     <div class="col-8">
     <?php echo $row['place']; ?> 
    </div>
    </div>
    </div>
  </div>

  <!-- Row 4 end --> 
<?php } ?> 
</div>
 
<div class="col-2">
  </div>

</div>
<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()">Print Form</button></center>
<br>
<?php } ?> 

</div>

</body>
</html>