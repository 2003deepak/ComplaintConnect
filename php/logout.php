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
session_start();
session_destroy();

setcookie("usernamecookie", "", time() - 3600, "/");
setcookie("passwordcookie", "", time() - 3600, "/");

echo '<script>';
echo 'ConfirmationAlert("Done","You are successfully Logged Out","../php/login.php");';
echo '</script>';



?>
    
</body>
</html>

