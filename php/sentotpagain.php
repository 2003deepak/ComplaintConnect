<?php
setcookie("emailotp", "", time() - 3600, "/");
$otp = rand(10000, 99999);
setcookie("emailotp",$otp,time()+300);
// Sending The OTP
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
                echo '<script>alert("OTP not send , pls try again later")</script>' ;
                echo $mail->ErrorInfo ;
                
                
                }else{
                echo '<script>alert("OTP is sent succesfully")</script>' ;
                echo "<script> location.replace('../html/forgot2.html')</script> ";
                }

    
                
    
        
        
            }
    
            echo smtp_mailer('poojarryadav@gmail.com','Recover Password','Hi You have request for recovery of password <br> OTP is <b>'.$otp.' </b> and it is valid for 5 minutes only'); 
            // Note in this , the mail will be sent to the user not to pooja , it is just a test , replace it to $mail of the use

?>