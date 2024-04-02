<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Close Complaint</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<?php
include 'C:\xampp\htdocs\ComplaintConnect\php\config.php';
session_start();
include 'authsession.php';

if (isset($_POST['save'])) {
    $complaint_id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';

    $folder = "../resolved_complaint";
    $filename = $complaint_id . ".png"; // Use $complaint_id here instead of $_GET['id']
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "../uploaded_images/resolved_complaint/" . $filename;

    move_uploaded_file($tempname, $folder);

    $sql1 = "UPDATE worker_action SET complete = 1  WHERE complaint_id = '$complaint_id'";
    $query1 = mysqli_query($conn, $sql1);

    $sql2 = "UPDATE complaints SET `resolved_time` = NOW() , resolved_image = '$folder' WHERE `complaint_id` = '$complaint_id'";
    $query2 = mysqli_query($conn, $sql2);

    // $sql3 = "delete from worker_action where `complaint_id` = '$complaint_id'";
    // $query3 = mysqli_query($conn, $sql3);

    if ($query1 && $query2) {
        echo '<script>alert("Complaint is successfully closed")</script>';
         echo "<script> location.replace('../php/Wdashboard.php')</script>";
    } else {
        echo '<script>alert("Complaint Closing Failed")</script>';
        echo "<script> location.replace('../php/takeAction.php')</script>";
    }
}
?>

<form id="otpForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="action">Select Action:</label>
    <select id="action" name="action">
        <option value="select">Select</option>
        <option value="complete">Close Complaint</option>
    </select>

    <div id="otpContainer" style="display: none;">
        <label for="otp">Upload Complaint Completion Image</label>
        <input type="file" id="otp" name="file" required>
        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
        <input type="submit" id="submitOtp" name="save" value="Close Complaint">
    </div>
</form>

<script>
$(document).ready(function() {
    $('#action').change(function() {
        var selectedAction = $(this).val();
        if (selectedAction === 'complete') {
            $('#otpContainer').show();
        } else {
            $('#otpContainer').hide();
        }
    });
});
</script>

</body>
</html>
