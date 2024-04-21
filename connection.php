<?php
$con=mysqli_connect('localhost', 'root', '', 'jobportal');
if(mysqli_connect_error()){
echo"<script>alert('cannot connect to the database');</script>";
exit();
}

?>