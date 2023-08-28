
<?php


include 'config.php' ;


  $id = $_GET["id"];

  $sql = "Update register set isAllowed = 1 where sno = $id ";

  if ($conn->query($sql) === TRUE) {

    echo "<script> alert('user is accepted')</script> " ;
    
     


    
    


    // echo "<script> location.replace('../php/edituser.php')</script> ";

    // header('location:login.html');
  }else {
    echo "<script> alert('User is not given permission , try again')</script>" ;
    echo "<script> location.replace('../php/edituser.php')</script> ";
  }


$conn->close();

  ?>