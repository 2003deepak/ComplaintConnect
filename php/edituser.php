<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>
  <link rel="stylesheet" href="../css/dashboard.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  
  <style>

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

.accept{
  color: white;
  width: 117px;
}

.accept:hover{
  background: none ; 
}


  </style>

</head>
<body>




  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="https://dynamicmedia.accenture.com/is/image/accenture/accenture-logo-768x768?qlt=85&wid=1200&ts=1689116843273&$auto-png-alpha$&fit=constrain&dpr=off" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="../php/edituser.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">Edit Users</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Complaint Status</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Close Complaint</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Edit Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="../php/logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      

      <section class="main-course">
        <h1>My courses</h1>
        <div class="course-box">

                <table class="content-table">
                <tr>
                  <th>Sno</th>
                  <th>Username</th>
                  <th>Email ID</th>
                  <th>Building No</th>
                  <th>Room No</th>
                  <th>Actions</th>
                </tr>
                <?php

                include 'config.php' ;
                $sql = "select * from register";
                $result = $conn->query($sql);
                $count = 1 ; 
                // Loop through the result set and generate table rows
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                      ?>
                        <tr class="active-row">
                          <td><?php echo $count++ ; ?></td>
                          <td> <?php echo $row["username"] ?>   </td>
                          <td> <?php echo $row["email"] ?> </td>
                          <td> <?php echo $row["building"] ?> </td>
                          <td> <?php echo $row["room"] ?> </td>

                          <?php 
                          if($row["isAllowed"] == 1){
                            ?>
                            <td> <button class="btn1"> <a class = "accept" href="../php/deleteuser.php?id=<?php echo $row['sno']; ?>"> Delete User</a>  </button> </td>
                           

                          <?php
                          }else{
                            ?>
                            <td> <button class="btn2"> <a class = "accept" href="../php/acceptuser.php?id=<?php echo $row['sno']; ?>"> Accept User </a>  </button> </td>
                           
                            <?php
                          }
                          ?>
              
                        </tr>
                        <?php
                    }
                }

                // Close the connection
                $conn->close();
                ?>
            </table>
          
          </div>
        </div>
      </section>
    </section>
  </div>




  

</body>
</html>
