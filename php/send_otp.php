<?php
setcookie("emailotp", "", time() - 3600, "/");
$otp = rand(10000, 99999);
setcookie("emailotp", $otp, time() + 300);

$email = $_GET['email']; // Use $_GET to retrieve the email parameter

include("mail.php");
if (smtp_mailer($email, 'Initial Visit', 'Hi, OTP for initial visit is <br> OTP is <b>' . $otp . '</b> and it is valid for 5 minutes only, please give this OTP to the worker if the initial visit is done', "OTP is sent successfully", "OTP not sent, please try again later")) {
    echo "<script> location.replace('../html/forgot2.html')</script> ";
} else {
    echo "<script> location.replace('../html/forgot2.html')</script> ";
}
?>
