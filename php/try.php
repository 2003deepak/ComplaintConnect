<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div class="pendingComplaints">
        <?php
        include 'config.php';

        $username = "deepak123";
        $sql = "SELECT * FROM complaints WHERE username = '$username' AND last_updation IS NOT NULL and resolved_time IS NULL ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="box4">
                    <p>Complaint ID: <?php echo $row["complaint_id"]; ?> </p>
                    <p>Complaint Type: <?php echo $row["complaint_type"]; ?> </p>
                    <p>Subject: <?php echo $row["subject"]; ?> </p>
                    <button class="view-details" data-complaint-id="<?php echo $row["complaint_id"]; ?>">View Full Details</button>
                    <br>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="details">
        <h1>Hello World</h1>
    </div>

    <script>
        $(document).ready(function () {
            // Attach click event to the "View Full Details" button
            $('.view-details').click(function () {
                // Get the complaint ID from the data attribute
                var complaintId = $(this).data('complaint-id');

                // AJAX request to fetch details
                $.ajax({
                    type: 'POST',
                    url: 'get_complaint_details.php', // Create a separate PHP file to handle this request
                    data: { complaintId: complaintId },
                    success: function (response) {
                        // Display details in the "details" div
                        $('.details').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
