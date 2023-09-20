<?php 

include 'config.php' ;
session_start();

if(isset($_POST['save'])){

    $username=$_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" & $password == "admin"){
        echo '<script>alert("You are succesfully Logined ")</script>' ;
        $_SESSION['username'] = $username ;
        echo "<script> location.replace('../php/adminpanel.php')</script> ";
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

                        echo '<script>alert("You are succesfully Logined ")</script>' ;
                        setcookie("usernamecookie",$username,time()+20); // Note here the time for cookie was 604800sec ( 7 days) but i have dont it manually to 20 sec , for my ease and testing
                        setcookie("passwordcookie",$password,time()+20); // During Time of deployment , 20 should be replaced to 604800sec
                        $_SESSION['username'] = $username ;
                        $_SESSION['password'] = $password;
                        $_SESSION['email']= $email_pass['email'];
                        echo "<script> location.replace('../php/dashboard.php')</script> ";


                    }else{
                        echo '<script>alert("You are succesfully Logined ")</script>' ;
                        $_SESSION['username'] = $username ;
                        $_SESSION['password'] = $password;
                        $_SESSION['email'] = $email_pass['email'];
                        echo "<script> location.replace('../php/dashboard.php')</script> ";

                    }
           
                    
                
                
                }else{
                    echo '<script>alert("Permission Not granted by Admin")</script>' ;
                    echo "<script> location.replace('../php/login.php')</script> ";
            }

            
        }else{
            echo '<script>alert("Invalid username or password")</script>' ;
            echo "<script> location.replace('../php/login.php')</script> ";
        }



    }

    

}

}

?>