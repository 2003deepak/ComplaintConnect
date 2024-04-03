
<?php 

include 'C:\xampp\htdocs\ComplaintConnect\php\config.php';
session_start();
include 'authsession.php';


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


    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Dm Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>

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
            width: calc(100vw - 0vw );
            background-color: var(--background-color);
            height: 100vh;
            display: flex;
            margin-left: 80px; /* Initial margin-left to match the nav width */
            transition: margin-left 0.3s; /* Add transition for a smooth effect */
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
                width: 295px;
                height: 150px;
                background-color: var(--boxes-bg-color);
                padding: 1rem;
                display: flex;
                flex-direction: column;
                border-radius: 10px;
                border-top: 10px solid #FF5858;
            }

            .boxes .box13{
                width: 295px;
                height: 150px;
                display: flex;
                flex-direction: column;
                background-color: var(--boxes-bg-color);
                padding: 1rem;
                border-radius: 10px;
                border-top: 10px solid #05FF00;
            }

            .boxes .count{
                width: 120px;
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
                width: 295px;
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
                height: 530px;
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                
            }
            .complaints p{
                color:  var(--text-boxes-color);
            }

            .complaints .box21{
                width: 295px;
                height: 400px;
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 1rem;
                background-color: var(--boxes-bg-color);
                border-radius: 10px;
                color: var(--font-color);

                
            }
            .complaints .box22{
                width: 295px;
                height: 400px;
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 1rem;
                background-color: var(--boxes-bg-color);
                border-radius: 10px;
                color: var(--font-color);
                
            }
            .complaints .box23{
                width: 295px;
                height: 400px;
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 1rem;
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

    <p>D</p>   <!--Replace it with first letter of Username of user  -->
</div>

<div class="nav-content">

    <div>
        <i class="fa-solid fa-house"></i>
        <a href="../php/dashboard.php">Home</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="../php/profile.php">Profile</a>
    </div>
    <div>
        <i class="fa-solid fa-house"></i>
        <a href="../php/filecomplaint.php">File Complaint</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="../php/complaintHistory.php">Complaint History</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="../php/updateCurrentPassword.php">Update Password</a>
    </div>
    <div>
        <i class="fa-solid fa-house" ></i>
        <a href="#">Close Complaint</a>
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






<div class="content">

    <style>
        .complaintInfo{
            width: 80%;
            height: 90%;
            /* background-color: pink; */
            margin-left: 5rem;
            display: flex;
            
        }
        .content{
            display: flex;
            align-items: center;
        }
        .left{
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            /* background-color: #05FF00; */
            gap: 3.2rem;
        }
        .left .top{
            width: 50%;
            height: 50px;
            display: flex;
            align-items: center;
            gap: 1rem;
           
        }
        .top .top-box{
            width: 7%;
            height : 100%;
            background-color: #FFB219;
            border-radius: 6px;
        }
        .top .top-text{
            font-size: 23px;
            color: #FFB219;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
        }
        .middle{
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
            font-family: 'Poppins', sans-serif;
        }
        .middle h2{
            color: var(--font-color);
            font-size: 20px;
            font-family: "DM Sans", sans-serif;
            
        }
        .middle h1{
            color: var(--font-color);
            font-size: 40px;
            font-family: "Inter", sans-serif;
        }
        .bottom{
            display: flex;
            flex-direction: column;
            gap: 3rem;
            
        }
        .bottom div{
            display: flex;
            align-items: center;
            gap: 1rem;

        }
        .bottom div img{
            width: 33px;
        }
        .bottom div h2{
            color: var(--font-color);
            font-size: 20px;
            font-family: "Inter", sans-serif;
        }
        .bottom div h2:nth-last-of-type(1){
            color: var(--font-color);
            font-size: 20px;
            font-weight: 400;
            align-self: center;
            font-family: "Inter", sans-serif;
        }


        
    </style>
    


            <div class="complaintInfo">

                <div class="left">

                    <div class="top">
                        <div class="top-box">

                        </div>
                        <div class="top-text">
                            <p>Complaint Information</p>
                        </div>
                        
                    </div>
                    <?php
                    include 'config.php' ;
                    $complaint_id = $_GET['id'];

                    $sql1 = "select complaint_id from complaints where complaint_id = '$complaint_id'";
                    $result1 = $conn->query($sql1);
                    if ($result1->num_rows === 0) {

                            $sql = "select * from closed_complaints where complaint_id = '$complaint_id'";
                    }else{
                        $sql = "select * from complaints where complaint_id = '$complaint_id'";
                    }
                    
                    $result = $conn->query($sql);
                    $count = 1 ;



                            // Loop through the result set and generate table rows
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {


                            $complaint_image = $row['folder'];

                    ?>

                    <div class="middle">
                        <h1>Complaint : <?php  echo $row["complaint_id"];?></h1>
                        <h2>The door of the emergency exit has .....</h2>
                        <div></div>
                    </div>

                    <div class="bottom">
                        
                            <div>
                                <img src="../images/icons8-history-90 1.svg" alt="">
                                <h2>Complaint Type : </h2>
                                <h2> <?php  echo $row["complaint_type"];?></h2>
                            </div>
                            <div>
                                <img src="../images/icons8-pen-100 1.svg" alt="">
                                <h2>Subject : </h2>
                                <h2> <?php  echo $row["subject"];?> </h2>
                            </div>
                            <div>
                                <img src="../images/icons8-date-96 1.svg" alt="" >
                                <h2>Registration Date : </h2>
                                <h2><?php  echo $row["time"];?></h2>
                            </div>
                            <div>
                                <img src="../images/icons8-history-90 1.svg" alt="">
                                <h2>Last Update : </h2>
                                <h2><?php  echo ($row["last_updation"]) ? date("d-m-Y", strtotime($row["last_updation"])) : "No Status"; ?></h2>
                            </div>
                            <div>
                                <img src="../images/icons8-tick-96 1.svg" alt="">
                                <h2>Resolved Date : </h2>
                                <h2> <?php   echo ($row["resolved_time"]) ? date("d-m-Y", strtotime($row["resolved_time"])) : "No Status";?></h2>
                            </div>
                            <div>
                                <img src="../images/icons8-worker-100 1.svg" alt="">
                                <h2>Worker Assigned : </h2>

                                <style>

                                    select{
                                                width:252px;
                                                height : 50px;
                                                padding-left : 10px ; 
                                                border:2px soild black ; 
                                                border-radius : 8px ; 
                                                font-family: "DM Sans", sans-serif;
                                                font-size:20px;
                                                color:#6F6C90;
                                            }

                                            input[type="submit"]{
                                                width: 200px;
                                                height: 50px;
                                                background-color: #FFB219;
                                                border: none ;
                                                font-size: 18px;
                                                font-weight: 600;
                                                border-radius: 10px;
                                                cursor: pointer;
                                                position:relative;
                                                bottom:-170px;
                                                left : -300px ; 


                                            }
                                </style>

                                <form action="<?php echo $_SERVER['PHP_SELF']. '?id=' . $complaint_id ;  ?>" method="post">
                                    <select name="worker_assigned" id="worker_assigned">
                                        <?php

                                        $complaint_id = $_GET['id'];
                                        $complaint_type = $row["complaint_type"];
                                        $sql2 = "select * from worker where work_area = '$complaint_type'";
                                        $result2 = $conn->query($sql2);
                                        
                                        if ($result2->num_rows > 0) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $row2["username"]; ?>"><?php echo $row2["username"]; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <!-- Add a submit button here if needed -->
                                    <input type="submit" name = "save" >
                                </form>


                                <h2></h2>
                            </div>
                            <div>
                                <img src="../images/icons8-writing-90 1.svg" alt="">
                                <h2>Description :  </h2>
                                <h2><?php  echo $row["description"];?></h2>
                            </div>
                            
                        
                    </div>

                </div>

                <style>
                    .right{
                        display: flex;
                        flex-direction: column;
                        width: 50%;
                        height: 100%;
                        gap: 1.5rem;
                        color: var(--font-color);
                        
                    }
                    
                    .right .img{
                        width: 100%;
                        height: 85%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                    .right .img img{
                        
                        width: 400px;
                    }
                    .right .btn{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        gap: 1rem;
                    }
                    .right .btn button{
                        width: 200px;
                        height: 50px;
                        background-color: #FFB219;
                        border: none ;
                        font-size: 18px;
                        font-weight: 600;
                        border-radius: 10px;
                        cursor: pointer;

                    }

                </style>

                <?php
                    include 'config.php';
                    $complaint_id = $_GET['id'];
                    $sql1 = "select * from complaints where complaint_id = '$complaint_id'";
                    $result1 = $conn->query($sql1);
                   

                    // Loop through the result set and generate table rows
                    if ($result1->num_rows > 0) {
                        while ($row1 = $result1->fetch_assoc()) {
                            if(!is_null($row1['resolved_image'])){
                                $final_image = $row1['resolved_image'];
                            }else{
                                $final_image = false ; 
                            }
                            
                        }
                    }
                    else{
                        $sql1 = "select * from closed_complaints where complaint_id = '$complaint_id'";
                        $result1 = $conn->query($sql1);
                        while ($row1 = $result1->fetch_assoc()) {
                            if(!is_null($row1['resolved_image'])){
                                $final_image = $row1['resolved_image'];
                            }else{
                                $final_image = false ; 
                            }
                            
                        }
                    }
                ?>


                    
                    

                    ?>
                <div class="right">

                    <div class="img">
                        
                        <img id = "img" src="<?php echo $complaint_image;?>" alt=""> 
                    </div>

                    <div class="btn">
                        <button id = "complaint">Complaint Image</button>
                        <?php 
                         if($final_image){
                            echo "<button id = 'complaintWorker'>Worker Image</button>";
                         }
                         ?>
                        

                    </div>

                    

                    
                    

<script>
    
    document.getElementById("complaintWorker").addEventListener("click", function(){
       var img = document.getElementById("img");
        img.src = "<?php echo $final_image; ?>";
        
    });
    document.getElementById("complaint").addEventListener("click", function(){
       var img = document.getElementById("img");
        img.src = "<?php echo $complaint_image; ?>";
        
    });
</script>


                    
                </div>


            </div>

            <?php
             }
            }
            

            ?>



    
</div>

<?php


include 'config.php';

if (isset($_POST['save'])) {
    $worker_assigned = $_POST['worker_assigned'];

    $complaint_id = $_GET['id'];

    
        $sql = "UPDATE complaints SET `worker_assigned` = '$worker_assigned', `last_updation` = NOW() WHERE `complaint_id` = '$complaint_id'";
        $sql2 = "insert into worker_action(`worker_assigned`,`complaint_id`) values('$worker_assigned','$complaint_id')";

        $aadhar_retreive = "select * from worker where username = '$worker_assigned'";
        $aadhar_retreive_result = $conn->query($aadhar_retreive);
        $row = $aadhar_retreive_result->fetch_assoc();
        $aadhar_retreive_id = $row['aadhar_card'];

        $emailContent = "
        <html>
        <body>
            <p>Dear User,</p>
            <p>We trust this message finds you in good health. We wish to notify you that your complaint, identified as <b>'$complaint_id'</b> on our Complaint Connect platform, has been assigned to a designated worker, <b>'$worker_assigned'</b>. This individual will be visiting your location to resolve the issue.</p>
            <p>The visit is scheduled to take place within the next 1-3 days. Please ensure that someone is present at the premises during this period to facilitate the visit.</p>
            <p>For your safety and security, we are providing you with the worker's Aadhar card details. You can verify the worker's identity by accessing their Aadhar card details here:</p>
            <a href='$aadhar_retreive_id' target='_blank'>View Aadhar Card</a>
            <p>It is imperative to verify the worker's identity using the provided Aadhar card details before allowing them access to your premises.</p>
            <p>Best regards,<br>[Your Name]<br>[Your Position]<br>[Your Contact Information]</p>
        </body>
        </html>
        ";


        include("mail.php");

        smtp_mailer('poojarryadav@gmail.com', 'Assigned Worker for Your Complaint', $emailContent);



        if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
            
            echo '<script>';
            echo 'ConfirmationAlert("Updated","Worker is Assigned","../php/cAdminPanel.php")';
            echo '</script>';
            
        } else {
            echo '<script>';
            echo 'ErrorAlert("Not Updated","Worker is not Assigned","../php/cAdminPanel.php")';
            echo '</script>';
        }
    
}

?>







      
  
</body>
</html>
