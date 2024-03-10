<?php

include 'config.php';
session_start();

if (isset($_GET['satisfied'])) {
    $rating = $_GET['rating'] ;
    $complaint_id = $_GET['id'] ;

    if ($rating !== null && $complaint_id !== null) {
        $query = "SELECT * FROM complaint WHERE complaint_id = $complaint_id";
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

                $insert_query = "INSERT INTO `closed_complaint` (`username`, `complaint_id`, `complaint_type`, `subject`, `description`, `folder`, `time`, `resolved_time`, `last_updation`, `worker_assigned`, `rating`) VALUES ('$username', '$complaint_id', '$complaint_type', '$subject', '$description', '$folder', '$resolved_time', '$last_updation', '$worker_assigned', '$rating')";
                $insert_result = mysqli_query($conn, $insert_query);

                if ($insert_result) {
                    $delete_query = "DELETE FROM complaints WHERE complaint_id = '$complaint_id'";
                    $delete_result = mysqli_query($conn, $delete_query);

                    if ($delete_result) {
                        echo "Complaint closed successfully!";
                    } else {
                        echo "Failed to delete complaint: " . $conn->error;
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
