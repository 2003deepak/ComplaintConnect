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




    $id = $_GET['id'];

    

    $sql = "DELETE FROM worker WHERE username = '$id'";


      if ($conn->query($sql) === TRUE) {

        echo '<script>';
        echo 'ConfirmationAlert("Done","Worker is Successfully Deleted","../php/manageworker.php");';
        echo '</script>';

        include("mail.php");

        if(smtp_mailer('poojarryadav@gmail.com','Account Deleted','Hi ' . $id . ', this an test email to inform you that your account is been deleted by the admin',"Worker was notified through EMAIL","Worker was not notified ")){
          echo "<script> location.replace('../php/manageworker.php')</script> ";
        }else{
          echo "<script> location.replace('../php/manageworker.php')</script> ";
        }

          

    
   
      }else {
        echo '<script>';
        echo 'ErrorAlert("Failed","Worker is not deleted","../php/manageworker.php");';
        echo '</script>';

        
      }



$conn->close();

?>
  
</body>
</html>