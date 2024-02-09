<?php 

include 'C:\xampp\htdocs\ComplaintConnect\php\config.php' ;
session_start();

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
            width: 250px;
        }
        .nav:hover + .content {
            margin-left: 250px;
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


        /* Css for preview panel  */

        .imgComplaint{
            width: 100vw;
            height: 20.5vw;

        }
        .imgComplaint img{
            margin-left: 3.9vw;
            margin-top: 1vw ;
            height: 80%;
            /* aspect-ratio: 3 / 2;
            object-fit: contain; */
        }

        .complaintDetails{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #0f0f0f;
            height: 100%;

        }

        .complaintDetails p{
            color: var(--font-color);
        }
        .cInfo{
            display: flex;
            flex-direction: column;
            margin-top: 1.5rem;
        }
        .cDetails{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 24vw;
            height: 20vh;
            /* background-color: orange; */
        }
        .description{
            width: 75%;
            height: 7vw;
            background-color: #161717;
            margin-top: 2rem;
            display: flex;
            padding : 1rem ;
            flex-direction: column;
            align-items: center;
            gap: 1.7rem;
        }

        .cBtn button{
            width: 10vw;
            height: 3vw;
            border: none;
            border-radius: 8px;
            color: var(--font-color);
            font-size: 19px;
            background-color: #05FF00;
            cursor: pointer;
            margin-top: 25px;
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
                <a href="../php/dashboard.php">Home</a>
            </div>
            <div>
                <i class="fa-solid fa-user" ></i>
                <a href="../php/profile.php">Profile</a>
            </div>
            <div>
                <i class="fa-solid fa-house"></i>
                <a href="../php/filecomplaint.php">New Complaints</a>
            </div>
            <div>
                <i class="fa-solid fa-clock"></i>
                <a href="../php/complaintHistory.php">Pending Complaints</a>
            </div>
            <div>
                <i class="fa-solid fa-key"></i>
                <a href="../php/updateCurrentPassword.php">Update Password</a>
            </div>
            <div>
                <i class="fa-solid fa-xmark"></i>
                <a href="#">Close Complaint</a>
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







    


    <div class="content">


    <table class="content-table">
        <tr>
          <th>Complaint ID</th>
          <th>Subject</th>
          
        </tr>

        
        <?php

include 'config.php' ;
$sql = "SELECT 
complaints.*,
worker_action.actionTaken
FROM complaints
JOIN worker_action ON complaints.complaint_id = worker_action.complaint_id;

";
$result = $conn->query($sql);
$count = 1 ; 
// Loop through the result set and generate table rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      ?>
        <tr class="active-row">
          
          <td> <?php echo $row["complaint_id"] ?>   </td>
          <td> <?php echo $row["subject"] ?>   </td>
          <td><a href="../php/takeAction.php">Take Action</a></td>
          
        </tr>
        <?php
    }
}

// Close the connection
$conn->close();
?>
</table> 



        
            

            
            
    </div>

        

        

    


    

    <!-- JS code starting from here  -->


    <script>
    let count = 0;

    const toggle = () => {
        var a = document.querySelector(".dark");
        if (count == 0) {
            document.body.classList.add("light-mode");
            a.innerHTML = "Dark Mode";
            count = 1;
        } else {
            document.body.classList.remove("light-mode");
            a.innerHTML = "Light Mode";
            count = 0;
        }
    }





    

   
</script>

</body>
</html>