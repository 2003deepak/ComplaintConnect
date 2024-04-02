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
include 'C:\xampp\htdocs\ComplaintConnect\php\config.php';
session_start();
include 'authsession.php';

// Check if form is submitted
if(isset($_POST['not_satisfied'])){
    // Retrieve form data
    $complaint_id = $_GET['id'];
    $desc = $_POST['dissatisfaction_cause'];

    // Insert data into priority_complaints table
    $insert_query = "INSERT INTO `priority_complaints` VALUES ('$complaint_id', '$desc')";
    $insert_query2 = "UPDATE complaints SET isPriority = 1, resolved_time = NULL WHERE complaint_id = '$complaint_id'";
    $insert_query3 = "UPDATE worker_action SET complete = NULL where complaint_id = '$complaint_id' " ; 
    $insert_result = mysqli_query($conn, $insert_query);
    $insert_result2 = mysqli_query($conn, $insert_query2);
    $insert_result3 = mysqli_query($conn, $insert_query3);

    // Check if insertion was successful
    if ($insert_result2) {
        // Insertion successful
        echo '<script>';
        echo 'ConfirmationAlert("Done","Complaint Relodged","../php/dashboard.php")';
        echo '</script>';
    } else {
        // Insertion failed
        echo '<script>';
        echo 'FailedAlert("Failed","Failed to Relodged","../php/dashboard.php")';
        echo '</script>';
        // Display error message
        echo "Failed to insert into priority_complaints: " . $conn->error;
    }
}
?>
