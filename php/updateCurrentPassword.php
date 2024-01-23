<?php
session_start();
include 'config.php' ; 

$otpsent = false; 

?>

<?php


// Step 1: Verify Current Password

include('mail.php');
if (isset($_POST['save'])) {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

    $otp = generateRandomOTP();
    setcookie("updateotp",$otp,time()+300);

    if($currentPassword == $_SESSION['password']){
      if(smtp_mailer('poojarryadav@gmail.com','Password Updation','Hi You have request for recovery of password <br> OTP is <b>'.$otp.' </b> and it is valid for 5 minutes only',"OTP is sent succesfully","OTP not send , pls try again later")){
        $otpsent = true ; 
       
      }else{
        $otpsent = false ; 
        
      }
    }else{
     
        echo "<script> alert('Current password is not matching');</script> ";
     
    }

    
}

if (isset($_POST['update'])) {
  $currentPassword = $_POST['current_password'];
  $newPassword = $_POST['new_password'];

  $otp = $_POST['otp'];
 

  if($otp == $_COOKIE['updateotp']){

    $str_pass = password_hash($newPassword,PASSWORD_BCRYPT);
    $sql1 = "UPDATE register SET password = '$str_pass' WHERE username = '" . $_SESSION["username"] . "'";
    $query1 = mysqli_query($conn,$sql1);
    if($query1){
      echo '<script>alert("Password is Updated ")</script>' ;
      $_SESSION['password'] = $newPassword ;
      echo "<script> location.replace('../php/dashboard.php')</script> ";
    }else{
      echo '<script>alert("OOPS something Went wrong ")</script>' ;
      echo "<script> location.replace('../php/updateCurrentPassword.php')</script> ";
    }
    
  }else{
   
      echo "<script> alert('Invalid OTP');</script> ";
   
  }

  
}

function generateRandomOTP() {
    return rand(100000, 999999);
}


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


        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
        

       
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


    <?php

        

        if(!$otpsent){

          ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" class="form-control" name="current_password" required>
                  <br>
                  <label>New Password</label>
                  <input type="password" class="form-control" name="new_password" required>
                  <br>
                  <input type="submit" class="form-control" name="save" value="save">
              </div>

          </form>


          <?php

          }else{

          ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" class="form-control" name="current_password" value=<?php echo $currentPassword ;?> required readonly>
                  <br>
                  <label>New Password</label>
                  <input type="password" class="form-control" name="new_password" value=<?php echo $newPassword ;?> required readonly>
                  <br>
                  <label>Enter The OTP</label>
                  <input type="number" class="form-control" name="otp" required>
                  <br>
                  <input type="submit" class="form-control" name="update" value="save">
              </div>
          </form>
          <?php
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
