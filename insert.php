<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $name=$_POST['name'];
  $mobile_no=$_POST['mobile_no'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

$sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`,`mobile_no`,`email`,`subject`,`message`) 
  VALUES ('$name','$mobile_no','$email','$subject','$message')");

if($sql==1){
header("location:contactus.php");
}
else
echo 'connection failed';
}
                       ?>