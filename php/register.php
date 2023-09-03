<?php

include 'config.php' ;


if(isset($_POST['save'])){

  
  $username=$_POST['username'];
  $password = $_POST['password'];
  $email=$_POST['email'];
  $building = $_POST['building'];
  $room = $_POST['room'];

  // Encryption of Password
  $str_pass = password_hash($password,PASSWORD_BCRYPT);
  
  $sql = "INSERT INTO register (`username`,`password`,`email`, `building`,`room`,`isAllowed`) VALUES ('$username','$str_pass' ,'$email', '$building','$room',0)";

  if ($conn->query($sql) === TRUE) {

    echo "<script> alert('You are successfully registered')</script> " ;
    // echo "done" ;
   
    echo "<script> location.replace('../php/login.php')</script> ";
 
    // header('location:login.html');
  }else {
    echo "<script> alert('You are not registered pls try again with right credentials ')</script>" ;
    echo "<script> location.replace('../html/index.html')</script> ";
  }
}

$conn->close();

?>