<?php
include 'config.php';

if (isset($_POST['complaintId'])) {
    $complaintId = $_POST['complaintId'];

    // Fetch details based on the complaint ID
    $sql = "SELECT * FROM complaints WHERE complaint_id = '$complaintId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Output the details as desired

        echo "<p>Complaint ID: " . $row['complaint_id'] . "</p>";
        echo "<p>Complaint Type: " . $row['complaint_type'] . "</p>";
        echo "<p>Subject: " . $row['subject'] . "</p>";

        // Display the image if the 'photo' column is not empty
        if (!empty($row['folder'])) {
            echo "<p>Photo: <img src='".$row['folder']."' alt='Complaint Photo'></p>";
        }

        echo "<p>Date: " . $row['time'] . "</p>";
        echo "<p>Worker Assigned: " . $row['worker_assigned'] . "</p>";
        // Add more details as needed
    }
}
?>
