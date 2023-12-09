<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="../js/sweet.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 

include 'config.php' ;
session_start();

if(isset($_POST['save'])){

    $username=$_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" & $password == "admin"){
       
        $_SESSION['username'] = $username ;
        echo '<script>';
        echo 'ConfirmationAlert("Verified","You are successfully Logined","../php/adminpanel.php")';
        echo '</script>';
        
    }else if($username == "arun123" & $password == "arun123"){
        $_SESSION['username'] = $username ;
        echo '<script>';
        echo 'ConfirmationAlert("Verified","You are successfully Logined","../php/cAdminPanel.php")';
        echo '</script>';

    }else{

        $username_search = "select * from register where username='$username' " ;
        $query = mysqli_query($conn, $username_search);
        $username_count = mysqli_num_rows($query);
        if($username_count){

            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];
            $db_email = $email_pass['email'];
            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode){

                // Checking Whether is the user is Allowed or not 
                $sql2 = "select isAllowed from register where username = '$username' and isAllowed = 1";
                $query2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_num_rows($query2);

                if($row2 == 1){

                    if(isset($_POST['rememberme'])){

                       
                        setcookie("usernamecookie",$username,time()+20); // Note here the time for cookie was 604800sec ( 7 days) but i have dont it manually to 20 sec , for my ease and testing
                        setcookie("passwordcookie",$password,time()+20); // During Time of deployment , 20 should be replaced to 604800sec
                        $_SESSION['username'] = $username ;
                        $_SESSION['password'] = $password;
                        $_SESSION['email']= $email_pass['email'];
                        echo '<script>';
                        echo 'ConfirmationAlert("Verified","You are successfully Logined","../test/test_dashboard.php")';
                        echo '</script>';


                    }else{
                        
                        $_SESSION['username'] = $username ;
                        $_SESSION['password'] = $password;
                        $_SESSION['email'] = $email_pass['email'];
                        echo '<script>';
                        echo 'ConfirmationAlert("Verified","You are successfully Logined","../test/test_dashboard.php")';
                        echo '</script>';

                    }
           
                    
                
                
                }else{
                    echo '<script>';
                    echo 'ErrorAlert("Failed","Permission not granted by admin","../php/login.php")';
                    echo '</script>';
                 
                    
            }

            
        }else{
            echo '<script>';
            echo 'ErrorAlert("Failed","Invalid username or password","../php/login.php")';
            echo '</script>';

        }



    }

    

}

}

?>