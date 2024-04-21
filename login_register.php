<?php 

require('connection.php');

session_start();
$fullname = "";
$mobile = "";
$email    = "";
$errors = array(); 

#for login
// if(isset($_POST['login'])) 
// {
//    $query="SELECT * FROM 'register' WHERE'email'='$_POST[email]' OR 'username'='$_POST[email]'";
//    $result=mysqli_query($con,$query);
//    if($result)
//    {
//       if(mysqli_num_rows($result)==1)
//       {
//          $result_fetch=mysqli_fetch_assoc($result);
//          if($result_fetch['is_verified']==1)
//          {
//             if(password_verify($_POST['password'],$result_fetch['password']))
//             {
//                #if password matched
//                $_SESSION['logged_in']=true;
//                $_SESSION['username']=$result_fetch['username'];
//                header("location: index.php");
//             }
//             else
   
//             {
//                #if incorrect password
//                echo"
//                <script>
//                alert('Incorrect Password');
            
//                window.location.href='index.php';
//                </script>
//                ";
//             }
// }

// else
// {
//    echo"
//    <script>
//    alert('email not verified');

//    window.location.href='index.php';
//    </script>
//    ";  
// }
// }

// else
// {
//    echo"
//    <script>
//    alert('email or username not registered');

//    window.location.href='index.php';
//    </script>
//    ";

// }

//    }

//    else
//    {

//       echo"
//       <script>
//       alert('cannot run query');
  
//       window.location.href='index.php';
//       </script>
//       ";

//    }

// }

#for registration

if (isset($_POST['register_btn']))
{
   // $fullname = $_POST['fullname'];
   // $username = $_POST['username'];
   // $email = $_POST['email'];
   $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }



 $user_check_query = "SELECT * FROM register WHERE email='$email' LIMIT 1";
//  $user_check_query = "SELECT * FROM adminusers WHERE email='$email' LIMIT 1";
 $result = mysqli_query($con, $user_check_query);
 $user = mysqli_fetch_assoc($result);
 
 if ($user) { // if user exists
   // if ($user['username'] === $username) {
   //   array_push($errors, "Username already exists");
   // }

   if ($user['email'] === $email) {
     array_push($errors, "email already exists");
   }
 }


   // $user_exist_query="SELECT * FROM 'register' WHERE User_name='$username' OR Email='$email'";
   // $result=mysqli_query($con, $user_exist_query);
   // if($result)
   // {
   //    if(mysqli_num_rows($result)>0)
   //    {
   //       $result_fetch=mysqli_fetch_assoc($result);
   //       if($result_fetch['username']==$username)
   //       {
   //          echo"<script>
   //          alert('$result_fetch[User_name] - Username already taken');
   //          window.location.href='index.php';
   //          </script>
   //          ";
   //       }
   //       else
   //       {
   //          echo"<script>
   //          alert('$result_fetch[Email] - email already registered');
   //          window.location.href='index.php';
   //          </script>
   //          ";
   //       }

   //    }
   // else 
   //    { 
      if (count($errors) == 0) {
         // $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
         $password = md5($password_1);
         $v_code=bin2hex(random_bytes(16));


         $query="INSERT INTO `register`(`full_name`, `mobile`, `email`, `Password`,`Verification_code`, `Is_Verified`)
         VALUES ('$fullname','$mobile','$email','$password','$v_code','0')";
         // if(mysqli_query($con, $query) && sendMail($_post['email'],$v_code))
         if(mysqli_query($con, $query))
         {

            #if data inserted successfully
            echo"
            <script>
            alert('Registration Successfull');
            window.location.href='adminlogin.php';
            </script>
            ";
         }
      }
         // else
         // {
         //    #if data cannot be inserted
         //    echo"
         //    <script>
         //    alert('Server Down');

         //    window.location.href='index.php';
         //    </script>
         //    ";
         // }
      }
      if (isset($_POST['login'])) {
         $email = mysqli_real_escape_string($con, $_POST['email']);
         $password = mysqli_real_escape_string($con, $_POST['password']);
       
         if (empty($email)) {
            array_push($errors, "Email is required");
         }
         if (empty($password)) {
            array_push($errors, "Password is required");
         }
       
         if (count($errors) == 0) {
            // $password = md5($password);
            $password = md5($password);
            $query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
            $results = mysqli_query($con, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['email'] = $email;
              $_SESSION['success'] = "You are now logged in";
              header('location: dashboard.php');
            }else {
               array_push($errors, "Wrong email/password combination");
            }
         }
       }
   // }
//       else
//       {
//       echo"
//       <script>
//       alert('cannot run query');

//       window.location.href='index.php';
//       </script>
//       ";
//       }
// }


?>