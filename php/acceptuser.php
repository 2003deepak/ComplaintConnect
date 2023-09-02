
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


    include("../phpmailer_smtp/smtp/PHPMailerAutoload.php");

    

    function smtp_mailer($to,$subject, $msg){
      $mail = new PHPMailer(); 
      $mail->IsSMTP(); 
      $mail->SMTPAuth = true; 
      $mail->SMTPSecure = 'tls'; 
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 587; 
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      //$mail->SMTPDebug = 2; 
      $mail->Username = "deepakkumar74491234@gmail.com";
      $mail->Password = "gguowhxemhtowryy"; // My app password for gmail
      $mail->SetFrom("deepakkumar74491234@gmail.com");
      $mail->Subject = $subject;
      $mail->Body =$msg;
      $mail->AddAddress($to);
      $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
      ));
      if(!$mail->Send()){
        echo '<script>alert("User was not notified ")</script>' ;
        echo $mail->ErrorInfo ;
        
        
      }else{
        echo '<script>alert("User was notified through EMAIL")</script>' ;
        echo "<script> location.replace('../php/adminpanel.php')</script> ";
      }

      

    
   
    }

    echo smtp_mailer('poojarryadav@gmail.com','Access Granted','Hi Pooja this is an test emal to inform you that now you can use our complaint Connect Website'); 
    // Note in this , the mail will be sent to the user not to pooja , it is just a test , replace it to $mail of the user
    

  }else {
    echo "<script> alert('User is not given permission , try again')</script>" ;
    echo "<script> location.replace('../php/edituser.php')</script> ";
  }


$conn->close();
   
  ?>