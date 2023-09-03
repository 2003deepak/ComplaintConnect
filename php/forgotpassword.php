<?php
include 'config.php';

if (isset($_POST['save'])) {
    $email = $_POST['email'];

    // Check if the email is not empty
    if (empty($email)) {
        echo "<script>alert('Email cannot be empty')</script>";
        echo "<script>location.replace('../html/index.html')</script>";
        exit;
    }

    // Sanitize the email input (use mysqli_real_escape_string or a more robust sanitizer)
    $email = mysqli_real_escape_string($conn, $email);

    // Use the sanitized email in the SQL query
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Check if the query executed successfully
    if ($result) {
        $count = mysqli_num_rows($result);

        if ($count == 1) {

            $otp = rand(10000, 99999);

            // Setting Cookie for the website
            setcookie("emailotp",$otp,time()+300);

            include("mail.php");

            if(smtp_mailer('poojarryadav@gmail.com','Recover Password','Hi You have request for recovery of password <br> OTP is <b>'.$otp.' </b> and it is valid for 5 minutes only',"OTP is sent succesfully","OTP not send , pls try again later")){
                echo "<script> location.replace('../html/forgot2.html')</script> ";
            }else{
                echo "<script> location.replace('../html/forgot.html')</script> ";
            }
            
                

    

            
        } else {
            echo "<script>alert('Invalid Email ID')</script>";
            echo "<script>location.replace('../html/index.html')</script>";
        }
    } else {
        // Handle query execution error
        echo '<script>alert("Error executing SQL query: ' . mysqli_error($conn) . '")</script>';
    }

    // Close the database connection
    mysqli_close($conn);
}



// Code for resending the otp 

if (isset($_POST['resend'])){

    setcookie("emailotp", "", time() - 3600, "/");
    $otp = rand(10000, 99999);
    setcookie("emailotp",$otp,time()+300);

    // Sending The OTP
            
    
        if(smtp_mailer('poojarryadav@gmail.com','Recover Password','Hi You have request for recovery of password <br> OTP is <b>'.$otp.' </b> and it is valid for 5 minutes only',"OTP is sent succesfully","OTP not send , pls try again later")){
            echo '<script>alert("OTP is sent succesfully")</script>' ;
            echo "<script> location.replace('../html/forgot2.html')</script> ";
        }else{
            echo '<script>alert("OTP not send , pls try again later")</script>' ;
            echo "<script> location.replace('../html/forgot2.html')</script> ";

        }
        


}else{

}




?>
