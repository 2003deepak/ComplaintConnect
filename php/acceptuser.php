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


  $id = $_GET["id"];

  $id_search = "select * from register where sno='$id' " ;
  $query = mysqli_query($conn, $id_search);
  $id_count = mysqli_num_rows($query);
  if($id_count){

      $details = mysqli_fetch_assoc($query);
      $email = $details['email'];
      

  }

  $sql = "Update register set isAllowed = 1 where sno = $id ";

  if ($conn->query($sql) === TRUE) {

    echo '<script>';
    echo 'ConfirmationAlert("Accepted","User is accepted","../php/edituser.php");';
    echo '</script>';

    include("mail.php");

    if(smtp_mailer('poojarryadav@gmail.com','Access Granted','Hi Pooja this is an test emal to inform you that now you can use our complaint Connect Website',"User was notified through EMAIL","User was not notified ")){
      echo "<script> location.replace('../php/adminpanel.php')</script> ";
    }else{
      echo "<script> location.replace('../php/adminpanel.php')</script> ";
    }
    
    

  }else {
    echo '<script>';
    echo 'ErrorAlert("Error","User was not accepted","../php/edituser.php");';
    echo '</script>';
  }


$conn->close();
   
  ?>
  
</body>
</html>
