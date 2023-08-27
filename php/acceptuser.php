
<?php


include 'config.php' ;


  $id = $_GET["id"];

  $sql = "Update register set isAllowed = 1 where sno = $id ";

  if ($conn->query($sql) === TRUE) {

    echo "<script> alert('user is accepted')</script> " ;
  
    // Sending Mail

    $to_email = "poojarryadav@gmail.com";
    $subject = "Permission Granted";
    $body = "We are glad to inform you that , you can now use your ComplaintConnect Website to lodge complain";
    $headers = "From: deepakkumar74491234@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "<script> alert('Email is sent')</script> " ;
        echo "<script> location.replace('../php/edituser.php')</script> ";
    } else {
        echo "<script> alert('Email is not sent')</script> " ;
        echo "<script> location.replace('../php/edituser.php')</script> ";
    }
    


    // echo "<script> location.replace('../php/edituser.php')</script> ";

    // header('location:login.html');
  }else {
    echo "<script> alert('User is not given permission , try again')</script>" ;
    echo "<script> location.replace('../php/edituser.php')</script> ";
  }


$conn->close();

  ?>