<?php
include 'config.php';
session_start();
include 'authsession.php';

$id = $_GET['id'];

$id_search = "SELECT * FROM register WHERE sno='$id'";
$query = mysqli_query($conn, $id_search);
$id_count = mysqli_num_rows($query);
if ($id_count) {
    $query1 = mysqli_fetch_assoc($query);
    $email = $query1['email'];
    $name = $query1['username'];
}

$sql = "DELETE FROM register WHERE sno = $id";
$sql2 = "DELETE FROM complaints WHERE username = '$name'";
if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
    include("mail.php");
    if (smtp_mailer($email, 'Account Deleted', 'Hi ' . $name . ', this is a test email to inform you that your account has been deleted by the admin.', "User was notified through EMAIL", "User was not notified ")) {
        echo '<script>';
        echo 'ConfirmationAlert("Done","User is Successfully Deleted","../php/edituser.php");';
        echo '</script>';
        echo "<script> location.replace('../php/adminpanel.php')</script> ";
    } else {
        echo '<script>';
        echo 'ErrorAlert("Failed","User is not deleted","../php/edituser.php");';
        echo '</script>';
        echo "<script> location.replace('../php/adminpanel.php')</script> ";
    }
} else {
    echo '<script>';
    echo 'ErrorAlert("Failed","User is not deleted","../php/edituser.php");';
    echo '</script>';
}

$conn->close();
?>
