<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- noto Sans -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Plus Jakarta Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Lilita+One&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap');
        body{
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background-image: url("Marble\ 5.svg");
            background-color: rgb(24, 23, 23);
            font-family: 'Poppins', sans-serif;
        }
        .nav{
    width: 90vw;
    height: 100px;
    padding: 0vw 4vw;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #dadada ; 
    
}
.nav2{
    display: flex;
    gap: 3vw;
}
.nav h2{
    font-size: 2vw;
    font-weight: 800;
}
.nav2 a{
    text-decoration: none;
    font-size: 1vw;
    font-weight: 700;
    color: #FFFFFF;
    font-family: 'Noto Sans', sans-serif;
}
.nav2 a:hover{
    color: #FFB219;
    transition: 0.5s;
}
.nav2 i{
    font-size: 1.4vw ;
    font-weight: 900;
    display: none;
}

.topbtn{
    width: 140px;
    height: 45px;
    background-color: #FF9F00;
    margin-top: -11px;
    font-weight: 600;
    border: none;
}
.topbtn a{
    color: black;
}

.topbtn a:hover{
    color: #ffffff;
    transition: 0.5s;
}

.content{
    width: 100%;
    height: calc(98vh - 100px);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 1rem;
}

.heading{
    display: flex;
    width: 80%;
    justify-content: center;
    font-family: "Noto Sans", sans-serif;
    font-size: 38px;
    font-weight: 600;
    margin-top: -20px;
    color: white;
}

span{
    color: #FFB219;
}
.box{
    width: 1205px;
    height: 80%;
    /* background-image : url("../images/Rectangle.svg"); */
    background-color: #2a2a2d;
    border-radius: 8px;
    display: flex;
    align-items: center;
    border-radius: 15px;
    
   
    
}

.innerBox{
    width: 60%;
    height: 95%;
    margin-left: 1rem;
}
.innerBox .top{
    display: flex;
    flex-direction: column;
    font-family: "Plus Jakarta Sans", sans-serif;
    color: white;
}
.logo{
    width: 50%;
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.innerBox .top{
    display: flex;
    flex-direction: column;
    font-family: "Plus Jakarta Sans", sans-serif;
    color: white;
    padding-left: 5rem;
    width: 25vw;
}

.toggle{
    width: 50%;
    display: flex;
    gap: 2rem;
    height: 3vw;
    padding-left: 5rem;
}

.toggle button{
    width: 121px;
    height: 40px;
    border: none;
    font-size: 16px;
    font-weight: 600;
    background-color: #fdfdfc;
    border-radius: 8px;
}


.innerBox form{
    display: flex;
    flex-direction: column;
    font-family: "Inter", sans-serif;
    gap: 1rem;
    margin-top: 1.5rem;
    padding-left: 5rem;
}

form input[type="text"] , form input[type="password"]{
    width: 448.94px ; 
    height: 60.85px;
    padding-left: 1rem;
    border-radius: 10px;
    border: none;
    background-color: #B4B4B4;
    font-size: 17px;
    color: white;
}

form .forgot{
    display: flex;
    width: 77%;
    justify-content: space-between;
    margin-top: 1rem;
    color: rgb(255, 255, 255);
}

.forgot a{
    text-decoration: none;
    font-size: 17px;
    color: rgb(255, 255, 255);
    cursor: pointer;
}
form input[type="submit"]{
    width: 448.94px ; 
    height: 60.85px;
    background-color: #232429;
    border: none;
    font-size: 23px;
    color: #FFB219;
    border-radius: 10px;
    margin-top: 2rem;
}
label{
    font-size: 18px;
    margin-left: 0.5rem;
}
    </style>
    <div class="main">

        <!-- Navbar Starts from here  -->

        <div class="nav">
            <img src="../images/word mark(orange).svg" height="100px" style="margin-top: 30px;">
           
            <div class="nav2">
                <a href="../html/index.html">Home</a>
                <a href="#about">About</a>
                <a href="../html/signup.html">Sign Up</a>
                <a href="#">Contact Us</a>
                <button class="topbtn"> <a href="../php/login.php">Sign In</a></button>
                
                <i class="ri-menu-3-fill"></i>
            </div>
        </div>

        <div class="content">

            <div class="heading">
                <p>You are <span>just</span> a Step <span>away.</span></p>
            </div>

            <div class="box">

                <div class="innerBox">

                    <div class="top">
                        <h1 style="font-size: 48px;" id="heading">Login <span>now</span></h1>
                    </div>
                    <div class="toggle">
                        <button id="user" style="background-color: #FF9F00;">User</button>
                        <button id="worker">Worker</button>
                        
                    </div>

                    <form class="form"  action="../php/logincheck.php" method="POST"  >

                    

                        <input type="text" name="username" id="username" placeholder="Username" value = "<?php if(isset($_COOKIE['usernamecookie'])){ echo ' ' . $_COOKIE['usernamecookie'] ;}?>" required>

                        <input type="password" id="password" placeholder="Password" name = "password" value = "<?php if(isset($_COOKIE['passwordcookie'])){ echo ' ' . $_COOKIE['passwordcookie'] ;}?>" required>


                        <div class="forgot">
    
                            <div>
                                <input  type="checkbox" name="rememberme" id="flexCheckDefault">
                                <label > Remember for 7 days </label>
    
                            </div>
                            
                            <a href="../html/forgot.html">Forgot Password ?</a>

    
                        </div>
                    
                    <input type="submit" name = "save" value="Continue" id="btn">    

                </form>


                </div>
                <div class="logo">

                    <img src="../images/Artboard 2@4x 1.svg" alt="" width="400px" >

                </div>

                

            </div>


            
        </div>


    </div>


    <script>
       var worker = document.querySelector("#worker");
    var user = document.querySelector("#user");
    var btn = document.querySelector("#btn");

    // Set default background color for user
    user.style.backgroundColor = "#FF9F00";

    worker.addEventListener("click", function() {
        worker.style.backgroundColor = "#FF9F00";
        user.style.backgroundColor = "#ffffff";
        btn.name = "worker";
    });

    user.addEventListener("click", function() {
        user.style.backgroundColor = "#FF9F00";
        worker.style.backgroundColor = "#ffffff";
        btn.name = "save";
    });
    </script>
    
</body>
</html>