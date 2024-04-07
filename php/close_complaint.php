

<?php
include 'C:\xampp\htdocs\ComplaintConnect\php\config.php';
session_start();
include 'authsession.php';

if (isset($_POST['save'])) {
    $complaint_id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';

    $folder = "../resolved_complaint";
    $filename = $complaint_id . ".png"; // Use $complaint_id here instead of $_GET['id']
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "../uploaded_images/resolved_complaint/" . $filename;

    move_uploaded_file($tempname, $folder);

    $sql1 = "UPDATE worker_action SET complete = 1  WHERE complaint_id = '$complaint_id'";
    $query1 = mysqli_query($conn, $sql1);

    $sql2 = "UPDATE complaints SET `resolved_time` = NOW() , resolved_image = '$folder' WHERE `complaint_id` = '$complaint_id'";
    $query2 = mysqli_query($conn, $sql2);

    // $sql3 = "delete from worker_action where `complaint_id` = '$complaint_id'";
    // $query3 = mysqli_query($conn, $sql3);

    if ($query1 && $query2) {
        echo '<script>alert("Complaint is successfully closed")</script>';
         echo "<script> location.replace('../php/Wdashboard.php')</script>";
    } else {
        echo '<script>alert("Complaint Closing Failed")</script>';
        echo "<script> location.replace('../php/takeAction.php')</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <title>Document</title>

    <!-- Poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- Biryani  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
            width: 260px;
        }
        .nav:hover + .content {
            margin-left: 260px;
        }
        

        .content {
            width: calc(100vw - 30vw );
            background-color: var(--background-color);
            height: 100vh;
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
            font-size: 22px;
            color: #8C8C8C;
            justify-content: center;
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
                width: 280px;
                padding-left: 25px;
                display: flex;
                gap: 1rem;
                margin-left: 0.3rem;
                justify-content: flex-start;
                align-items: center;
                height : 53px ; 
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
                background-color: #FF9F00;
                
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
                        height: 6vw;
                        display: flex;
                        flex-direction: row;
                        padding: 0.4rem;
                        margin-bottom : 1rem;
                        background-color: var(--boxes-bg-color);
                        /* background-color: linear-gradient(180deg, var(--boxes-bg-color)); */
                        border-radius: 10px;
                        color: var(--font-color);
            
            


            
        }

        .box4 .left{
            width: 5%;
            height: 100%;
            padding-left: 0.2rem;

        }
        
        .box4 .middle{
            width: 80%;
            height: 100%;
            font-size: 16px;
            padding-top: 0.4rem;
            padding-left: 0.2rem;
            display:flex ; 
            flex-direction: column;
            gap:0.4rem;
            font-family: 'Poppins', sans-serif;

        }
        .box4 .view-details{
            width: 10%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;

        }

        .blank-area{
            width: 295px;
            height: 8vw;
            margin-left:35px;
        }


        /* Css for preview panel  */

        .preview{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            margin-left: 4vw ; 
            background-image: url("/images/rectangle.png");
            
            
           
            
        }

        .cDetails{
            display:flex ; 
            flex-direction : column ; 
            align-items : center ;
            gap: 1.1rem ; 
            color : white;
            font-family: 'Poppins', sans-serif;
        }
        .values{
            display:flex ; 
            /* flex-direction : column ;  */
            gap: 8.3rem ; 
            
            color : white;
            font-family: 'Poppins', sans-serif;
        }
        ul{
            list-style-type: none;
            display:flex ;
            flex-direction: column;
            gap: 1.1rem ;
        }

        .details{
            display : flex ; 
            flex-direction: column;
            margin-left: -15rem ; 
            
            gap: 15px;
        }

        .details_btn{
            display: flex;
            gap: 1.5rem;
        }

        #complete{
            
            height: 29px;
            width: 107px;
            font-size: 13px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            border:none;
            border-radius: 5px;
        }
        #raise{
            background-color: #DCDEDB;
            height: 29px;
            width: 107px;
            font-size: 13px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            border:none;
            border-radius: 5px;
        }

        .desc-data{
            background-color: #afafaf47;
            width: 28rem;
            height: 100px;
            display: flex ; 
            justify-content: start ; 
            border-radius: 3px;
            padding: 1rem ; 
            color: #FFFFFF;
        }

        .imgComplaint img {
            width: 25rem;
            height: auto;
            border-radius: 3px;
        }

        #heading{
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color : #DCDEDB ; 
            margin-top: 1.5vw ;
        }

        #view{
            width: 175px;
            height: 50px;
            background-color: #000000;
            font-size: 15px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            border:none;
            border-radius: 5px;
            color: white;
        }

        .complaintDetails{
            display:flex ; 
            flex-direction: column;
            gap:2rem ; 
        }

        .btn{
            display: flex;
            justify-content : center ; 
            align-item : center
            gap: 1.5rem;
        }
        .phpreply .box4:hover {
                animation: none !important;
        } 

        @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
        

            
           
           


             @media (max-width:768px) {
                .content{
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                
                .box11{
                    margin-left: 5rem;
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
                <a href="../php/Wdashboard.php">Home</a>
            </div>
            <div>
                <i class="fa-solid fa-user" ></i>
                <a href="../php/profileWorker.php">Profile</a>
            </div>
            <div>
                <i class="fa-solid fa-key"></i>
                <a href="../php/updateCurrentPassword.php">Update Password</a>
            </div>
            <div>
                <i class="fa-solid fa-house"></i>
                <a href="../php/WnewComplaints.php">New Complaints</a>
            </div>
            <div>
                <i class="fa-solid fa-clock"></i>
                <a href="../php/WpendingComplaints.php">Pending Complaints</a>
            </div>
            <div>
                <i class="fa-solid fa-key"></i>
                <a href="closedComplaint.php">Closed Complaints</a>
            </div>
            
            

        </div>
        <div class="nav-content-down">

            <div onclick="toggle()" >
                <i class="fa-solid fa-moon" ></i>
                <a href="#" class="dark">Light Mode</a>
            </div>
            <div>
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="../php/logout.php">Log Out</a>
            </div>
            

        </div>
    </div>



<!-- It is used to display the count of new request and pending as well as completed requests -->

<?php


$newRequest = "SELECT COUNT(complaint_id) AS new_request_count  FROM worker_action WHERE worker_assigned = '{$_SESSION['username']}' AND actionTaken = 0";
$inProgress = "SELECT COUNT(complaint_id) AS in_progress_count FROM worker_action WHERE worker_assigned = '{$_SESSION['username']}' AND actionTaken = 1 AND complete IS NULL";
$completed = "SELECT COUNT(complaint_id) AS completed_count FROM worker_action WHERE worker_assigned = '{$_SESSION['username']}' AND actionTaken = 1 AND complete IS NOT NULL";

$resultCompleted = $conn->query($completed);
$resultInProgress = $conn->query($inProgress);
$resultNewRequest = $conn->query($newRequest);

// Fetch the count values
$completedCount = ($resultCompleted) ? $resultCompleted->fetch_assoc()['completed_count'] : 0;
$inProgressCount = ($resultInProgress) ? $resultInProgress->fetch_assoc()['in_progress_count'] : 0;
$newRequestCount = ($resultNewRequest) ? $resultNewRequest->fetch_assoc()['new_request_count'] : 0;




    
?>


<style>
    form{
        font-size : 20 px ; 
        margin-left:5rem ; 
        font-family: 'Poppins', sans-serif;
        display:flex ;
        flex-direction : column ; 
        gap:1rem ; 
    }

    select{
        width : 70% ; 
        font-family: 'Poppins', sans-serif;
        font-size : 18px ; 

    }

     input[type="submit"]{
                        width: 157px;
                        height: 53px;
                        background-color: #FFB219;
                        font-size: 18px;
                        border: none;
                        color: var(--font-color);
                        font-weight: 600;
                        border-radius: 8px;
                        font-family: "DM Sans", sans-serif;
                    }

                    .otp{
                        display:flex ; 
                        flex-direction : column ; 
                        gap: 2rem ; 
                    }
</style>


    


    <div class="content">

            <form id="otpForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label for="action">Select Action:</label>

            <div>

            <select id="action" name="action">
                <option value="select">Select</option>
                <option value="complete">Close Complaint</option>
            </select>

            </div>
            

            <div id="otpContainer" style="display: none;" class="otp">
                <label for="otp">Upload Complaint Completion Image</label>
                <input type="file" id="otp" name="file" required>
                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                <input type="submit" id="submitOtp" name="save" value="Close Complaint">
            </div>
        </form>



        
                

                
            

            
        
    </div>


    <!-- Loading all complaints to display in preview mode -->

  



    <div class="preview">

        

        
        
    </div>

        
        
    </div>


    


    

    <!-- JS code starting from here  -->


    <script>
    
    const toggle = () => {
            let mode = 'dark';
            var a = document.querySelector(".dark");
            if (document.body.classList.contains('light-mode')) {
                document.body.classList.remove("light-mode");
                a.innerHTML = "Light Mode";
            } else {
                document.body.classList.add("light-mode");
                a.innerHTML = "Dark Mode";
                mode = 'light';
            }
            // Store the mode in session storage
            sessionStorage.setItem('mode', mode);
        }

    // Function to apply mode when page loads
    const applyMode = () => {
        let mode = sessionStorage.getItem('mode');
        if (mode === 'light') {
            document.body.classList.add("light-mode");
            document.querySelector(".dark").innerHTML = "Dark Mode";
        } else {
            document.body.classList.remove("light-mode");
            document.querySelector(".dark").innerHTML = "Light Mode";
        }
    }

    // Apply mode when page loads
    applyMode();


    // Used to fetch Complaint Details and display using AJAX 

    $(document).ready(function() {
    $('#action').change(function() {
        var selectedAction = $(this).val();
        if (selectedAction === 'complete') {
            $('#otpContainer').show();
        } else {
            $('#otpContainer').hide();
        }
    });
});
   
</script>

</body>
</html>
