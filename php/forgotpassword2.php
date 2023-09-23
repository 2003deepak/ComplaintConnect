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

if (isset($_POST['save'])) {
    $otpentered = $_POST['otp'];
    $otp = $_COOKIE['emailotp'];

    // Check if the OTP entered by the user matches the stored OTP in the cookie
    if ($otpentered == $otp) {

        echo '<script>';
        echo 'ConfirmationAlert("Verified","OTP is verified","../html/resetPassword.html");';
        echo '</script>';
        
       
        
    } else {
        echo '<script>';
        echo 'ErrorAlert("Failed","Invalid OTP","../html/forgot2.html");';
        echo '</script>';
        echo '<script>alert("Invalid OTP")</script>' ;
        echo "<script> location.replace('../html/forgot2.html')</script> ";
       
    }
}
?>
    
</body>
</html>

