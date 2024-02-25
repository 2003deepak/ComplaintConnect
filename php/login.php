<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Poppins:wght@400;500&display=swap" rel="stylesheet">


    <!-- Plus Jakarta Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body> 

    <style>

        body{
            background-color: #1E1E1E;
            color: white ;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .nav{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100px;
            justify-content: space-between;
            /* background-color: orange; */
        }
        .left_nav{
             width: 400px;
             height: 100px;
             padding-left: 8rem;
             /* background-color: pink; */
             display: flex;
             
        }
        .right_nav{
             width: 50vw;
             height: 100px;
             /* padding-left: 8rem; */
             /* background-color: aqua; */
             display: flex;
             margin-right: 2rem ;
             justify-content: flex-end;
             align-items:center;
             
        }
        ul{
            list-style-type: none;
            font-size: 22px;
            font-family: 'Poppins', sans-serif;
        }

        .nav-content ul{
            display: flex;
            gap:4.5rem;
        }
        .nav-content a{
            color: white;
            text-decoration: none;
        }
        .left_nav img{
            width: 70% ; ;
        }

        .main{
            width: 65vw;
            height: 70vh;
            display: flex;
            margin-top: 4rem;  
            align-items: center;
            background: linear-gradient(to bottom right, #414249, #060004);
            border-radius: 30px;
        }
        .login{
            width: 30vw;
            height: 85%;
            margin-left: 4rem;
            background: linear-gradient(to bottom right, rgba(231, 231, 234, 0.4), rgba(255, 255, 255, 0));
            /* background: linear-gradient(10deg, rgba(231, 231, 234, 0.4), rgba(255, 255, 255, 0)); */
            border: 1px solid rgba(255, 255, 255, 0.22);
            box-shadow: 0 0 5px rgba(15, 17, 19, 0.1);
            border-radius: 43px;
            font-family: "Plus Jakarta Sans", sans-serif;
            
            
            
        }
        a{
            text-decoration: none;
            /* color: #B4B4B4 ;  This is the og color used , but due to not implementing box shadow changing it to black*/ 
            color: black;
            font-weight: 600;
        }

        .logo{
            width: calc(100% - 35vw);
            height: 85%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: pink; */
            
        }
        .logo img{
            width: 155%;
            margin-top: -5rem;
            margin-left: 5rem;
        }

        .form{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.2rem;
        }
        .register{
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }

        .form .forgot{
            display: flex;
            justify-content: left;
            width: 82%;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            
        }

       

        input[type="text"] {
            width: 80%;
            height: 60.97px;
            padding-left: 1rem;
            background-color: #B4B4B4;
            border: none;
            
        }
        input[type="password"]{
            width: 80%;
            height: 60.97px;
            padding-left: 1rem;
            background-color: #B4B4B4;
            border: none;
        }
        .form input[type="submit"]{
            width: 83%;
            height: 60.97px;
            font-size: 20px;

            background : #232429;
            background: linear-gradient(90deg, rgb(35, 36, 41,0.9)), rgba(234, 234, 234, 0.2);
            border: 1px solid rgba(234, 234, 234, 1);
           
            color: #aeaeae;
            box-shadow: 0 10px 40px rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(40px);

        }
        .content{
            
            margin-left: 3rem;
        
        }
        
        i{
            font-size: 20px;
            visibility: hidden;
        }
        .forgot{
            display: flex;
            gap: 8rem;
            width: 95%;
            height: 2rem;
            /* justify-content: space-between; */
            align-items: center;
            /* background-color: orange; */
        }
        .forgot label{
            color: black;
            font-weight: 600;
        }
    </style>

    <div class="nav">
        <div class="left_nav">
            <img src="/images/try.svg" alt="" srcset="">

        </div>
        <div class="right_nav">

            <div class="nav-content">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="forgot.php">Forgot Password</a></li>
                    <li><a href="resetPassword.php">Reset Password</a></li>
                </ul>

            </div>
            </div>
            
        </div>
    </div>

    <div class="main">

        <div class="login">

            <div class="content">
                <h1>Login</h1>
                <h2>to get started</h2>
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
                    
                    <input type="submit" name = "save" value="Continue">
                    <input type="submit" name = "worker" value="Continue For Worker Temp">

                </form>
            

            <div class="register">
                <a href="">New User ? Register</a>
            </div>


        </div>

        <div class="logo">

            <img src="/images/big-logo.png" alt="">


        </div>

    </div>

    
    
    
</body>
</html>