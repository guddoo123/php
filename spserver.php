<?php
$errors = array();
$statusMsg = '';

$con=mysqli_connect('localhost','root','','capstone_project');
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}
mysqli_select_db($con,'capstone_project');
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["idUpload"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


$targetDir1 = "uploads/";
$fileName1 = basename($_FILES["photoUpload"]["name"]);
$targetFilePath1 = $targetDir1 . $fileName1;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);




if(isset($_POST["sp_register"]) && !empty($_FILES["idUpload"]["name"])  && !empty($_FILES["photoUpload"]["name"])) {
  // receive all input values from the form
  $name =  $_POST['name'];
  $phone = $_POST['phone'];
  $email =$_POST['email'];
  $gender =  $_POST['gender'];
  $dob =  $_POST['dob'];
  $nationality =  $_POST['nationality'];
  $status =  $_POST['status'];
  $country =  $_POST['country'];
  $state =  $_POST['state'];
  $city =  $_POST['city'];
  $street =  $_POST['street'];
  $pincode =  $_POST['pincode'];
  $spCategory =  $_POST['Category'];
  $spSubCat =  $_POST['SubCat'];
  $verID =  $_POST['verID'];









    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["idUpload"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["photoUpload"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database
            $query =  "INSERT into sp_reg_info (name,phone,email,gender,dob,nationality,m_status,country,state,city,street,pincode,spCategory,spSubCat,uploadID,id_name,photo_name, uploaded_on) VALUES ('$name','$phone','$email','$gender','$dob','$nationality','$status','$country','$state','$city','$street','$pincode','$spCategory','$spSubCat','$verID',  '".$fileName."','".$fileName1."', NOW())";
            mysqli_query($con, $query);

            if($query){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "File size should be less than 2MB";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;



?>