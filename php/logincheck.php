<?php 

include 'config.php' ;
session_start();

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password = $_POST['password'];

    if($username === "admin" && $password === "admin"){
        echo '<script>alert("You are succesfully Logined ")</script>' ;
        $_SESSION['username'] = $username ;
        echo "<script> location.replace('../php/adminpanel.php')</script> ";

    }

    $sql = "select * from register where username = '$username' and password = '$password'" ;
    $sql2 = "select isAllowed from register where username = '$username' and isAllowed = 1";
    $query = mysqli_query($conn,$sql);
    $query2 = mysqli_query($conn,$sql2);

    $row = mysqli_num_rows($query);
    $row2 = mysqli_num_rows($query2);

    
    if($row ==1){

        if($row2 == 1){
           
                echo '<script>alert("You are succesfully Logined ")</script>' ;
                $_SESSION['username'] = $username ;
                echo "<script> location.replace('../php/dashboard.php')</script> ";
            
            
        }else{
            echo '<script>alert("Permission Not given by Admin")</script>' ;
            echo "<script> location.replace('../html/index.html')</script> ";
        }
  
    }else{
         echo '<script>alert("Invalid username or Password ")</script>' ;
         echo "<script> location.replace('../html/login.html')</script> ";
    }
                        
    }
        

?>