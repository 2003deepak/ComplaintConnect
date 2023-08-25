<!-- Code to Make user login by allowing isAllowed to 1  -->
<?php



include 'config.php' ;


if(isset($_POST['save'])){

  $sno = $_POST["sno"];

  echo $sno ;
//   $sql = "Update register set isAllowed = 1 where sno = `$sno` ";

//   if ($conn->query($sql) === TRUE) {

//     echo "<script> alert('user is accepted')</script> " ;
//     // echo "done" ;
  
//     echo "<script> location.replace('../php/edituser.php')</script> ";

//     // header('location:login.html');
//   }else {
//     echo "<script> alert('User is not given permission , try again')</script>" ;
//     // echo "<script> location.replace('../html/index.html')</script> ";
//   }
}

$conn->close();

?>