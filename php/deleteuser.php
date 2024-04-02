<!-- this is used to delete the user from the table  -->
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

include 'config.php';
session_start();
include 'authsession.php';




    $id = $_GET['id'];

    $id_search = "select * from register where sno='$id' " ;
    $query = mysqli_query($conn, $id_search);
    $id_count = mysqli_num_rows($query);
    if($id_count){

        $query1 = mysqli_fetch_assoc($query);
        $name = $query1['username'];
        

    }

    $sql = "delete from register where sno = $id" ; 

      if ($conn->query($sql) === TRUE) {

        echo '<script>';
        echo 'ConfirmationAlert("Done","User is Successfully Deleted","../php/edituser.php");';
        echo '</script>';

        include("mail.php");

        if(smtp_mailer('yadavsuraj7449@gmail.com','Account Deleted','Hi ' . $name . ', this an test email to inform you that your account is been deleted by the admin',"User was notified through EMAIL","User was not notified ")){
          echo "<script> location.replace('../php/adminpanel.php')</script> ";
        }else{
          echo "<script> location.replace('../php/adminpanel.php')</script> ";
        }

          

    
   
      }else {
        echo '<script>';
        echo 'ErrorAlert("Failed","User is not deleted","../php/edituser.php");';
        echo '</script>';
      }



$conn->close();

?>
  
</body>
</html>
