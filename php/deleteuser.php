<!-- this is used to delete the user from the table  -->

<?php

include 'config.php';




    $id = $_GET['id'];

    $id_search = "select * from register where sno='$id' " ;
    $query = mysqli_query($conn, $id_search);
    $id_count = mysqli_num_rows($query);
    if($id_count){

        $details = mysqli_fetch_assoc($query);
        $email = $details['email'];
      

    }

    $sql = "delete from register where sno = $id" ; 

      if ($conn->query($sql) === TRUE) {

        echo "<script> alert('User is succesfully removed')</script> " ;

        include("mail.php");

        if(smtp_mailer('poojarryadav@gmail.com','Account Deleted','Hi Pooja this is an test email to inform you that your account is been deleted by the admin',"User was notified through EMAIL","User was not notified ")){
          echo "<script> location.replace('../php/adminpanel.php')</script> ";
        }else{
          echo "<script> location.replace('../php/adminpanel.php')</script> ";
        }

          

    
   
      }else {
          echo "<script> alert('User is not deleted')</script>" ;
          echo "<script> location.replace('../php/edituser.php')</script> ";
      }



$conn->close();

?>