<?php 

include 'config.php' ;
session_start();





?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>

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
            font-size: 22px;
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
            .nav-content div , .nav-content-down div{
                display: flex;
                margin-left: 0.3rem;
                gap: 1rem;
                display: flex;
                justify-content:flex-start;
                align-items: center;
                height: 53px;
                padding-left: 20px;
                width: 225px;
                border-radius: 10px 0px 0px 10px;
            }


            .nav-content{
                position: absolute;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                top: 10rem;
            }
            .nav-content-down{
                position: absolute;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                bottom: 2rem;
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


<div class="nav">


<div class="bars">
    <i class="fa-solid fa-bars"></i>
</div>



<div class="icon">

    <?php

   
        $u = $_SESSION["username"];
        $capitalizedu = ucfirst($u[0]);




    ?>
     <!-- <p><?php echo $capitalizedu ;?></p>   Replace it with first letter of Username of user  -->
</div>

<div class="nav-content">

    <div>
        <i class="fa-solid fa-house"></i>
        <a href="#">Home</a>
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
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
            padding: 1rem;
            background-color: white;
            border-radius: 10px;
            color: black;
        }



    </style>

    


            <div class="complaintInfo">



                <?php
                    include 'config.php' ;
                    $complaint_id = $_GET['id'];
                    $sql = "select * from complaints where complaint_id = '$complaint_id'";
                    $result = $conn->query($sql);
                    $count = 1 ; 



                            // Loop through the result set and generate table rows
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                    ?>


                    <h3>Complaint ID :- <?php  echo $row["complaint_id"];?><h3>
                    <h3>Complaint Type :- <?php  echo $row["complaint_type"];?><h3>
                    <h3>Subject :- <?php  echo $row["subject"];?><h3>
                    <h3>Description :- <?php  echo $row["description"];?><h3>
                    <h3>Images :- <a href = "<?php echo $row["folder"]?> " target="blank">View File</a><h3>
                    <h3>Regd Date :- <?php  echo $row["time"];?><h3>
                    <h3>Last Updation :- <?php  echo $row["last_updation"];?><h3>
                    <h3>Resolved Date :- <?php  echo $row["resolved_time"];?><h3>
                    <h3>Worker Assigned :- <?php  echo $row["worker_assigned"];?><h3>

                    


                    <?php

                        $complaint_type = $row["complaint_type"];
                        }
                    }
                    ?>

            <div class="assignworker">
                <form action="<?php echo $_SERVER['PHP_SELF']. '?id=' . $complaint_id ;  ?>" method="post">
                    <select name="worker_assigned" id="worker_assigned">
                        <?php
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
            </div>
            





                <div class="photos1">Photos uploaded from user
                    
                </div>
                <div class="photos2"> Photos Uploaded from contractor </div> 

            </div>



    
</div>


    

</div>




<!-- This part is used to update the worker assigned to the complaint table  -->
<?php


include 'config.php';

if (isset($_POST['save'])) {
    $worker_assigned = $_POST['worker_assigned'];

    
        $sql = "UPDATE complaints SET `worker_assigned` = '$worker_assigned', `last_updation` = NOW() WHERE `complaint_id` = '$complaint_id'";
        $sql2 = "insert into worker_action(`complaint_id`) values('$complaint_id')";


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
