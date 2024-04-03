<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src ="../js/sweet.js"></script>
  <title>Edit User</title>
</head>
<body>

<?php
include 'config.php';

$id = $_GET["id"];

$id_search = "select * from register where sno='$id' ";
$query = mysqli_query($conn, $id_search);
$id_count = mysqli_num_rows($query);
if ($id_count) {

    $details = mysqli_fetch_assoc($query);
    $email = $details['email'];
    $username = $details['username'];

}

$sql = "Update register set isAllowed = 1 where sno = $id ";

if ($conn->query($sql) === TRUE) {

    $subject = 'Welcome to Our Platform';
    $message = 'Hi ' . $username . ',<br><br>';
    $message .= 'Welcome to our platform! We are thrilled to have you join us and we hope you have a great experience. <br><br>';
    $message .= 'If you have any questions or need assistance, feel free to reach out to us. <br><br>';
    $message .= 'Thank you for choosing us.<br>';

    include("mail.php");

    if (smtp_mailer($email, $subject, $message, "User was notified through EMAIL", "User was not notified ")) {
        echo "<script> location.replace('../php/adminpanel.php')</script> ";
    } else {
        echo "<script> location.replace('../php/adminpanel.php')</script> ";
    }
} else {
    echo '<script>';
    echo 'ErrorAlert("Error","User was not accepted","../php/edituser.php");';
    echo '</script>';
}

$conn->close();

?>
