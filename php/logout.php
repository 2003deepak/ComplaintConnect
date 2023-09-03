<?php
session_start();
session_destroy();

setcookie("usernamecookie", "", time() - 3600, "/");
setcookie("passwordcookie", "", time() - 3600, "/");
echo "<script> alert('You are successfully Logged Out')</script> ";

echo "<script> location.replace('../php/login.php')</script> ";


// to save logoutphp 


?>