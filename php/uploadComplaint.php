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
    
</body>
</html>


<?php

include 'config.php' ; 
session_start();





if(isset($_POST['save'])){

    // Getting Info
    $username = $_SESSION['username'];
    $complaint_type = $_POST['complaint_group'];
    $subject = $_POST['subject'];
    $desc = $_POST['desc'];
    // Generate the complaint id 
    $random = rand(1000,9999);
    $complaint_id = "C$random";
   

    // Uploading the photo with complaint 

    
    $folder = "../uploaded_images/complaint_images/";
    $filename = $complaint_id . ".jpg"; // Rename the file to "roomno.pdf"
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../uploaded_images/complaint_images/".$filename ; ;

    move_uploaded_file($tempname,$folder);


  
    $sql = "INSERT INTO complaints(username,complaint_id,complaint_type,subject,description,folder,isApproved) VALUES ('$username','$complaint_id','$complaint_type','$subject','$desc','$folder',0)";

    if ($conn->query($sql) === TRUE) {

        
        echo '<script>';
        echo 'ConfirmationAlert("Successfull","Complaint is filed successfully","../php/dashboard.php")';
        echo '</script>';
    
 
   
    }else {
        

        echo '<script>';
        echo 'FailedAlert("Failed","Complaint is not filed","../php/dashboard.php")';
        echo '</script>';

        echo $conn->error ; 
        
    
    }
}

$conn->close();

?>


       