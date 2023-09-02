<?php



session_start();

include 'config.php' ;

$folder = "../uploaded_images";
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];
$folder = "../uploaded_images/".$filename ;

move_uploaded_file($tempname,$folder);

        




if(isset($_POST['save'])){

    // Getting Info
    $username = $_POST['username'];
    
    // Getting building no and room number 
    $username_search = "SELECT * FROM register WHERE username = '" . $_SESSION['username'] . "'";
    $query = mysqli_query($conn, $username_search);
    $username_count = mysqli_num_rows($query);
    if($username_count){

        $query1 = mysqli_fetch_assoc($query);
        $building = $query1['building'];
        $room = $query1['room'];

          
    }
    $complaint_type = $_POST['complaint_group'];
    $subject = $_POST['subject'];
    $desc = $_POST['desc'];
    // Generate the complaint id 
    $random = rand(1000,9999);
    $complaint_id = "C$random";
   

    


  
    $sql = "INSERT INTO complaints(username,building,room,complaint_id,complaint_type,subject,description,folder) VALUES ('$username','$building','$room','$complaint_id','$complaint_type','$subject','$desc','$folder')";

    if ($conn->query($sql) === TRUE) {

        echo "<script> alert('Complaint is filed successfully')</script> " ;

        echo "<script> location.replace('../php/dashboard.php')</script> ";
    
 
   
    }else {
        echo "<script> alert('Complaint is not filed')</script>" ;
        // echo "<script> location.replace('../php/dashboard.php')</script> ";

        echo $conn->error ;
    
    }
}

$conn->close();

?>


       