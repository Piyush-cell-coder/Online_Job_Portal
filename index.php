<?php 
//   session_start(); 

//   if (!isset($_SESSION['email'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: adminlogin.php');
//   }
//   if (isset($_GET['logout'])) {
//   	session_destroy();
//   	unset($_SESSION['email']);
//   	header("location: adminlogin.php");
//   }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
<center><img src="pmgsy.png" alt="pmgsy" style="width:120px;height:110px;" />
  <img src="mord.png" alt="pmgsy" style="width:250px;height:110px;"/></center>
   <p align="right"> <a href="adminlogin.php" target="_blank">Admin Login</a>	 </p>
   <br>
   <br>
  <p>
    The Pradhan Mantri Gram Sadak Yojana (PMGSY), was launched by the Govt. of India to 
  provide connectivity to unconnected Habitations as part of a poverty reduction strategy.Govt. of India is endeavoring to set high & uniform technical & management standards & facilitating policy development and planning at 
  State level in order to ensure sustainable management of the rural roads network.
  	</p>
<br>
<br>
 <p>
    <center>
 <a href="apply.php" target="_blank">Apply Now</a> </center>		
 
  	</p>
    <br>

<div align="right">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}



.fa-youtube {
  background: #bb0000;
  color: white;
}



</style>
</head>

<h2>Connect with us :</h2>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/National-Rural-Infrastructure-Development-Agency-110923334607762/?ref" title="Facebook" class="fa fa-facebook"></a>
<a href="https://instagram.com/nrida.pmgsy?utm_medium=copy_link" class="fa fa-instagram"></a>
<a href="https://twitter.com/PMGSY_NRRDA" class="fa fa-twitter"></a>
<a href="https://youtube.com/channel/UC2mV3djxTwQenoaJGQGKiLw" class="fa fa-youtube"></a>

</div>
</body>
</html>