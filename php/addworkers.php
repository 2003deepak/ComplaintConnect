<?php
session_start();
include 'authsession.php';
include 'config.php' ; 
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>

    <!-- DM Sans  -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <!-- Poppins  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- Biryani  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>
    

   
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
            width: calc(100vw - 80px );
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



    
<style>
    .content{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .innerContent{
        width: 90%;
        height: 90%;
        display: flex;
    }
    .left{
        width: 40%;
        height: 100%;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .right{
        width: 50%;
        height: 100%;
        display: flex;
        
    }
    .left h1{
        font-family: "Poppins", sans-serif;
        font-size: 40px;
        color: white;
    }

    .form_input form{
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    form div{
        display: flex;
        flex-direction: column;
        gap: 0.7rem;
        width: 80%;
        
    }
    form div p{
        font-size: 20px;
        font-family: "DM Sans", sans-serif;
        color: white;
    }
    
    form input[type = "text"] , input[type ="password"] , input[type ="email"] {
        width: 400px;
        height: 55px;
        background: #FFFFFF;
        border: 1px solid #EFF0F6;
        border-radius: 11px;
        padding-left: 10px;
    }
    form select {
        width: 284px;
        height: 55px;
        background: #FFFFFF;
        border: 1px solid #EFF0F6;
        border-radius: 11px;
        padding-left: 10px;
    }
   
    form input[type="submit"] {
        width: 180px;
        height: 40px;
        font-size: 16px;
        font-weight: 600;
        background-color: #FFB219;
        color: black;
        border: none;
        margin-left: 5rem;
        margin-top: 3rem;
    }
</style>


    <div class="content">

        <div class="innerContent">
            <div class="left">

                <div>
                    <h1>Add Worker</h1>
                </div>
        
                <div class="form_input">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
        
                        <div>
                            <p>Username</p>
                            <input type="text" id="username" name="username" placeholder="Enter Username" required>
                        </div>
                        <div>
                            <p for="password">Password:</p>
                            <input type="password" id="password" name="password" placeholder="Enter Password">
                            <p id="minimum" style="color: red; display: none;">Minimum 8 Characters required</p>

                        </div>
                        <div>
                            <p for="email">Email ID:</p>
                            <input type="email" id="email" name="email" placeholder="Enter Email"required>
                        </div>
                        <div>
                            <p for="aadharCard">Aadhar Card (PDF):</p>
                            <input type="file" id="aadharCard" name="file" accept=".pdf" required>
                        </div>
                        <div>
                            <p for="workArea">Work Area:</p>
                            <select id="workArea" name="workArea" required>
                                <option value="Electricity">Electrician</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="Water">Plumber</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div>
                            <input type="submit" value="Submit" name="save">
                        </div>
        
        
        
        
        
                    </form>
                </div>

            </div>
            <div class="right">

                <img src="../images/worker.svg" alt="" >

            </div>
        </div>
        
    </div>



    <?php

    include 'config.php' ;
    if(isset($_POST['save'])){



      $username=$_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $work_area = $_POST['workArea'];

       // Encryption of Password
      $str_pass = password_hash($password,PASSWORD_BCRYPT);
      
    
      // Used for aadhar card upload 
      $folder = "../uploaded_images/aadhar_card";
      $filename = $username.".pdf"; // Rename the file to "roomno.pdf"
      $tempname = $_FILES["file"]["tmp_name"];
      $folder = "../uploaded_images/aadhar_card/".$filename ;
    
      move_uploaded_file($tempname,$folder);

      $sql1 = "select * from worker where username = '$username' ";
      $result1 = mysqli_query($conn,$sql1);
      $row1 = mysqli_num_rows($result1);
      if($row1 > 0){
        echo "<script>alert('Username Already Exists')</script>";
      }else{

            $sql = "INSERT INTO worker (`username`,`password`,`email`,`aadhar_card`, `work_area`) VALUES ('$username','$str_pass' ,'$email','$folder', '$work_area')";
    
            if ($conn->query($sql) === TRUE) {
                

                include("mail.php");

                $message = "
                            <html>
                            <head>
                            <title>Welcome to Our Portal</title>
                            </head>
                            <body>
                            
                            <p>We hope this message finds you well. We are delighted to inform you that your registration as a worker has been successfully processed. You are now officially a part of our team!</p>
                            <p>Here are your login details:</p>
                            <ul>
                                <li><strong>Username:</strong> $username</li>
                                <li><strong>Password:</strong> $password</li>
                            </ul>
                            <p>Please log in to our portal using the provided credentials. Upon your first login, we highly recommend updating your password for security purposes. You can do this by navigating to your account settings and following the password update instructions.</p>
                            <p>If you have any questions or need assistance, feel free to reach out to our support team.</p>
                            <p>Thank you for joining us, and we look forward to working together!</p>
                            <br>
                            
                            </body>
                            </html>
                            ";

                smtp_mailer($email,'Welcome! Your Registration is Complete',$message,"Worker is added successfully and notified through EMAIL" ,"Worker was not added");
                
            
            }else {
                echo '<script>';
                echo 'ErrorAlert("Failed","Sorry You are not Registered","../html/index.html");';
                echo '</script>';
            }



      }


    }
      
    
    
    
    $conn->close();
    
    ?>




        


               
    <script>
        var pass = document.querySelector('#password');  
        var min = document.querySelector('#minimum');

        pass.addEventListener('input', function() {
            min.style.display = 'block';
            if (pass.value.length >= 8) {
                min.style.display = 'none';
            }
        });

       
    </script>
</div>


            

            

        </div>


    
    </div>


</div> 



       
            
       
        

            

            
        
    </div>

   
      
     
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
