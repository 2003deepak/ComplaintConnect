<?php
include 'config.php';
session_start();
include 'authsession.php';

$id = $_GET['id'];

$sql = "DELETE FROM worker WHERE username = '$id'";

// Select the Aadhar card image filename for the worker
$sql_select_aadhar = "SELECT * FROM worker WHERE username = '$id'";
$result = $conn->query($sql_select_aadhar);

if ($result->num_rows > 0) {
    // Fetch the Aadhar card filename
    $row = $result->fetch_assoc();
    $aadhar_filename = $row['aadhar_card'];
    $email = $row['email'];

    // Delete the Aadhar card image from uploaded_images folder
    $uploaded_images_path = "$aadhar_filename";
    if (file_exists($uploaded_images_path)) {
        unlink($uploaded_images_path);
    }
}

if ($conn->query($sql) === TRUE) {

    echo '<script>';
    echo 'ConfirmationAlert("Done","Worker is Successfully Deleted","../php/manageworker.php");';
    echo '</script>';

    include("mail.php");

    $subject = 'Account Deleted';
    $message = 'Hi ' . $id . ',<br><br>';
    $message .= 'We regret to inform you that your account has been deleted by the admin due to violation of our terms and conditions. Your access to our platform has been terminated.<br><br>';
    $message .= 'If you believe this action was taken in error, please contact us immediately.<br><br>';
    $message .= 'Thank you for your understanding.<br>';
    $message .= 'Admin';

    if (smtp_mailer($email, $subject, $message, "Worker was notified through EMAIL", "Worker was not notified ")) {
        echo "<script> location.replace('../php/manageworker.php')</script> ";
    } else {
        echo "<script> location.replace('../php/manageworker.php')</script> ";
    }
} else {
    echo '<script>';
    echo 'ErrorAlert("Failed","Worker is not deleted","../php/manageworker.php");';
    echo '</script>';
}

$conn->close();
?>
