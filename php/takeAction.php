<?php 

include 'C:\xampp\htdocs\ComplaintConnect\php\config.php' ;
session_start();

// setcookie("complaint_id",$_GET("id"),time());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Example</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<form id="otpForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="action">Select Action:</label>
    <select id="action" name="action">
        <option value="initial_visit">Initial Visit Done</option>
        <option value="complaint_resolved">Complaint Resolved</option>
    </select>

    <div id="otpContainer" style="display: none;">
        <label for="otp">Enter OTP:</label>
        <input type="text" id="otp" name="otp" required>
        <input type="submit" id="submitOtp" name="save" value = "Submit OTP">
    </div>
</form>


<?php 

if(isset($_POST['save'])){

    $otpentered = $_POST["otp"];
    $orgotp = $_COOKIE["emailotp"];

    if($otpentered == $orgotp){

        $sql1 = "UPDATE worker_action SET actionTaken = 1 WHERE complaint_id = $complaint_id ";
        $query1 = mysqli_query($conn,$sql1);
        if($query1){
            echo '<script>alert("Password is Updated ")</script>' ;
           
            echo "<script> location.replace('../php/dashboard.php')</script> ";
        }else{
            echo '<script>alert("OOPS something Went wrong ")</script>' ;
            echo "<script> location.replace('../php/updateCurrentPassword.php')</script> ";
        }
       
    }else{
        echo "<script> alert('Sorry for wrong otp ') </script>";
    }


}



?>

<script>
$(document).ready(function() {
    $('#action').change(function() {
        var selectedAction = $(this).val();
        if (selectedAction === 'initial_visit') {
            // Show OTP container for "Initial Visit Done" option
            $('#otpContainer').show();

            // Send OTP to the email address
            $.ajax({
                type: 'POST',
                url: 'send_otp.php', // Replace with your server-side script to send OTP
                success: function(response) {
                    console.log('OTP sent successfully:', response);
                },
                error: function(error) {
                    console.error('Error sending OTP:', error);
                }
            });
        } else {
            // Hide OTP container for other options
            $('#otpContainer').hide();
        }
    });

    $('#submitOtp').click(function() {
        var enteredOtp = $('#otp').val();
        // Add logic to validate entered OTP and perform necessary actions
        console.log('Entered OTP:', enteredOtp);
    });
});
</script>

</body>
</html>
