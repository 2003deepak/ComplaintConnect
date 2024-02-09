<?php




    setcookie("emailotp", "", time() - 3600, "/");
    $otp = rand(10000, 99999);
    setcookie("emailotp",$otp,time()+300);

    // Sending The OTP
            
        include("mail.php");
        if(smtp_mailer('poojarryadav@gmail.com','Recover Password','Hi , OTP for intial visit is  <br> OTP is <b>'.$otp.' </b> and it is valid for 5 minutes only , pls give this otp to the worker , if the intial visit is done',"OTP is sent succesfully","OTP not send , pls try again later")){
            
            echo "<script> location.replace('../html/forgot2.html')</script> ";
        }else{
            
            echo "<script> location.replace('../html/forgot2.html')</script> ";

        }
        




?>
