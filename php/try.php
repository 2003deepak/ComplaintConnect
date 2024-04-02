<?php 

include 'C:\xampp\htdocs\ComplaintConnect\php\config.php' ;
session_start();
include 'authsession.php';
require('../vendor/autoload.php');

// Check if the action parameter is set for generating and downloading the PDF
if (isset($_GET['action']) && $_GET['action'] === 'generate_pdf') {
    // Generate PDF content
    ob_start(); // Start output buffering
    ?>



<table class="table bg-transparent text-white ">
            <thead class="bg-transparent">
              <tr>
                <th>Complaint ID</th>
                <th>Complaint Type</th>
                <th>Subject</th>
                <th>Worker Assigned</th>
                <th>View Details</th>
              </tr>
            </thead>
            <tbody>

            <?php

                include 'config.php' ;
                $sql = "SELECT * FROM complaints WHERE resolved_time IS NOT NULL AND resolved_time IS NOT NULL and isApproved = 1 ";
                $result = $conn->query($sql);
                
                // Loop through the result set and generate table rows
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                        ?>
              <tr>
                <td class=" col-3">
                  
                    <div class="ms-3 d-flex ml-3 ">
                      <p class="fw-bold mb-1" style="color: #E6E6E6;"><?php echo $row["complaint_id"] ?></p>
                      
                    </div>
                  </div>
                </td>
                <td class="col-2">
                  <p class="fw-normal mb-1 ml-0" style="color: #E6E6E6;" ><?php echo $row["complaint_type"] ?></p>
                  
                </td>
                <td class=" col-2 "><?php echo $row["subject"] ?></td>
                <td class=" col-2 "><?php echo $row["worker_assigned"] ?></td>
                <!-- <td class=" col-3">
                    <button type="button" > <a class = "accept" style = "color : black ; text-decoration : none ; cursor:pointer;" href="../php/assignWorker.php?id=<?php echo $row['complaint_id']; ?>"> View Details</a>  </button>
                  
                </td> -->
                <td class=" col-2 "><a type="button" class="btn btn-primary" style = "background:#FF9F00 ; border:none; color:black;" href="../php/assignWorker.php?id=<?php echo $row['complaint_id']; ?>">View Details</a></td>

              </tr>

              <?php
                        
                    }
                }else {
                    echo "<td colspan='4'>No complaints found.</td>";
                }

                // Close the connection
                $conn->close();
            ?>
             </tbody>
          </table>


<?php


   
              
            } // Close the if block for generating and downloading PDF
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Complaints</title>
    <!-- bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table bg-transparent text-white ">
<thead class="bg-transparent">
  <tr>
    <th>Complaint ID</th>
    <th>Complaint Type</th>
    <th>Subject</th>
    <th>Worker Assigned</th>
    <th>View Details</th>
  </tr>
</thead>
<tbody>

<?php

    include 'config.php' ;
    $sql = "SELECT * FROM complaints WHERE resolved_time IS  NULL ";
    $result = $conn->query($sql);
    
    // Loop through the result set and generate table rows
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {


            ?>
  <tr>
    <td class=" col-3">
      
        <div class="ms-3 d-flex ml-3 ">
          <p class="fw-bold mb-1" style="color: #E6E6E6;"><?php echo $row["complaint_id"] ?></p>
          
        </div>
      </div>
    </td>
    <td class="col-2">
      <p class="fw-normal mb-1 ml-0" style="color: #E6E6E6;" ><?php echo $row["complaint_type"] ?></p>
      
    </td>
    <td class=" col-2 "><?php echo $row["subject"] ?></td>
    <td class=" col-2 "><?php echo $row["worker_assigned"] ?></td>
    <!-- <td class=" col-3">
        <button type="button" > <a class = "accept" style = "color : black ; text-decoration : none ; cursor:pointer;" href="../php/assignWorker.php?id=<?php echo $row['complaint_id']; ?>"> View Details</a>  </button>
      
    </td> -->
    <td class=" col-2 "><a type="button" class="btn btn-primary" style = "background:#FF9F00 ; border:none; color:black;" href="../php/assignWorker.php?id=<?php echo $row['complaint_id']; ?>">View Details</a></td>

  </tr>

  <?php
            
        }
    }else {
        echo "<td colspan='4'>No complaints found.</td>";
    }

    // Close the connection
    $conn->close();
?>


  
</tbody>
</table>

    <a href="?action=generate_pdf" class="btn btn-primary">Download PDF</a>
</body>
</html>
