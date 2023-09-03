
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

    echo "<script> alert('user is accepted')</script> " ;

    include("mail.php");

    if(smtp_mailer('poojarryadav@gmail.com','Access Granted','Hi Pooja this is an test emal to inform you that now you can use our complaint Connect Website',"User was notified through EMAIL","User was not notified ")){
      echo "<script> location.replace('../php/adminpanel.php')</script> ";
    }else{
      echo "<script> location.replace('../php/adminpanel.php')</script> ";
    }
    
    

  }else {
    echo "<script> alert('User is not given permission , try again')</script>" ;
    echo "<script> location.replace('../php/edituser.php')</script> ";
  }


$conn->close();
   
  ?>