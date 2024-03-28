<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">


    <!-- Poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">

    <!-- noto Sans -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Plus Jakarta Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Lilita+One&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap');

html{
    scroll-behavior: smooth;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    font-family: 'Noto Sans', sans-serif;
    
}
body{
    background-image: url("/images/Marble\ 5.svg");
}

.main{
    width: 100vw;
    height: 100vh;     
}
.nav{
    width: 100vw;
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
.content{
    width: 100vw;
    height: calc(100% - 100px);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 1.5rem;
    gap: 2rem;
    

}

.heading{
    font-family: "Noto Sans", sans-serif;
    font-size: 38px;
    font-weight: 600;
    color: white;
}
span{
    color: #FFB219;
}
.box{
    width: 1205px;
    height: 80%;
    background-color: #2a2a2d;
    border-radius: 8px;
    display: flex;
    align-items: center;
    transition: 4s ease-in;
    
   
    
    

}

.login{
    height: 90%;
    width: 50%;
    margin-left: 3rem;
    display: flex;
    justify-content: center;
    align-items: center;
    /* transition: transform 3s; Add transition here */

}
.logo{
    height: 90%;
    width: 43%;
    display: flex;
    justify-content: center;
    align-items: center;
    /* transition: transform 3s; Add transition here */
    
}

.logo img{
    width: 45vw;
    margin-bottom: 6rem;
    
}

.innerBox{
    width: 90%;
    height: 90%;
    background-color: rgba(112, 112, 112, 1);
    border-radius: 18px;
    padding-left: 3rem;
    padding-top: 1rem;
}
.innerBox .top{
    display: flex;
    flex-direction: column;
    font-family: "Plus Jakarta Sans", sans-serif;
    color: white;
}

.innerBox form{
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-top: 1.5rem;
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
    width: 90%;
    justify-content: space-between;
    margin-top: 1rem;
}

.forgot a{
    text-decoration: none;
    font-size: 17px;
    color: black;
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

</head>
<body>

    <div class="main">

        <div class="nav">
            <img src="../images/word mark(orange).svg" height="100px" style="margin-top: 30px;">
            <!-- <h2>Logo</h2> -->
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

                <div class="login">

                    <div class="innerBox">

                        <div class="top">
                            <h1 style="font-size: 48px;" id="heading">Login</h1>
                            <p style="font-size: 20px; font-weight: 400;">to get started</p>
                        </div>

                        <form class="form"  action="../php/logincheck.php" method="POST"  >

                    

                            <input type="text" name="username" id="username" placeholder="Username" value = "<?php if(isset($_COOKIE['usernamecookie'])){ echo ' ' . $_COOKIE['usernamecookie'] ;}?>"  required>

                            <input type="password" id="password" placeholder="Password" name = "password" value = "<?php if(isset($_COOKIE['passwordcookie'])){ echo ' ' . $_COOKIE['passwordcookie'] ;}?>"  required>

    
                            <div class="forgot">
        
                                <div>
                                    <input  type="checkbox" name="rememberme" id="flexCheckDefault">
                                    <label > Remember for 7 days </label>
        
                                </div>
                                
                                <a href="../html/forgot.html">Forgot Password ?</a>

        
                            </div>
                        
                        <input type="submit" name = "save" value="Continue" id="btn">

                        <button href="#" id="change">Change</button>
                        <!-- <input type="submit" name = "worker" value="Continue For Worker Temp"> -->
    
                    </form>

                    </div>

                
        
                </div>
        
                <div class="logo">
        
                    <img src="../images/big-logo.png" alt="">
        
        
                </div>

            </div>


            
        </div>


        

            

            



      
        
    </div>


    <script>
         
         var a = document.getElementById("change");
            var b = document.querySelector(".box");
            var c = document.getElementById("heading");
            var d = document.getElementById("btn");

a.addEventListener("click", () => {
    if(c.innerHTML == "Login"){
        b.style.flexDirection = "row-reverse";
        c.innerHTML = "Worker Login";
        d.name = "worker";
        
    } else {
        b.style.flexDirection = "row";
        c.innerHTML = "Login";
        d.name = "save";
        
    }
});




    

    </script>

    
    
</body>
</html>