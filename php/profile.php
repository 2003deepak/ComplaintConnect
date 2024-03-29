<?php
session_start();
include 'config.php' ; 
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>


     <!-- DM Sans  -->
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
    --input-type-bgColor: #000000;


    
    

   
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
    --input-type-bgColor: #EEEEEE;


   
    
    
    
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
        

        .content {
            width: 97vw;
            background-color: var(--background-color);
            height: 100vh;
            display: flex;
            margin-left: 80px; /* Initial margin-left to match the nav width */
            transition: margin-left 0.3s; /* Add transition for a smooth effect */
        }


        .nav:hover .icon {
            margin-left: 5rem;
        }
        .nav:hover ~ .content {
            margin-left: 250px;
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


            .profile{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                padding: 1rem 1rem 1rem 3rem;
                width: 70%;
                height: 80%;
                border-radius: 15px;
                margin-top: 4rem;
                margin-left: 10rem;
                background-color: var(--nav-background-color);
                
            }
            .heading{
                width: 100%;
                height: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .inner{
                width: 100%;
                height: 90%;
                display: flex;
                gap: 5rem;
            }
            .inner .left{
                width: 45%;
                height: 95%;
                display: flex;
                flex-direction: column;
                gap: 2rem;
                
                
                
            }
            .inner .left div{
                display: flex;
                flex-direction: column;
                width: 80%;
                margin-left: 3vw;
                margin-top: 1vw;
                /* flex-direction: column; */
                gap: 1rem;
            }
            .inner .left input{
                width: 75%;
                height: 67px;
                background-color: var(--input-type-bgColor);
                border: none;
                color: #FF9F00;
                padding-left: 15px;
                border-radius: 8px;
                font-size:16px;
            }
            .inner .left p{
                color: var(--font-color);
                font-family: 'DM Sans', sans-serif;
                font-size: 19px;
                
            }
            
            .inner .right{
                width: 40vw;
                height: 95%;
                display: flex;
                flex-direction: column;
                gap: 4rem;
                justify-content: space-evenly;
                
                align-items: center;
                
            }
            .heading h1{
                font-size: 48px;
                color: var(--heading-color);
                font-family: 'Poppins', sans-serif;
                
            }
            .img-logo{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            .img-logo img{
                border-radius : 50% ; 
            }
            .upload .input{
                margin-left: 10rem;
                
            }

            .right input[type="submit"]{
                background-color: #FF9F00;
                width: 13vw;
                height: 5vh;
                font-size: 20px;
                border: none;
                border-radius: 10px;
                align-self: center;
                font-family: 'DM Sans' sans-serif;
                color: white;
            }

           

           

            @media (max-width:600px) {
                .content{
                    display: flex;
                    justify-content: center;
                    width: 100%;
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




            <div class="profile">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                
                <div class="heading">
                    <h1>Profile</h1>
                </div>
                <div class="inner">


                    <?php 


      

         
          $username_search = "SELECT * FROM register WHERE username = '" . $_SESSION['username'] . "'";
          $query = mysqli_query($conn, $username_search);
          $username_count = mysqli_num_rows($query);
          if($username_count){

            $query1 = mysqli_fetch_assoc($query);
            $name = $query1['name'];
            $user_profile = $query1['user_profile'];
            $building = $query1['building'];
            $room = $query1['room'];
            $address = $building . "/" . $room;
            if(!$query1['name']){
                $name = "";
            }
        
            if(!$query1['user_profile']){
                $user_profile = "../images/user_logo.png";
            }
        
            if($query1['user_profile']){
                $user_profile = $query1['user_profile']; // Use the fetched profile image if available
            }
        
        }




        ?>

                    
                    <div class="left">
                        
                       <div>
                         <p>Name</p>
                         <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Your Name" >
                       </div>
                       <div>
                        <p>UserName</p>
                        <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
                      </div>
                      <div>
                        <p>Email ID</p>
                        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                      </div>
                      <div>
                        <p>Address</p>
                        <input type="text" name="address" value="<?php echo $address; ?>">
                      </div>
                    </div>
                    <div class="right">

                        

                        <div class="img-logo">
                           
                            <img src = "<?php echo $user_profile ;?> " alt="logo" id="logoImg" height="300px">
                            <div class="upload">
                               
                                <input type="file" name="image" onchange="changeLogo(event)" >
                                
                            </div>
                        </div>
                        
                        <div class="save-changes">
                            <input type="submit" value="Save Changes" name = "save">
                        </div>
                    
                    </div>
                </form>
                </div>

            </div>
    </div>   



    <!-- Adding Profile Image and name of user to db  -->


    <?php

    include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $name = $_POST['name'];
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
    $sql = "UPDATE register SET `name` = '$name', `user_profile` = '$folder' WHERE `username` = '" . $_SESSION['username'] . "'";

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
