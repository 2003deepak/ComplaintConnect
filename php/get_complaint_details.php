<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
        <div class='details'>
            <p id='heading'>Complaint Details</p>
            <div class='details_btn'>
                <button id='complete'>Complete</button>
                <button id='raise'>Raise Ticket</button>
            </div>
        </div>

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
                    <p>Subject:  ". $row['subject'] ." </p>
                    <p>Date: " . $row['time'] . "</p>
                </div>
            </div>
            <div class='description'>
                <div class='desc-data'>
                    <p>" . $row["description"]. "</p>
                </div>
            </div>

            <button id = 'view'>View Complaint</button>
        </div>
    ";
    }
}
?>

</body>
</html>
