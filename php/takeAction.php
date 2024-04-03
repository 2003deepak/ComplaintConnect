<?php 

include 'C:\xampp\htdocs\ComplaintConnect\php\config.php' ;
session_start();

$complaint_id = $_GET['id'];

if (!isset($_SESSION['otp_sent'])) {
    $_SESSION['otp_sent'] = false;
}

//  Code to retrive username related to compplaint and email associated with it 

$id_search = "select * from complaints where complaint_id = '" . $_GET['id'] . "'";
$query2 = mysqli_query($conn, $id_search);
$id_count = mysqli_num_rows($query2);
if ($id_count) {

    $details = mysqli_fetch_assoc($query2);
    $username = $details['username'];

}

$email_search = "select * from register where username = '$username' ";
$query3 = mysqli_query($conn, $email_search);
$id_count3 = mysqli_num_rows($query3);
if ($id_count3) {

    $details2 = mysqli_fetch_assoc($query3);
    $email = $details2['email'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
 

    <title>OTP Example</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>
  

    <!-- Dm Sans  -->
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


    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

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
    --boxes-bg-color: #0B0b0f;
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
            min-height: 100vh;
            height : auto ; 
            display: flex;
            flex-direction: column;
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





    


    <div class="content">

        <h1><?php $_SESSION['username'] ; ?></h1>

        <style>
            .innerContent{
                width: 40vw;
                height: 60vh;
                background-color: #343536;
                display: flex;
                justify-content: center;
                padding-top: 4rem;
                color: white;
            }

            h1{
                align-self: flex-start;
                position: relative;
                top: -4rem;
                left: 1rem;
                font-size: 50px;
                color: white;
                font-family: "Poppins", sans-serif;
            }

            input[type="submit"]{
                width: 40%;
                height: 40px;
                color:black;
                background-color: #FFB219;
                border-radius: 8px;
                border: none;
                font-family: "Inter", sans-serif;
                font-size: 20px;
                font-weight: 500;
            }
            input[type="number"]{

                width: 40%;
                height: 50px;
                color:black;
                background-color: #ADADAD;
                border-radius: 8px;
                border: none;
                font-family: "Inter", sans-serif;
                font-size: 20px;
                font-weight: 500;
                margin-bottom: -1rem;

            }
            form{
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 80%;
            }
            form select{
                width: 40%;
                background-color: transparent;
                height: 30px;
                border-radius: 10px ;
                padding : 0.5rem 0rem 0.5rem 0.5rem ; 
                font-family: "DM Sans", sans-serif;
                font-size: 18px;
                color: white;
            }

            #otpContainer{
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #otpContainer .insidediv{
                width: 40vw;
                display: flex;
                flex-direction: column;
                margin-top: 2rem;
                align-items: center;
                font-size: 22px;
                font-family: "DM Sans", sans-serif;
                gap: 4rem;
            }
            #otpContainer .seconddiv{
                width: 40vw;
                display: flex;
                flex-direction: column;
                margin-top: 1rem;
                align-items: center;
                font-size: 18px;
                font-family: "DM Sans", sans-serif;
                
                
            }
            .seconddiv a{
                text-decoration: none;
                color: white;
            }
            span{
                color: #FFB219;
            }
            .gmail{
                width: 40%;
                height: 50px;
                color:black;
                margin-top: 3rem;
                background-color: #ADADAD;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 2rem;
                font-family: "Inter", sans-serif;
                font-size: 20px;
                font-weight: 500;
            }
        </style>
        

        <div class="innerContent">

            <form id="otpForm" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $complaint_id; ?>" method="post">
                <select id="action" name="action">
                    <option value="initial_visit" selected>Initial Visit Done</option>
                    
                </select>

                <div id="otpContainer">

                            <?php

                                $visiblePart = substr($email, 0, 3); // Get the first two characters
                                $hiddenPart = str_repeat('*', strlen($email) - 5); // Replace middle characters with stars
                                $lastPart = substr($email, -3); // Get the last three characters
                                $maskedEmail = $visiblePart . $hiddenPart . $lastPart; // Concatenate the parts


                            ?>

                    <div class="insidediv">
                        <p>A verification code has been sent to you on your <br> e-mail id <?php echo $maskedEmail ;?>.</p>

                    </div>

                    <div class="insidediv">

                        <input type="number" id="otp" name="otp" required>
                        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                        <input type="submit" id="submitOtp" name="save" value="Continue">
                        

                    </div>
                    <div class="seconddiv">
                        <a href="#">Not Recieved ? <span>Resend</span></a>
                    </div>

                    <div class="gmail">

                        <p>Visit Gmail</p>

                        <div>
                            <img src="../images/Group 73.svg" alt="" height="25px">
                        </div>

                    </div>
                    

                    
                    
            </div>
        </form>

        </div>

        
        

    </div>


    <?php 

if(isset($_POST['save'])){

    $otpentered = $_POST["otp"];
    $orgotp = $_COOKIE["emailotp"];

    // Sanitize the complaint_id to prevent SQL injection
    $complaint_id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';

    if($otpentered == $orgotp){

        $sql1 = "UPDATE worker_action SET actionTaken = 1 WHERE complaint_id = '$complaint_id' ";
        $query1 = mysqli_query($conn,$sql1);


        $sql2 = "UPDATE complaints SET `last_updation` = NOW() WHERE `complaint_id` = '$complaint_id'";
        $query2 = mysqli_query($conn,$sql2);
        if($query1 && $query2){

            echo '<script>';
            echo 'ConfirmationAlert("Done","Action Taken Successfully","../php/Wdashboard.php")';
            echo '</script>';

           
        }else{

            echo '<script>';
            echo 'ErrorAlert("Failed","OOPS something Went wrong ","../php/takeAction.php")';
            echo '</script>';

           
        }
       
    }else{
        echo "<script> alert('Wrong otp ') </script>";
    }
}

?>




    <!-- JS code starting from here  -->


    <script>

        var gmail = document.querySelector(".gmail");
        gmail.addEventListener("click", () => {
            window.open("https://www.gmail.com", "_blank");
        });


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

        

        $(document).ready(function() {

            $.ajax({
                type: 'GET',
                url: 'send_otp.php?email=<?php echo $email; ?>',
                success: function(response) {
                    console.log('OTP sent successfully:', response);
                    // Handle success response
                },
                error: function(error) {
                    console.error('Error sending OTP:', error);
                    // Handle error response
                }
            });

            $('#submitOtp').click(function() {
                var enteredOtp = $('#otp').val();
                // Add logic to validate entered OTP and perform necessary actions
                console.log('Entered OTP:', enteredOtp);
            });

});


       





    
   
</script>

</body>
</html>



