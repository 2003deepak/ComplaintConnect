<!-- this is used to delete the user from the table  -->

<?php

include 'config.php';




    $id = $_GET['id'];

    $sql = "delete from register where sno = $id" ; 

      if ($conn->query($sql) === TRUE) {

        echo "<script> alert('User is succesfully removed')</script> " ;
        echo "<script> location.replace('../php/edituser.php')</script> ";

      }else {
        echo "<script> alert('User is not deleted')</script>" ;
        echo "<script> location.replace('../php/edituser.php')</script> ";
      }



$conn->close();

?>