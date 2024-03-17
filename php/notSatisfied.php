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

// Check if form is submitted
if(isset($_POST['not_satisfied'])){
    // Retrieve form data
    $complaint_id = $_GET['id'];
    $desc = $_POST['dissatisfaction_cause'];

    // Insert data into priority_complaints table
    $insert_query = "INSERT INTO `priority_complaints` VALUES ('$complaint_id', '$desc')";
    $insert_result = mysqli_query($conn, $insert_query);

    // Check if insertion was successful
    if ($insert_result) {
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
