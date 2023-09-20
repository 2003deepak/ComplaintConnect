<?php
session_start();
include 'config.php' ; 
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Complaint Connect</title>

    <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     
     <style>
         /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #0A2558;
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 60px;
}
.sidebar .logo-details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
  background: #081D45;
}
.sidebar .nav-links li a:hover{
  background: #081D45;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 150vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px);
  left: 60px;
}
.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
}
.home-section nav .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
nav .search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative;
  padding-top: 104px;
}
.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  display: flex;
  align-items: center;
  justify-content: center;
  width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.home-content .box .cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li{
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button{
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
  background:  #0d3073;
}

#bug{
    color: white;
    display: inline-block;
    margin-top: -37px;
    margin-left: 60px;
}

/* Right box */
.home-content .sales-boxes .top-sales{
  width: 35%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px 0 0;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.sales-boxes .top-sales li{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.sales-boxes .top-sales li a img{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.sales-boxes .top-sales li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sales-boxes .top-sales li .product,
.price{
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar{
    width: 60px;
  }
  .sidebar.active{
    width: 220px;
  }
  .home-section{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section{
    /* width: calc(100% - 220px); */
    overflow: hidden;
    left: 220px;
  }
  .home-section nav{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section nav{
    width: calc(100% - 220px);
    left: 220px;
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes{
    flex-direction: column;
  }
  .home-content .sales-boxes .box{
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .top-sales{
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box{
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i{
    display: none;
  }
  .home-section nav .profile-details{
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details{
    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box{
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details{
    display: none;
  }
}
  @media (max-width: 400px) {
  .sidebar{
    width: 0;
  }
  .sidebar.active{
    width: 60px;
  }
  .home-section{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section{
    left: 60px;
    width: calc(100% - 60px);
  }
  .home-section nav{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
  }
}

/* h1{
  margin-top: 7rem;
  display: inline-block;
} */
.registerBox{
    
    height: 500px;
    width: 800px;
    position: absolute;
    top: 15%;
    left: 30%;

}

textarea{
    position: relative;
    left: 136px;
    top: -30px;
}

.dheading{
    font-size: 20px;
    font-weight: 600;

}
select{
    position: relative;
    left: 136px;
    top: -27px;
    width: 20rem;
    font-size: 15px;
}
 input[type="Submit"]{
    
   

    width: 50%;
    height: 40px;
    margin-top: 5rem;
    border: none;
    background-color: #2691d9;
    cursor: pointer;
    color: white;
    font-size: 18px;
    margin-left: 13rem;
    
}
#time{
    position: relative;
    left: 240px;
    top: -30px;
}

.mainform{
  height: 90vh;
  margin-top: 7rem;
  display: inline-block;
 
}

.content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.btn1{
    background: red;
    height: 40px;
    width: 120px;
    border-radius: 13px;
    cursor: pointer;
    
}
.btn2{
    background: green;
    height: 40px;
    width: 120px;
    border-radius: 13px;
    cursor: pointer;
    
}
.profile{

  width:95rem;
  height:80%;
  margin-left: 100px;
  margin-top: 70px;
}
.profile-photo{
  width: 150px;
  height: 150px;
  margin-left: 600px;
  border-radius: 50% ; 
  background-size:auto;
  
 
  
}






/*Second Page ka css */


     </style>
   </head>
<body>
    
 
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Dashboard</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../php/dashboard.php">
            <i class="fas fa-home"></i>
            <span class="links_name">Home</a></span>
          </a>
        </li>
        <li>
            <a href="profile.php">
                <i class="fas fa-user"></i>
                <span class="links_name">Profile</a></span>
            </a>
        </li>
        <li>
          <a href="../php/filecomplaint.php">
            <i class="fas fa-plus"></i>
            <span class="links_name">File Complaint</span>
          </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-wallet"></i>
              <span class="links_name">Complaint Status</span>
            </a>
          </li>

          
         <li>
            <a href="#">
                <i class="fas fa-chart-bar"></i>
                <span class="links_name">Close Complaint</a></span>
            </a>
        </li>
        
      
        <li class="log_out">
          <a href="../php/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">

    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Profile</span>
      </div>

      
      
    </nav>   

    <div class="mainform">

      <form action="">

        <div class="profile-photo">
          
        
        </div>
        <br><br>
        <input type="file" style="position: relative; left: 95px;" id="file" onchange="changeBackgroundImage()" accept="image/*"/>
          <div class="profile">
            
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name = "username"  style = "width:40%;"value="<?php echo $_SESSION['username']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name = "username"  style = "width:40%;"value="<?php echo $_SESSION['password']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name = "username"  style = "width:40%;"value="<?php echo $_SESSION['email']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Building Number</label>
              <br><br>
    
              <?php 
    
    
            
    
               
                $username_search = "SELECT * FROM register WHERE username = '" . $_SESSION['username'] . "'";
                $query = mysqli_query($conn, $username_search);
                $username_count = mysqli_num_rows($query);
                if($username_count){
    
                    $query1 = mysqli_fetch_assoc($query);
                    $building = $query1['building'];
                    $room = $query1['room'];
    
              
                }
    
    
    
    
              ?>
              
              <select class="form-control" id="exampleFormControlSelect1" name="building" style = "width:40%; margin-left:-135px"disabled>
                  <option value="210" <?php if($building == '210') echo 'selected'; ?>>210</option>
                  <option value="110" <?php if($building == '110') echo 'selected'; ?>>110</option>
                  <option value="179" <?php if($building == '179') echo 'selected'; ?>>179</option>
              </select>
  
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Room No</label>
              <br><br>
              <select  class="form-control" name="room" style = "width:40%; margin-left:-135px" disabled>
                <option value = "1" <?php if($room == '1') echo 'selected'; ?>>1</option>
                <option value = "2" <?php if($room == '2') echo 'selected'; ?> >2</option>
                <option value = "3" <?php if($room == '3') echo 'selected'; ?>>3</option>
                <option value = "4" <?php if($room == '4') echo 'selected'; ?>>4</option>
                <option value = "5" <?php if($room == '5') echo 'selected'; ?>>5</option>
              </select>
            </div>
          </div>




      </form>
      

        
     
     
      

    </div>
    
  </section>

  <script>
    function changeBackgroundImage() {
      const fileInput = document.getElementById('file');
      const profilePhoto = document.querySelector('.profile-photo');
      
      if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();
    
        reader.onload = function(e) {
          profilePhoto.style.backgroundImage = `url(${e.target.result})`;
        };
    
        reader.readAsDataURL(fileInput.files[0]);
      }
    }
    </script>


  
    
      
</body>
</html>
