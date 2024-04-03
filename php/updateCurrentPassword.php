<?php
session_start();
include 'config.php';
include 'authsession.php';

$otpsent = false;


// Function to generate random otp 
function generateRandomOTP() {
    return rand(100000, 999999);
}

// Step 1: Verify Current Password
include('mail.php');

if (isset($_POST['save'])) {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

    $otp = generateRandomOTP();
    setcookie("updateotp", $otp, time()+200);

    if($currentPassword == $_SESSION['password']) {
        if(smtp_mailer($_SESSION['email'], 'Password Updation', 'Hi You have request for updation of password <br> OTP is <b>'.$otp.' </b> and it is valid for 5 minutes only', "OTP is sent succesfully", "OTP not send , pls try again later")) {
            $otpsent = true; 
            setcookie("temppass", $newPassword, time()+200);
        } else {
            $otpsent = false; 
        }
    } else {
        
        echo "<script> alert('Current password is not matching');</script> ";
    }
}

if (isset($_POST['update'])) {
    $currentPassword = $_SESSION['password'];
    $new = $_COOKIE['temppass'];
  
    $otp = $_POST['otp'];
   
  
    if($otp == $_COOKIE['updateotp']){
  
      setcookie("updateotp", "", time() - 100, "/");
      $str_pass = password_hash($new,PASSWORD_BCRYPT);
      if ($_SESSION['user_type'] == "worker") {
        // Update password for worker
            $sql1 = "UPDATE worker SET password = '$str_pass' WHERE username = '" . $_SESSION["username"] . "'";
        } else if($_SESSION['user_type'] == "user"){
            // Update password for regular user
            $sql1 = "UPDATE register SET password = '$str_pass' WHERE username = '" . $_SESSION["username"] . "'";
    }
      $query1 = mysqli_query($conn,$sql1);
      if($query1){
        echo '<script>alert("Password is Updated ")</script>' ;
        $_SESSION['password'] = $new;
        if ($_SESSION['user_type'] == "worker") {
            // Redirect worker to worker dashboard
            echo "<script> location.replace('../php/Wdashboard.php')</script> ";
        } else if ( $_SESSION['user_type'] == "user"){
            // Redirect regular user to user dashboard
            echo "<script> location.replace('../php/dashboard.php')</script> ";
        }
      }else{
        echo '<script>alert("OOPS something Went wrong ")</script>' ;
        echo "<script> location.replace('../php/updateCurrentPassword.php')</script> ";
      }
      
    }else{
     
        echo "<script> alert('Invalid OTP');</script> ";
     
    }
  
    
  }

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
    --nav-font-color:#8C8C8C;
    

   
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
    --nav-font-color:black;
    
    
    
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
                color : var(--nav-font-color);
            
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

            .innerContent{
                width: 90%;
                height: 95%;
                display: flex;
                
            }
            .left{
                width: 48%;
                height: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .right{
                width: 50%;
                height: 100%;
                
                
            }
            .inner{
                display: flex;
                flex-direction: column;
                gap: 3rem;
                width: 80%;
                height: 80vh;
                padding: 2rem 0rem 0rem 6rem;
                

            }

             h1{
                font-family: 'Poppins', sans-serif;
                font-size: 40.13px;
                font-weight: 700;
            }
             h2{
                font-family: "DM Sans", sans-serif;
                font-size: 24px;
                font-weight: 600;
            }
            
            .firstInner form{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                margin-top: 3rem;
                
            }
            .firstInner form input[type = "text"]{
                width: 400px;
                height: 47px;
                border: 1px solid #EFF0F6;
                border-radius: 11px;
                font-size : 18px ; 
                padding-left : 10px ;
            }
            .firstInner form input[type = "password"]{
                width: 400px;
                height: 47px;
                border: 1px solid #EFF0F6;
                border-radius: 11px;
                font-size : 18px ; 
                padding-left : 10px ;

            }
            .btn{
                width: 60%;
                height: 30%;
                display: flex;
                align-items: center;
                margin-top: 1rem;
            }
            .firstInner form input[type = "submit"] {
                width: 185px;
                height: 50px;
                background-color: #000000;
                border: none;
                color: white;
                border-radius: 11px;
                font-size: 18px;
                font-family: "DM Sans", sans-serif;
                

            }
            .firstInner form div{
                display: flex;
                flex-direction: column;
                gap:0.5rem;
            }
            .firstInner form p{
                font-size: 18px;
            }
            #minimum , #not_matching{
                font-size: 16px;
                font-weight: 500;
                margin-top: 0.4rem;
            }

            .secondInner form{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            .secondInner form div:nth-last-child(2){
                display: flex;
                flex-direction: column;
                gap: 0.8rem;
            }
            .secondInner form p:nth-last-child(1){
                font-size: 20px;
                
                font-family: "DM Sans", sans-serif;
            }
            .secondInner form p:nth-last-child(2){
                font-size: 18px;
                font-family: "DM Sans", sans-serif;
            }
            .secondInner form input[type = "number"]{
                width: 400px;
                height: 47px;
                border: 1px solid #EFF0F6;
                border-radius: 11px;
                font-size : 20px ; 

            }
            .secondInner form input[type = "submit"] {
                width: 185px;
                height: 50px;
                background-color: #000000;
                border: none;
                color: white;
                border-radius: 11px;
                font-size: 18px;
                font-family: "DM Sans", sans-serif;
                

            }
            .btn2{
                width: 60%;
                height: 30%;
                display: flex;
                justify-content: center;
                margin-top: 1rem;
                
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

          <?php 
          if($_SESSION['user_type'] == "user"){
           
            echo '

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

                ';


          }else {
            echo '
        
            <div>
                <i class="fa-solid fa-house"></i>
                <a href="../php/Wdashboard.php">Home</a>
            </div>
            <div>
                <i class="fa-solid fa-user"></i>
                <a href="../php/profile.php">Profile</a>
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
                <a href="../php/updateCurrentPassword.php">Update Password</a>
            </div>
            <div>
                <i class="fa-solid fa-xmark"></i>
                <a href="#">Close Complaint</a>
            </div>
            
            
            ';
        }
        ?>

          

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

       
    
        <div class="innerContent">

        <div class="left">


            <?php if(isset($otpsent) && $otpsent): ?>
            <div class="inner">

                <div class="firstInner">

                    <h1>Deepak Kumar Yadav</h1>
                    <h2>let's reset it!</h2>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
                       

                        <div>

                            <p>Current Password</p>
                            <input type="password" class="form-control" name="current_password" required  value = <?php echo $_SESSION['password'] ; ?> >

                        </div>
                        <div>
                            <p>New Password</p>
                            <input type="text" class="form-control" id="pass" name="new_password" required value = <?php echo $newPassword ; ?> >
                            <p id="minimum" style="color: red; display: none;">Minimum 8 Characters required</p>

                        </div>
                        <div>
                            <p>Confirm New Password</p>
                            <input type="password" class="form-control" name="confirm_password" id="con_pass" required  value = <?php echo $newPassword ; ?> >
                            <p id="not_matching" style="color: red; display: none;">Both Passwords Not Matching</p>

                        </div>
                        <div class="btn">

                            <input type="submit" class="form-control" name="save" value="Get OTP">

                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </form>

                </div>
                


                <div class="secondInner">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <div>
                            <?php

                                $visiblePart = substr($_SESSION["email"], 0, 3); // Get the first two characters
                                $hiddenPart = str_repeat('*', strlen($_SESSION["email"]) - 5); // Replace middle characters with stars
                                $lastPart = substr($_SESSION["email"], -3); // Get the last three characters
                                $maskedEmail = $visiblePart . $hiddenPart . $lastPart; // Concatenate the parts


                            ?>
                            <p>A verification code has been sent to you on your <br>
                                e-mail id <?php echo $maskedEmail ;?> .
                            </p>

                        </div>

                        <div>
                            <p>Enter The OTP</p>
                            <input type="number" class="form-control" name="otp" required>
                        </div>

                        <div class="btn2">
                            <input type="submit" class="form-control" name="update" value="Reset">

                        </div>
                        
                        
                        
                        
                        
                    </form>
                </div>
                

            </div>

            

                

               
            <?php else: ?>

            <div class="inner">

                <div class="firstInner">

                    <h1>Deepak Kumar Yadav</h1>
                    <h2>let's reset it!</h2>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
                       

                        <div>

                            <p>Current Password</p>
                            <input type="password" class="form-control" name="current_password" required >

                        </div>
                        <div>
                            <p>New Password</p>
                            <input type="text" class="form-control" id="pass" name="new_password" required  >
                            <p id="minimum" style="color: red; display: none;">Minimum 8 Characters required</p>

                        </div>
                        <div>
                            <p>Confirm New Password</p>
                            <input type="password" class="form-control" name="confirm_password" id="con_pass" required  >
                            <p id="not_matching" style="color: red; display: none;">Both Passwords Not Matching</p>

                        </div>
                        <div class="btn">

                            <input type="submit" class="form-control" name="save" value="Get OTP">

                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </form>

                </div>

                

                
            

            <?php endif; ?>

    <script>
        var pass = document.querySelector('#pass');
        var con_pass = document.querySelector('#con_pass');
        var min = document.querySelector('#minimum');
        var not = document.querySelector('#not_matching');

        pass.addEventListener('input', function() {
            min.style.display = 'block';
            if (pass.value.length >= 8) {
                min.style.display = 'none';
            }
        });

        con_pass.addEventListener('input', function() {
            not.style.display = 'block';
            if (pass.value.length === con_pass.value.length) {
                not.style.display = 'none';
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
