<?php
session_start();
include 'config.php' ; 
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>


    <!-- Poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- Biryani  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    

   
    <style>


:root {
    --background-color: #242424; 
    --nav-background-color : #161717; 
    --icon-color:#8C8C8C;
    --preview-background-color:#161717;
    --heading-color:white ; 
    --font-color:white;
    --boxes-bg-color:#161717;
    --box-count-color: #242424;
    

   
}

.light-mode {
    --background-color: #E3E3EA;
    --nav-background-color: #FFFFFF;
    --icon-color:#000000;
    --preview-background-color:#FFFFFF;
    --heading-color:black;
    --font-color:black;
    --boxes-bg-color:white;
    --box-count-color:#E3E3EA;
    
    
    
  }
        * {
            margin: 0;
            padding: 0;
            box-sizing: content-box;
        }
        body{
            
            display: flex;
            
        }

        .nav {
            width: 80px;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: var(--nav-background-color);
            transition: 0.3s;
        }

        

        .nav:hover {
            width: 250px;
        }
        .nav:hover ~ .content {
            margin-left: 250px;
        }
        

        .content {
            width: calc(100vw - 30vw );
            background-color: var(--background-color);
            min-height: 100vh; /* Minimum height of 100vh */
            height: auto; /* Allow the height to adjust based on content */
            display: flex;
            margin-left: 80px; /* Initial margin-left to match the nav width */
            transition: margin-left 0.3s; /* Add transition for a smooth effect */
        }

        .preview{
                width: 30vw;
                position: fixed;
                height: 100vh;
                right: 0rem;
                background-color: var(--preview-background-color);
        }

       

        .nav:hover .icon {
            margin-left: 5rem;
        }

        .nav i{
            font-size: 20px;
            color: #8C8C8C;
        }



            .nav .icon{
            width: 60px;
            height: 60px;
            position: absolute;
            top: 20px;
            margin: 1vw 0vw 0vw 0.4vw;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--font-color);
            font-weight: 800;
            font-family: 'Biryani', sans-serif;
            background-color: #FF9F00;

            
            }
            .nav .icon p{
                margin-top: 5px;
                font-size: 28px;
                
            }

            .bars{
                margin: 0.7vw 0vw 0vw 1.4vw;
                visibility: hidden;
            }

            .nav a{
                text-decoration: none;
                color: #8C8C8C;
                font-size: 20px;
                visibility: hidden;
                font-family: 'Biryani', sans-serif;
                margin-top: 0.6rem;
                

            }

            .nav-content{
                
                display: flex;
                flex-direction: column;
                overflow: hidden;
                gap: 1rem;
                position: relative;
                top: 10rem;
                
            }

            .nav-content-down{
                
                display: flex;
                flex-direction: column;
                gap: 1rem;
                position: relative;
                overflow: hidden;
                bottom: 2rem;
            }
            
            .nav-content div {
                width: 250px;
                padding-left: 25px;
                display: flex;
                gap: 1rem;
                margin-left: 0.3rem;
                justify-content: flex-start;
                align-items: center;
                border-radius: 10px 0px 0px 10px;
            }

            .nav-content-down div {
                width: 250px;
                display: flex;
                margin-left: 0.3rem;
                gap: 1rem;
                justify-content: flex-start;
                align-items: center;
                height: 53px;
                padding-left: 25px;
                border-radius: 10px 0px 0px 10px;
            }
            

            .nav:hover .nav-content a , .nav:hover .nav-content-down a {
                visibility: visible;
                transition: 0.2s;
            
            }

            .nav-content div:hover , .nav-content-down div:hover{
                background-color: black;
                
            }

            .nav-content div:hover a, .nav-content-down div:hover a, .nav-content div:hover i, .nav-content-down div:hover i {
                    color: white;
            }


            
            .org-content{
                padding: 1rem 1rem 1rem 3rem;
                font-family: 'Poppins', sans-serif;
                width: 100%;
                
            }

            .inner{
                
                color: var(--heading-color);
                
            }
            .inner h1{
               font-size: 40px;
               font-weight: bolder;

               
            }
            .boxes{
                display: flex;
                gap: 1rem;
                flex-wrap: wrap;
                color: var(--font-color);
                margin-top: 1.5rem;
                font-size: 19px;
            }
            .boxes .box11{
                width: 15.5vw;
                height: 150px;
                background-color: var(--boxes-bg-color);
                padding: 1rem;
                display: flex;
                flex-direction: column;
                border-radius: 10px;
                border-top: 10px solid #FF5858;
            }

            .boxes .box13{
                width: 15.5vw;
                height: 150px;
                display: flex;
                flex-direction: column;
                background-color: var(--boxes-bg-color);
                padding: 1rem;
                border-radius: 10px;
                border-top: 10px solid #05FF00;
            }

            .boxes .count{
                width: 40%;
                height: 81px;
                align-self: center;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
                border-radius: 5px;
                background-color: var(--box-count-color);
            }

            .boxes .box12{
                width: 15.5vw;
                height: 150px;
                display: flex;
                flex-direction: column;
                background-color: var(--boxes-bg-color);
                padding: 1rem;
                border-radius: 10px;

                border-top: 10px solid #FF9F00;
            }

            .line{
                background-color: var(--boxes-bg-color);
                width: 79%;
                margin-top: 1.2rem;
                margin-bottom: 1.2rem;
                height: 10px;
            }

            .complaints{
                width: 90%;
                height: 50px;
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                
            }
            .complaints p{
                color:  var(--text-boxes-color);
            }

            .complaints .box21{
                width: 295px;
                height: 30px;
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 1rem;
                
                border-radius: 10px;
                color: var(--font-color);

                
            }
            .complaints .box22{
                width: 295px;
                height: 30px;
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 1rem;
               
                border-radius: 10px;
                color: var(--font-color);
                
            }
            .complaints .box23{
                width: 295px;
                height: 30px;
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 1rem;
                border-radius: 10px;
                color: var(--font-color);

                
            }

            .phpreply{
                
                display: flex;
                gap: 1rem;
                flex-wrap: wrap;
                color: var(--font-color);
                margin-top: 1.5rem;
                font-size: 19px;
            
        }

        .pendingComplaints , .newComplaints , .completedComplaints{
            width:295px ; 
            height: 100vh ; 
            display: flex;
           
            flex-direction: column;
        }

        .phpreply .box4{
            width: 295px;
            height: 8vw;
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            padding: 1rem;
            margin-bottom : 1rem;
            background-color: var(--boxes-bg-color);
            border-radius: 10px;
            color: var(--font-color);

            
        }

           

           

            @media (max-width:600px) {
                .content{
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                .preview{
                    display: none ;
                }

                .bars{
                    margin: 1.5vw 0vw 0vw 4vw;
                    visibility: visible;
                }
                .nav a{
                    font-size: 3vw;
                }
                .nav .icon{
                    width: 60px;
                    height: 60px;
                    position: absolute;
                    margin: 8vw 0vw 0vw 1.4vw;
                    background-color: white;

            
                }
                .nav i{
                    font-size: 1.2rem;
                    
                }
                
            }







      

    </style>

    
     
   </head>
<body>
    
<div class="nav">





<div class="icon">

    <?php

   
        $u = $_SESSION["username"];
        $capitalizedu = ucfirst($u[0]);




    ?>
     <p><?php echo $capitalizedu ;?></p>   <!--Replace it with first letter of Username of user  -->
</div>

<div class="nav-content">

    <div>
        <i class="fa-solid fa-house"></i>
        <a href="../php/cAdminPanel.php">Home</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="../php/cPendingComplaints.php">Pending </a>
    </div>
    <div>
        <i class="fa-solid fa-house"></i>
        <a href="../php/cCompletedComplaints.php">Completed </a>
    </div>
    
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="#">Profile</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="addworkers.php">Add Workers</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="manageWorker.php">Manage Workers</a>
    </div>
    

</div>
<div class="nav-content-down">

    <div onclick="toggle()" >
        <i class="fa-solid fa-moon" ></i>
        <a href="#" class="dark">Light Mode</a>
    </div>
    <div>
        <i class="fa-solid fa-house"></i>
        <a href="../php/logout.php">Log Out</a>
    </div>
    

</div>
</div>


<?php


$completed = "SELECT COUNT(complaint_id) AS completed_count FROM complaints WHERE resolved_time IS NOT NULL";
$inProgess = "SELECT COUNT(complaint_id) AS in_progress_count FROM complaints WHERE resolved_time IS NULL AND last_updation IS NOT NULL";
$newRequest = "SELECT COUNT(complaint_id) AS new_request_count FROM complaints WHERE resolved_time IS NULL AND last_updation IS NULL;";

$resultCompleted = $conn->query($completed);
$resultInProgress = $conn->query($inProgess);
$resultNewRequest = $conn->query($newRequest);

// Fetch the count values
$completedCount = ($resultCompleted) ? $resultCompleted->fetch_assoc()['completed_count'] : 0;
$inProgressCount = ($resultInProgress) ? $resultInProgress->fetch_assoc()['in_progress_count'] : 0;
$newRequestCount = ($resultNewRequest) ? $resultNewRequest->fetch_assoc()['new_request_count'] : 0;





    
?>





<div class="content">

<div class="org-content">

            <div class="inner">
                <h1>Contractor </h1>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="boxes">
                <div class="box11">
                    <p>New Request</p>
                        <div class="count">
                           <p style="color: #FF5858; font-size: 40px;"><?php echo $newRequestCount ; ?></p>
                        </div>

                </div>
                <div class="box12">
                    <p>In Progress</p>
                        <div class="count">
                            <p style="color: #FF9F00; font-size: 40px;"><?php echo $inProgressCount ; ?></p>
                        </div>
                    
                </div>
                <div class="box13">
                    <p>Completed</p>
                        <div class="count">
                           <p style="color: #05FF00; font-size: 40px;"><?php echo $completedCount ; ?></p>
                        </div>
                    
                </div>
            </div>

            <div class="line"></div>

            

            <div class="complaints">

                <div class="box21">

                    <div style="width: 11px; height: 11px; border-radius: 50%; background-color: #FF5858;"></div>

                    <p style=" font-size: 19px; ">New Request</p>
                    

                </div>
                <div class="box22">
                    <div style="width: 11px; height: 11px; border-radius: 50%; background-color: #F4DD0E;"></div>
                    <p style=" font-size: 19px;">In Progress</p>
                    
                    
                </div>
                <div class="box23">
                    <div style="width: 11px; height: 11px; border-radius: 50%; background-color: #05FF00;"></div>
                    <p style=" font-size: 19px;">Completed</p>
                    
                    
                </div>
                


            </div>

            <div class="phpreply">

                <div class="newComplaint">
                    
                    <?php
                        include 'config.php';

                        
                            $username = $_SESSION['username'];

                            $sql = "SELECT * FROM complaints WHERE last_updation IS NULL and resolved_time IS NULL";
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



                <div class= "pendingComplaints">

                <?php


                    include 'config.php';

                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM complaints WHERE last_updation IS NOT NULL and resolved_time IS NULL ";
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


                <div class= "completedComplaints">


                    <?php
                            include 'config.php';

                            
                                $username = $_SESSION['username'];

                                $sql = "SELECT * FROM complaints WHERE resolved_time IS NOT NULL AND resolved_time IS NOT NULL";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <div class="box4" style = "margin-left : 2rem ; ">
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

                

                
            </div>





</div>







    



    

    



<div class="preview">

<p>Hellow</p>

</div>


<script>
let count = 0 ; 
const toggle = () =>{


    var a = document.querySelector(".dark");


    if(count == 0){
        document.body.classList.add("light-mode");
        a.innerHTML="Dark Mode";
        count = 1 ;

    }else{
        document.body.classList.remove("light-mode");
        a.innerHTML="Light Mode";
        count = 0 ; 
    }
    
    
}
</script>



  
      
  
</body>
</html>
