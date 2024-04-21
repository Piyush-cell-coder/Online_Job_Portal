<?php
require("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$reset_token)
{
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/Exception.php');

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'loquaciouspk@gmail.com';                     //SMTP username
    $mail->Password   = 'secretpass';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('loquaciouspk@gmail.com', 'NRIDA');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset Link from NRIDA-ICT';
    $mail->Body    = "We got a request from you to resey your password!<br>
    Click the link below:<br>
    <a href='http://localhost/testing/updatepassword.php? email=$email&reset_token=$reset_token'>Reset Password</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return true;
}
 catch (Exception $e) {
return false;
}

}

if(isset($_POST['send_link']))
{
    $query="SELECT * FROM `register` WHERE 'email'='$_POST[email]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
if(mysqli_num_rows($result)==1)
{
$reset_token=bin2hex(random_bytes(16));
date_default_timezone_set('Asia/kolkata');
$date=date("y-m-d");
$query="UPDATE `register` SET resettoken`='$reset_token',`resettokenexpire`='$date' WHERE 'email'='$_POST[email]";
if(mysqli_query($con,$query) && sendMail($_POST['email'],$reset_token))
{
    echo"
    <script>
    alert('Password reset link sent to mail');
    window.location.href='index.php';
    </script>
    "; 

}
else
{
    echo"
    <script>
    alert('server down! try again later');
    window.location.href='index.php';
    </script>
    ";   
}

}
else
{
    echo"
    <script>
    alert('Email not found');
    window.location.href='index.php';
    </script>
    ";  
}
    }
    else
    {
        echo"
        <script>
        alert('cannot run query');
        window.location.href='index.php';
        </script>
        ";
    }
}
?>