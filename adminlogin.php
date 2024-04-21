<?php include('login_register.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Registration and Login</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<center><img src="pmgsy.png" alt="pmgsy" style="width:120px;height:110px;" />
  <img src="mord.png" alt="pmgsy" style="width:250px;height:110px;"/></center>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
  <form method="POST" action="adminlogin.php" >
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" placeholder="Email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" placeholder="Password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login">Log in</button>
  	</div>


  	<p>
  		Not yet a member? <a href="adminregister.php">Sign up</a>
  	</p>
	  <div>
	<span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>

	</div>
  </form>
  <div><center>
      <button onclick = "window.location.href='index.php';">home 
</center></div>
</body>
</html>