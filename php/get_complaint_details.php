<?php
include 'config.php';

if (isset($_POST['complaintId'])) {
    $complaintId = $_POST['complaintId'];

    // Fetch details based on the complaint ID
    $sql = "SELECT * FROM complaints WHERE complaint_id = '$complaintId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display the image if the 'folder' column is not empty
        echo "
            <div class='imgComplaint'>
                <img src='" . $row['folder'] . "' alt='complaint'>
            </div>
            <div class='complaintDetails'>
                <div class='cInfo'>
                    <div class='cDetails'>
                        <div class='cHeading'>
                            <p>Details</p>
                        </div>
                        <p>Complaint ID: " . $row['complaint_id'] . "</p>
                        <p>Complaint Type: " . $row['complaint_type'] . "</p>
                        <p>Subject: " . $row['subject'] . "</p>
                        <p>Date: " . $row['time'] . "</p>
                    </div>
                </div>
                <div class='description'>
                    <div class='desc-data'>
                        <p>" . $row["description"]. "</p>
                    </div>
                </div>
                <div class='cBtn'>
                    <button><a href='../php/ComplaintInfo.php?id=" . $row['complaint_id'] . "'>View Complaint</a></button>
                </div>
            </div>
        ";
    }
}
?>
