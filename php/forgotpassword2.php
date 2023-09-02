<?php
include 'config.php';

if (isset($_POST['save'])) {
    $otpentered = $_POST['otp'];

    // Check if the OTP entered by the user matches the stored OTP in the cookie
    if ($otpentered == $_COOKIE['emailotp']) {
        echo "OTP verified";
        setcookie("emailotp", "", time() - 3600, "/");
        
    } else {
        echo "Invalid OTP";
        // You can provide an error message to the user or handle the error accordingly
    }
}
?>