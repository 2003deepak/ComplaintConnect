<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ComplaintConnect";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("<script>alert('Oops we are some problem pls try again later ')</script>");
    echo "<script> location.replace('../html/index.html')</script> ";
}

?>