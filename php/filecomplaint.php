<?php
session_start();
include '../php/config.php' ; 
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>

    <!-- DM Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&display=swap" rel="stylesheet">

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


            
            .content{
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
            form{
                margin-left: 5vw;
                width: 55%;
                padding: 1rem 0rem 0rem 2rem;
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }
            .first{
                display: flex;
                gap: 1rem;
                justify-content: space-between;
               
            }
            .subject input{
                width: 20vw;
                height: 40px;
                border-radius: 11px;
                border: none;
                padding: 0.5rem;
                padding-left: 1rem;
            }
            .complaint-type select{
                width: 284px;
                height: 40px;
                color: #6F6C90;
                font-size: 15px;
                padding: 0.5rem;
                border: none;
                border-radius: 11px;
            }
            .complaint-type , .subject , .description{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                
                
            }

            .second textarea{
                width: 98%;
                height: 8vw;
                color: #6F6C90;
                font-size: 15px;
                padding: 0.5rem;
                border: none;
                border-radius: 11px;
                font-family: 'DM Sans', sans-serif;
                
            }
            .third{
                
                border: none;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                font-family: 'DM Sans', sans-serif;
            }
            .image{
                width: 100%;
                height: 10vw;
                border-radius: 11px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: white;
                
                
               
                
            }
            
            form p{
                font-size: 18px;
                font-weight: 800;
                font-family: 'DM Sans', sans-serif;
            }
            .file-logo {
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 1rem;
                align-items: center;
            }

            .file-i{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                justify-content: center;
                align-items: center;
                
            }

            .file-logo input[type="file"] {
                display: none; /* Hide the default file input */
            }

            .file-logo label {
                cursor: pointer;
            }

            .btn {
                display: flex;
                justify-content: center;
            }

            .btn input[type="submit"] {
                width: 10vw;
                height: 45px;
                background-color: #000000;
                color: white;
                font-size: 24px;
                border-radius: 12px;
                font-family: 'DM Sans', sans-serif;
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

                <p><?php echo $capitalizedu ;?></p>
                
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

      

      <form action = "../php/uploadComplaint.php" method = "post" enctype="multipart/form-data">
          
        <h1>Deepak Yadav</h1>

        <?php 


          

            
              $username_search = "SELECT * FROM register WHERE username = '" . $_SESSION['username'] . "'";
              $query = mysqli_query($conn, $username_search);
              $username_count = mysqli_num_rows($query);
              if($username_count){

                  $query1 = mysqli_fetch_assoc($query);
                  $building = $query1['building'];
                  $room = $query1['room'];

            
              }




            ?>


        <div class="first">

            <div class="complaint-type">
                <p>Complaint Type</p>
                <select name="complaint_group">
                    <option value = "Electricity">Electricity</option>
                    <option value = "Water">Water </option>
                    <option value = "Water">Property Damage </option>
                    <option value = "Water">Cleanliness </option>
                    <option value = "Water">Add more </option>
                    <option value = "Water">Others</option>
                </select>
            </div>

            <div class="subject">
                <p>Subject</p>
                <input type="text" placeholder="Enter Complaint Subject" name="subject"  required>
                <p style="color: red; font-size: 15px;">Maximum 50 words allowed</p>
            </div>

        </div>

        <div class="second">
            <div class="description">
                <p>Description</p>
                <textarea placeholder="Enter Complaint Description" rows="20" cols="100" name = "desc" required></textarea>
                <p style="color: red; font-size: 15px;">Maximum 250 words allowed</p>
            </div>
    
        </div>
        <div class="third">
            <p>Image</p>
            <div class="image">

                <div class="file-logo">

                    <label for="file-input" class="file-i">

                        <img src="/file-add.png" alt="Custom Image">
                        <p style="font-size: 15px; color: #6F6C90;">Click to upload</p>

                    </label>

                    <input type="file" name="image" id="file-input" accept="image/*" required>
                </div>
            </div>
        </div>
        
        <style>




            
        </style>
        
        <div class="btn">
            <input type="submit" value="Submit" name="save">
        </div>

        

          
      </form>

    

      
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
