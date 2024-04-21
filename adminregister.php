<?php include('login_register.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="POST" action="adminregister.php">
  	<?php include('errors.php'); ?>

	  <div class="input-group">
  	  <label>Firstname</label>
  	  <input type="text" name="fullname" value="<?php echo $fullname; ?>" required>
  	</div>

	  <div class="input-group">
  	  <label>Mobile No</label>
  	  <input type="text" name="mobile" value="<?php echo $mobile; ?>" required>
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password(minimum 6 character):</label>
  	  <input type="password" name="password_1" minlength="6" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register_btn">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="adminlogin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>