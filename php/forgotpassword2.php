<?php
include 'config.php';

if (isset($_POST['save'])) {
    $otpentered = $_POST['otp'];
    $otp = $_COOKIE['emailotp'];

    // Check if the OTP entered by the user matches the stored OTP in the cookie
    if ($otpentered == $otp) {
        echo '<script>alert("OTP is verified")</script>' ;
        echo "<script> location.replace('../html/resetPassword.html')</script> ";
       
        
    } else {
        echo '<script>alert("Invalid OTP")</script>' ;
        echo "<script> location.replace('../html/forgot2.html')</script> ";
       
    }
}
?>