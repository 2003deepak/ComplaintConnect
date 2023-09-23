<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src ="../js/sweet.js"></script>
  <title>Document</title>
</head>
<body>

<?php

include 'config.php' ;




if(isset($_POST['save'])){

  
  $username=$_POST['username'];
  $password = $_POST['password'];
  $email=$_POST['email'];
  $building = $_POST['building'];
  $room = $_POST['room'];

  // Used for allotment letter upload 
  $folder = "../uploaded_images";
  $filename = $building."_" . $room . ".pdf"; // Rename the file to "roomno.pdf"
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "../uploaded_images/allotment_letter/".$filename ;

  move_uploaded_file($tempname,$folder);


  // Encryption of Password
  $str_pass = password_hash($password,PASSWORD_BCRYPT);
  
  $sql = "INSERT INTO register (`username`,`password`,`email`, `building`,`room`,`allotment_letter`,`isAllowed`) VALUES ('$username','$str_pass' ,'$email', '$building','$room','$folder',0)";

  if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'ConfirmationAlert("Done","You are Successfully Registered","../php/login.php");';
    echo '</script>';

  }else {
    echo '<script>';
    echo 'ErrorAlert("Failed","Sorry You are not Registered","../html/index.html");';
    echo '</script>';
  }
}

$conn->close();

?>
  
</body>
</html>

