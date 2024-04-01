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

                $destination = "../uploaded_images/closed_complaint/" . $complaint_id . "(user).jpg";
                $destination2 = "../uploaded_images/closed_complaint/" . $complaint_id . "(worker).png";

                $username = $row['username'];
                $complaint_type = $row['complaint_type'];
                $subject = $row['subject'];
                $description = $row['description'];
                $folder = $destination;
                $resolved_image = $destination2;
                $time = $row['time'];
                $resolved_time = $row['resolved_time'];
                $last_updation = $row['last_updation'];
                $worker_assigned = $row['worker_assigned'];


                        
                // Moving Complaint Image to Closed_Complaint Folder
                rename($row['folder'], $destination);

                // Moving Resolved Image to Closed_Complaint Folder
                $folder2 = "../uploaded_images/resolved_complaint/". $complaint_id. ".png";
                

                rename($folder2, $destination2);


                $insert_query = "INSERT INTO `closed_complaints` (`username`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`,`resolved_image`, `time`, `resolved_time`,`last_updation`, `worker_assigned`, `rating`) VALUES ('$username', '$complaint_id', '$complaint_type', '$subject', '$description', '$folder', '$resolved_image','$time','$resolved_time', '$last_updation', '$worker_assigned', '$rating')";

                $insert_result = mysqli_query($conn, $insert_query);

                if ($insert_result) {
                    
                    // Delete complaint from complaints table
                    $delete_query = "DELETE FROM complaints WHERE complaint_id = '$complaint_id'";
                    $delete_result = mysqli_query($conn, $delete_query);

                    // Delete complaint from worker_action table
                    $delete_query2 = "DELETE FROM worker_action WHERE complaint_id = '$complaint_id'";
                    $delete_result2 = mysqli_query($conn, $delete_query2);

                    if ($delete_result && $delete_query2) {
                        // echo '<script>';
                        // echo 'ConfirmationAlert("Done","Complaint closed successfully!","../php/dashboard.php")';
                        // echo '</script>';
                        if($conn->error){
                            echo $conn->error;
                        }else{
                            echo '<script>';
                            echo 'ConfirmationAlert("Done","Complaint closed successfully!","../php/dashboard.php")';
                            echo '</script>';
                        }
                        
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
