<?php


include 'config.php' ;


if(isset($_POST['save'])){

  
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "uploaded/".$filename ;

  move_uploaded_file($tempname,$folder);
  echo "<br><br>" ;
  echo "<img src = '$folder' height = '200px' width = '200px'>" ;
  

$conn->close();

}
