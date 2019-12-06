<?php

$con =mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}
else {
	echo "No connection";
}

mysqli_select_db($con,'capstone_project');

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

if (is_numeric($mobile)) {
	

$query = "INSERT into contact_info (firstname,lastname,email,mobile,message)
values ('$firstname','$lastname','$email','$mobile','$message')";

mysqli_query($con, $query);
header('location:contact.php');
}
 else {
  echo "Invalid phone number";
  header('location:contact.php');
}


?>




