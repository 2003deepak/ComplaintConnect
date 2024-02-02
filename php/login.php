<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>
    <link rel="stylesheet" href="../css/login.css">



    
    <title>Document</title>

</head>
<body>
    <div class="content">

        <div class="main_form">

            <form action="../php/logincheck.php" method="POST">

                <h1>Welcome Back!</h1>
            <p class="heading">Enter your Credentials to access your account</p>
    
            <p class="heading_label1">Username</p>
            <input type="text" placeholder="  Enter your username" name = "username" value = "<?php if(isset($_COOKIE['usernamecookie'])){ echo ' ' . $_COOKIE['usernamecookie'] ;}?>" required>
            <p class="heading_label2">Password</p>
            <input type="password" placeholder="  Enter your password" name = "password" value = "<?php if(isset($_COOKIE['passwordcookie'])){ echo ' ' . $_COOKIE['passwordcookie'] ;}?>" required>

            <input class="form-check-input" type="checkbox" name="rememberme" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault"> Remember for 7 days </label>
    
            <a href="../html/forgot.html" class="forgot">Forgot Password ?</a>
    
            <input type = "submit" value="Login" name = "save" class="btn1">
            <br>
            <input type = "submit" value="Login For Worker Temp" name = "worker" class="btn1">
            <div class="line1"></div>
            <p style="display: inline-block;font-size: 14px;">or</p>
            <div class="line2"></div>

        </div>
    
        <div class="bg_photo"></div>

        <div class="row">
            
              <a class="" href="#" role="button" style="text-transform:none">
                <img width="20px" style="margin-bottom:-5px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                Login with Google
              </a>
            
          </div>
        




            </form>

            

    </div>



    
    

    
</body>
</html>