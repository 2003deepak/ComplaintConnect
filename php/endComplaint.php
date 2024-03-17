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

include 'config.php';
session_start();




if(isset($_POST['satisfied'])){


    $rating = $_GET['rating'];
    $complaint_id = $_GET['id'];

    if ($rating !== null && $complaint_id !== null) {
        $query = "SELECT * FROM complaints WHERE complaint_id = '$complaint_id' ";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $username = $row['username'];
                $complaint_type = $row['complaint_type'];
                $subject = $row['subject'];
                $description = $row['description'];
                $folder = $row['folder'];
                $time = $row['time'];
                $resolved_time = $row['resolved_time'];
                $last_updation = $row['last_updation'];
                $worker_assigned = $row['worker_assigned'];

                $insert_query = "INSERT INTO `closed_complaints` (`username`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`, `uploaded_time`, `resolved_time`,`last_updation`, `worker_assigned`, `rating`) VALUES ('$username', '$complaint_id', '$complaint_type', '$subject', '$description', '$folder', '$time','$resolved_time', '$last_updation', '$worker_assigned', '$rating')";

                $insert_result = mysqli_query($conn, $insert_query);

                if ($insert_result) {
                    // Move uploaded image file to closed_complaints folder
                    $destination = "../uploaded_images/closed_complaint/" . $complaint_id . "(user).jpg";

                    
                    // Moving Complaint Image to Closed_Complaint Folder
                    rename($folder, $destination);

                    // Moving Resolved Image to Closed_Complaint Folder
                    $folder2 = "../uploaded_images/resolved_complaint/". $complaint_id. ".png";
                    $destination2 = "../uploaded_images/closed_complaint/" . $complaint_id . "(worker).png";

                    rename($folder2, $destination2);
                        

                    // Delete complaint from complaints table
                    $delete_query = "DELETE FROM complaints WHERE complaint_id = '$complaint_id'";
                    $delete_result = mysqli_query($conn, $delete_query);

                    if ($delete_result) {
                        echo '<script>';
                        echo 'ConfirmationAlert("Done","Complaint closed successfully!","../php/dashboard.php")';
                        echo '</script>';
                    } else {
                        echo '<script>';
                        echo 'FailedAlert("Failed","Failed to delete complaint","../php/dashboard.php")';
                        echo '</script>';
                    }
                } else {
                    echo "Failed to insert into closed_complaint: " . $conn->error;
                }
            }
        } else {
            echo "No complaint found with ID: $complaint_id";
        }
    } else {
        echo "Missing rating or complaint ID.";
    }


}

?>
