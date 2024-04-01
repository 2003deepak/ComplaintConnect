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


    <!-- Lexend  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

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


    <!-- bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            width: calc(100vw - 80px );
            background-color: var(--background-color);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 80px; /* Initial margin-left to match the nav width */
            transition: margin-left 0.3s; /* Add transition for a smooth effect */
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
                margin-top: 25px;
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
                width: 225px;
                padding-left: 20px;
                display: flex;
                gap: 1rem;
                margin-left: 0.3rem;
                justify-content: flex-start;
                align-items: center;
                height: 53px;
                border-radius: 10px 0px 0px 10px;
            }

            .nav-content-down div {
                width: 220px;
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


            /* Table Code For CSS  */

            table{
                font-family: "Lexend", sans-serif;
                border-bottom: 3px solid #4d4d4d;
                border-top: 3px solid #4d4d4d;
                position: relative;
                bottom: 23rem;
            }
            tbody{
                border-bottom: 3px solid #4d4d4d;
                border-top: 3px solid #4d4d4d;
            }
            tr{
                border-bottom: 3px solid #4d4d4d;
                border-top: 3px solid #4d4d4d;
            }

            
            
            table thead{
            color: #999999;
            }

        table a {
            text-decoration: none ;
        }

        table button{
            background-color:  #FF9F00;
            width: 69px;
            height: 27px;
            border: none;
            border-radius: 3px;
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
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="../php/logout.php">Log Out</a>
            </div>
            

        </div>
    </div>






    
    


    <div class="content">

        


        <table class="table bg-transparent text-white ">
            <thead class="bg-transparent">
              <tr>
                <th>Username</th>
                <th>Complaint ID</th>
                <th>Complaint Type</th>
                <th>Subject</th>
                <th>Registered Time</th>
                <th>Closed Time</th>
                <th>Worker Assigned</th>
                <th>Rating</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            <?php

                include 'config.php' ;
                $sql = "SELECT * from closed_complaints";
                $result = $conn->query($sql);
                
                // Loop through the result set and generate table rows
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                        ?>
              <tr>
              <td class=" col-2 " >
                    <p class="fw-normal mb-1 ml-0" style="color: #E6E6E6;" ><?php echo $row['username'] ; ?></p>
                </td>
                <td class=" col-3">
                  
                    <div class="ms-3 d-flex ml-3 ">
                      <p class="fw-bold mb-1" style="color: #E6E6E6;"><?php echo $row["complaint_id"] ; ?></p>
                      
                    </div>
                  </div>
                </td>
                <td class="col-2">
                  <p class="fw-normal mb-1 ml-0" style="color: #E6E6E6;" ><?php echo $row["complaint_type"] ; ?></p>
                  
                </td>
                
                <td class=" col-2 "><?php echo $row["subject"] ;  ?></td>
                <td class=" col-2 "><?php echo date("d-m-Y", strtotime($row["time"])) ; ?></td>
                <td class=" col-2 "><?php echo date("d-m-Y", strtotime($row["resolved_time"])) ; ?></td>
                <td class=" col-2 "><?php echo $row["worker_assigned"];  ?></td>
                <td class=" col-2 "><?php echo $row["rating"] ; ?></td>
            
                <td class=" col-2 "><a type="button" class="btn btn-primary" style = "background:#FF9F00 ; border:none; color:black;" href="../php/ComplaintInfo.php?id=<?php echo $row['complaint_id']; ?>">View Complaint</a></td>

              </tr>

              <?php
                        
                    }
                }

                // Close the connection
                $conn->close();
            ?>

   
              
            </tbody>
          </table>

        
        


    

        
        
   

    
        
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





   
   
</script>

</body>
</html>