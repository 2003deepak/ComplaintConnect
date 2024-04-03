<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>

</head>

<body>
    

<?php
include 'config.php';

if (isset($_GET['id']) && isset($_GET['action'])) {
    $complaint_id = $_GET['id'];
    if ($_GET['action'] == 'approve') {
        $sql = "UPDATE complaints SET isApproved = 1 WHERE complaint_id = '$complaint_id'";
        if ($conn->query($sql) === TRUE) {
            echo '<script>';
            echo 'ConfirmationAlert("Approved","Complaint is Approved","../php/adminpanel.php")';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'FailedAlert("Failed","Complaint not Approved","../php/adminpanel.php")';
            echo '</script>';
        }
    } elseif ($_GET['action'] == 'disapprove') {


        $sql = "delete from complaints WHERE complaint_id = '$complaint_id'";

        $id_search = "select * from complaints where complaint_id = '$complaint_id' ";
        $query = mysqli_query($conn, $id_search);
        $id_count = mysqli_num_rows($query);
        if ($id_count) {

            $details = mysqli_fetch_assoc($query);
            $username = $details['username'];

        }

        $email_search = "select * from register where username = '$username' ";
        $query2 = mysqli_query($conn, $email_search);
        $id_count2 = mysqli_num_rows($query2);
        if ($id_count2) {

            $details2 = mysqli_fetch_assoc($query2);
            $email = $details2['email'];

        }



        if ($conn->query($sql) === TRUE) {
            include("mail.php");
            $emailContent = "
                        <html>
                        <body>
                            <p>Dear User</p>
                            <p>We regret to inform you that your complaint with ID $complaint_id has been disapproved by the administrator. After careful review, it was determined that the complaint does not meet the criteria for approval. We understand this may be disappointing, and we encourage you to reach out if you have any further questions or concerns regarding this decision.</p>
                            <p>Thank you for your understanding.</p>
                            <p>Best regards,<br>[Your Name]<br>[Your Position]<br>[Your Contact Information]</p>
                        </body>
                        </html>
                        ";
            if (smtp_mailer($email, 'Your Complaint Rejection Notification', $emailContent, "User is Notified", "User Not Notified")) {
                echo '<script>';
                echo 'ConfirmationAlert("Done","User is Notified","../php/adminpanel.php")';
                echo '</script>';
            } else {
                echo '<script>';
                echo 'FailedAlert("Failed","User is not notified","../php/adminpanel.php")';
                echo '</script>';
            }
        } else {
            echo '<script>';
            echo 'FailedAlert("Failed","Complaint not Disapproved","../php/adminpanel.php")';
            echo '</script>';
        }
    }
}

$conn->close();
?>


</body>