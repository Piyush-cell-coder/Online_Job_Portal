<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jobportal');

// REGISTER USER
if (isset($_POST['admin_reg'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['Lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $user_check_query = "SELECT * FROM adminusers WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    // if ($user['username'] === $username) {
    //   array_push($errors, "Username already exists");
    // }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    // $password =password_hash($_POST['password'],PASSWORD_BCRYPT);

  	$query = "INSERT INTO `adminusers`(`firstname`, `lastname`, `email`, `password`) 
  			  VALUES('$firstname', '$lastname', '$email', '$password')";
    	if(mysqli_query($db, $query))
      {
        echo"
        <script>
        alert('registration Successful');
        window.location.href = 'adminlogin.php';
        </script>
        ";
        // header('location: adminlogin.php');
      }
      else{
        echo"
        <script>
        alert('Cannot Run Query');
        window.location.href = 'mainindex.php';
        </script>
        ";
        // header('location: mainindex.php');
      }
      
    }
}

// LOGIN USER
if (isset($_POST['login_admin'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM adminusers WHERE email='$email' AND password= '$password' ";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dashboard.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

