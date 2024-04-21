<?php include('forgotpassword1.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE-PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="forgotpassword.css">

</head>
<body>
    
<h1>Change Password</h1>

<form method="POST" action="forgotpassword1.php" >
<div class="input-group">
        <label>Enter User ID</label>
  		<input type="text" name="email">
</div>


<!-- <div class="input-group">
        <label>New Password:</label>
  		<input type="Password" name="Password">
</div>

<div class="input-group">
<label>Confirm Password:</label>
<input type="password" name="confirmPassword">
</div> -->

<div class="input-group">
  		<button type="submit" class="btn" name= "send_link">Send Link</button>
  	</div>
</form>


</body>
</html>