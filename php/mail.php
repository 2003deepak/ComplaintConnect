<?php
include("../phpmailer_smtp/smtp/PHPMailerAutoload.php");
            
            function smtp_mailer($to,$subject, $msg,$onSuccess,$onFail){
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
                $mail->Password = "mimcgcekkwketgmf"; // My app password for gmail
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
                echo '<script>alert("'.$onFail.'")</script>' ;
                echo $mail->ErrorInfo ;
                return false;
                
                
                }else{
                    echo '<script>alert("'.$onSuccess.'")</script>' ;
                    return true ; 
                
                }

    
                
    
        
        
            }

            function smtp_mailer_alert($to,$subject, $msg){
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
                $mail->Password = "mimcgcekkwketgmf"; // My app password for gmail
                $mail->SetFrom("deepakkumar74491234@gmail.com");
                $mail->Subject = $subject;
                $mail->Body =$msg;
                $mail->AddAddress($to);
                $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
                ));
                $mail->Send();
                echo $mail->ErrorInfo ;
                return false;
                
                
                

    
                
    
        
        
            }





?>