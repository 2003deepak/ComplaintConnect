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
include 'authsession.php';

if (isset($_POST['save'])) {
    $otpEntered = $_POST['otp'];

    if(isset($_COOKIE['emailotp'])){

        if($otpEntered == $_COOKIE['emailotp']){

            // Unset the cookie by setting it with an expiration time in the past
            setcookie("emailotp", "", time() - 3600, "/");

            echo '<script>';
            echo 'ConfirmationAlert("Verified","OTP is verified","../html/resetPassword.html");';
            echo '</script>';

        }else{
            echo '<script>';
            echo 'ErrorAlert("Failed","Invalid OTP","../html/forgot2.html");';
            echo '</script>';
        }
    }else{
        echo '<script>';
        echo 'ErrorAlert("Failed","OTP Expired","../html/forgot2.html");';
        echo '</script>';
    }
}
?>

</body>
</html>

