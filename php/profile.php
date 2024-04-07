<?php 

include 'C:\xampp\htdocs\ComplaintConnect\php\config.php' ;
session_start();
include 'config.php' ; 
include 'authsession.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <title>Document</title>


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
    --boxes-bg-color: #0B0b0f;
    --box-count-color: #242424;
    

   
}

.light-mode {
    --background-color: #FFFFFF;
    --nav-background-color: #E3E3EA;
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


            /* Code for profile  */

            .top{
                width: 100%;
                height: 10%;
                border-bottom: 4px solid white;
                display: flex;
                align-items: center;
            }
            .top h1{
                font-size: 48px;
                font-weight: 600;
                font-family: "Inter", sans-serif;
                margin-left: 7rem;
                color: var(--font-color);
            }
            .bottom{
                width: 85%;
                height: 90%;
                
                margin-left: 7rem;
                display: flex;
            }
            .left{
                width: 50%;
                height: 100%;
                
            }
            textarea{
                background-color: transparent;
                width: 93%;
                color: var(--font-color);
                border-radius: 8px;
                border: 2px solid #9D9D9D;
                font-size: 18px;
                font-family: "DM Sans", sans-serif;
            }
            .right{
                width: 50%;
                height: 100%;
                display: flex;
                justify-content: center;
            }
            .leftTop{
                margin-top: 10px;
                font-family: "Poppins", sans-serif;
                font-size: 18px;
                color: var(--font-color);

            }
            .name{
                width: 100%;
                height: 6vw;
                padding-top: 1.5rem;
                /* background-color: red; */
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                font-family: "DM Sans", sans-serif;
            }
            form p{
                font-size: 24px;
                font-weight: 600;
                color: var(--font-color);
                font-family: "DM Sans", sans-serif;
            }
            .name div{
                display: flex;
                gap: 4rem;
            }
            input[type= "text"], input[type= "number"]{
                width: 40%;
                height: 2.2vw;
                padding: 0.2rem 0rem 0.2rem 1rem;
                background-color: transparent;
                border: 2px solid #9D9D9D;
                color: var(--font-color);
                border-radius: 5px;
                font-size: 18px;
                font-family: "DM Sans", sans-serif;
            }
            .address{
                width: 100%;
                height: 14vw;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;

            }
            .addressTop{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                font-family: "DM Sans", sans-serif;
            }
            .areaPin{
                display: flex;
                gap: 4rem;
            }

            .areaContact{
                            width: 100%;
                            height: 6vw;
                            display: flex;
                        }
                        .areaContactleft{
                            width: 50%;
                            display: flex;
                            flex-direction: column;
                            gap: 0.5rem;
                        }
                        .areaContactRight{
                            width: 50%;
                            display: flex;
                            flex-direction: column;
                            gap: 0.5rem;
                        }
                        .areaContact input[type= "text"] , .areaContact input[type= "number"]{
                            width: 80%;
                            height: 2.2vw;
                            padding: 0.2rem 0rem 0.2rem 1rem;
                            background-color: transparent;
                            border: 2px solid #9D9D9D;
                            color: var(--font-color);
                            border-radius: 5px;
                            font-size: 18px;
                            font-family: "DM Sans", sans-serif;
                        }


                        .emailPass{
                            width: 100%;
                            height: 6vw;
                            display: flex;
                        }
                        .emailPassleft{
                            width: 50%;
                            display: flex;
                            flex-direction: column;
                            gap: 0.5rem;
                        }
                        .emailPassRight{
                            width: 50%;
                            display: flex;
                            flex-direction: column;
                            gap: 0.5rem;
                        }
                        .emailPass input[type = "password"] , input[type="email"]{
                            width: 80%;
                            height: 2.2vw;
                            padding: 0.2rem 0rem 0.2rem 1rem;
                            background-color: transparent;
                            border: 2px solid #9D9D9D;
                            color: var(--font-color);
                            border-radius: 5px;
                            font-size: 18px;
                            font-family: "DM Sans", sans-serif;
                        }

                        .profile{
                        width: 90%;
                        height: 90%; 
                        margin-top: 2rem;
                        display: flex;
                        flex-direction: column;
                        gap: 4rem;
                        align-items: center;
                    }
                    #img{
                        margin-top: 0rem;
                        height: 34px;
                        width: 37px;
                        padding-left: 5px;
                    }
                    .profile div{
                        display: flex;
                        gap: 2rem;
                        

                    }
                    .profileleft{
                        width: 230px;
                        height: 50px;
                        border: 2px solid #9D9D9D;
                            border-radius: 5px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    
                    .profile input[type="submit"]{
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
                    .profileleft p{
                         font-size: 22px;
                         font-weight: 600;
                         color: var(--font-color);
                         font-family: "DM Sans", sans-serif;
                         margin-right: 10px;
 
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
                <a href="../php/filecomplaint.php">File Complaint</a>
            </div>
            <div>
                <i class="fa-solid fa-clock"></i>
                <a href="../php/complaintHistory.php">Complaint History</a>
            </div>
            <div>
                <i class="fa-solid fa-key"></i>
                <a href="../php/updateCurrentPassword.php">Update Password</a>
            </div>
            <div>
                <i class="fa-solid fa-xmark"></i>
                <a href="closedComplaint.php">Closed Complaint</a>
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


    <?php 


      

         
          $username_search = "SELECT * FROM register WHERE username = '" . $_SESSION['username'] . "'";
          $query = mysqli_query($conn, $username_search);
          $username_count = mysqli_num_rows($query);
          if($username_count){

            $query1 = mysqli_fetch_assoc($query);
            $name = $query1['name'];
            $email = $query1['email'];
            $last_name = $query1['last_name'];
            $user_profile = $query1['user_profile'];
            $building = $query1['building'];
            $room = $query1['room'];
            $mob_no = $query1['mob_no'];
            $address = $building . "/" . $room;
            if(!$query1['name']){
                $name = "";
            }
            if(!$query1['last_name']){
                $last_name = "";
            }
            if($query1['mob_no'] == 0 ){
                $mob_no = "";
            }
        
            if(!$query1['user_profile']){
                $user_profile = "../images/Profile.svg";
            }
        
            if($query1['user_profile']){
                $user_profile = $query1['user_profile']; // Use the fetched profile image if available
            }
        
        }




        ?>

       

        <div class="top">
            <h1>Edit Profile</h1>
        </div>
        <div class="bottom">
            <div class="left">
                <div class="leftTop">
                    <p>Here you can edit public information about yourself. <br/>
                        The changes will be displayed for other users instantly.</p>
                </div>
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">

                    <div class="name">
                        <p>Name</p>
                        <div>
                            
                            <input type="text" name="name" placeholder="First Name" value="<?php echo $name; ?>"> 
                            <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name;?>" > 
                        </div>
                    </div>
                    <div class="address">

                        <div class="addressTop">
                            <p>Address</p>
                            <textarea rows="4" cols="90" placeholder="Flat / House No / Building Name" name="address" disabled ><?php echo $address . $room . ' NCH COLONY'; ?></textarea>
 
                        </div>
                        <div class="areaPin">
                            <input type="text" name="area" placeholder="Area" value="Colaba" disabled >
                            <input type="number" name="pincode" placeholder="Pincode" value="400001" disabled >
                        </div>
                        

                        
                    </div>

                    <style>
                        

                    </style>
                    <div class="areaContact">

                        <div class="areaContactleft">
                            <p>Username</p>
                            <input type="text" name="work_area" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" ">

                        </div>
                        <div class="areaContactRight">
                            <p>Contact No</p>
                            <input type="number" name="mobile" placeholder="Mobile Number" value="<?php echo $mobile_number; ?>">

                        </div>

                    </div>
                    <div class="emailPass">

                        <div class="emailPassleft">
                            <p>Email-ID</p>
                            <input type="email" name="email" placeholder="worker@gmail.com" value="<?php echo $email; ?>">

                        </div>
                        

                    </div>

                

            </div>

            <style></style>
            <div class="right">

               

                <div class="profile">
                    <img src="<?php echo $user_profile ;?>" alt="" id = "logoImg" height="400px">
                    
                    <div>
                        <style>
                            input[type="file"]{
                                color:var(--font-color);
                                font-size:18px ; 
                            }
                        </style>
                        <div class="profileleft">
                            <!-- <img src="/file-add.svg" alt="" height="30px" id="img"> -->
                            <input type="file" name="image" onchange="changeLogo(event)" >
                            

                        </div>
                        <input type="submit" value="Save changes" name = "save">
                    </div>
                </div>

                </form>
            </div>
        </div>



        <!-- Adding Profile Image and name and other values of worker to db  -->

        <!-- Adding Profile Image and name of user to db  -->


    <?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$mobile = $_POST['mobile'];
$folder = "../uploaded_images/profile_image/";

// Check if a file was uploaded
if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $filename = $building . "_" . $room . ".". pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION); // Rename the file to "roomno.png"
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = $folder . $filename;

    // Move the uploaded file to the target folder
    if (!move_uploaded_file($tempname, $folder)) {
        echo '<script>';
        echo 'ErrorAlert("Failed","Image Upload Failed","../php/profile.php")';
        echo '</script>';
        exit; // Stop further execution if image upload failed
    }
}

// Update the user's profile
$sql = "UPDATE register SET `name` = '$name', `user_profile` = '$folder' , `last_name` = '$last_name' , `mob_no` = '$mob_no' WHERE `username` = '" . $_SESSION['username'] . "'";

// If no file was uploaded, update only the name
if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
    $sql = "UPDATE register SET `name` = '$name' WHERE `username` = '" . $_SESSION['username'] . "'";
}

if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'ConfirmationAlert("Success","Profile Updated","../php/profile.php")';
    echo '</script>';
} else {
    echo '<script>';
    echo 'ErrorAlert("Failed","Updation Failed","../php/profile.php")';
    echo '</script>';
}
}

?>


  
        

            

            
        
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

        function changeLogo(event) {
            const fileInput = event.target;
            const logoImg = document.getElementById("logoImg");

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    logoImg.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }





    
   
</script>

</body>
</html>