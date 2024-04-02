<?php
session_start();
include 'config.php' ; 
include 'authsession.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
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


            echo "
            <div class='details'>
            <p id='heading'>Complaint Details</p>
            <div class='details_btn'>" ;

            if ($row['resolved_time'] == NULL && $row['last_updation'] == NULL) {
                echo "<button id='complete' style='background-color: #eb1010'>New Request</button>";
            } elseif ($row['resolved_time'] == NULL && $row['last_updation'] != NULL) {
                echo "<button id='complete' style='background-color: #f5f242'>Pending</button>";
            } elseif ($row['resolved_time'] != NULL && $row['last_updation'] != NULL) {
                echo "<button id='complete' style='background-color: #4ef542'>Completed</button>";
            }

            if($_SESSION['user_type'] == 'user'){

                if ($row['resolved_time'] != NULL && $row['last_updation'] != NULL){

                    echo "<button id='raise' onclick='redirectToCloseComplaint()'>Close Complaint</button>";
                    
                }


            }
            


    
        echo "

        
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
                    <div class='values'>
                        <ul>
                            <li> Complaint ID : </li>
                            <li> Complaint Type :</li>
                            <li> Subject : </li>
                            <li> Date : </li>
                        </ul>
                        <ul>
                            <li>" . $row['complaint_id'] . "</li>
                            <li>" . $row['complaint_type'] . "</li>
                            <li>" . $row['subject'] . "</li>
                            <li>" . date("d-m-Y", strtotime($row['time'])) . "</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class='description'>
                <div class='desc-data'>
                    <p>" . $row["description"] . "</p>
                </div>
            </div>

            <div class='btn'>
            <button id='view' onclick='redirectToComplaintInfo()'>View Complaint</button>



            </div>

            
        </div>";
    }
}
?>

<script>
    function redirectToComplaintInfo() {
        window.location.href = '../php/ComplaintInfo.php?id=<?php echo $row['complaint_id'] ?>';
    }
    function redirectToCloseComplaint(){
        window.location.href = '../php/closeComplaint.php?id=<?php echo $row['complaint_id'] ?>'; // Update this with the correct path
    }
</script>



</body>
</html>