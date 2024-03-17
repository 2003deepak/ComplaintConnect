<?php

include 'config.php';


// Get the current time
$current_time = time();

// Calculate the timestamp for 7 days ago
$seven_days_ago = strtotime('-7 days');

// Query for complaints resolved more than 1 minute ago and older than 7 days
$query = "SELECT * FROM complaints WHERE resolved_time IS NOT NULL AND TIMESTAMPDIFF(MINUTE, resolved_time, NOW()) > 1 AND resolved_time <= '$seven_days_ago'";
$result = $conn->query($query);



if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Close the complaint with a default rating of 5
        $complaint_id = $row['complaint_id'];
        $rating = 5; // Default rating
        closeComplaint($complaint_id, $rating);
       
    }
    
} 
// Function to close the complaint
function closeComplaint($complaint_id, $rating) {
    global $conn;

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

                    $delete_query2 = "DELETE FROM worker_id WHERE complaint_id = '$complaint_id'";
                    $delete_result2 = mysqli_query($conn, $delete_query2);
    
                    if ($delete_result && $delete_result2) {
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
    
    
}

?>
