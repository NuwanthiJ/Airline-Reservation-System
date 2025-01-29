<?php
require("../Server.php");

/*if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
<style>

* {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
    background-color: black;
  }
  
  .navbar-user {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
    margin: 50px 87px;
    border-radius: 6px;
  }

  
  .navbar-user a {
    float: left;
    font-size: 20px;
    color: white;
    text-align: center;
    padding: 10px 75px;
    text-decoration: none;
  }

  
  .navbar-user a:hover {
    background-color:darkblue;
  }

  
  .usercard {
    background-color: white;
    box-shadow: 20px 20px 20px 20px rgba(73, 74, 75, 0.2);
    transition: 0.3s;
    width: 900px;
    height: 65  0px;
    border-radius: 10px;
    margin: 50px 300px 50px 330px;
    padding: 20px;

  }
  body,html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("photographer.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align:center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

input[type="submit"] {
        text-align: center;
        padding: 10px 10px 10px 10px;
        background-color:blue;
        color:azure;
        border-style: none;
        border-radius: 10px;
        font-size: larger;
    }
	
    input[type="submit"]:hover {
        
        text-align: center;
        background-color: rgb(3, 3, 63);
        color:azure;
        border-style: none;
        border-radius: 10px;
        font-size: larger;
        } 

        .text-align{
          
          text-align: center;
          /*font-family: 'Times New Roman', Times, serif;*/
          font-family: 'Abril Fatface', serif;

        } 

        /**/

        body {
          background-color: black;
          font-family: cursive;
        }

        .glow {
          font-size: 30px;
          color:lightgoldenrodyellow;
          text-align: center;
          animation: glow 1s ease-in-out infinite alternate;
        }

              @-webkit-keyframes glow {
        from {
          text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
        }
        
        to {
          text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
      }

      .H1{
        color:rgb(10, 118, 118);
        padding: 20px;
        
      }


</style>
</head>
<body>

<div class="navbar-user">
    <a href="UserDashboard.php"><i class="fa fa-home" style="color: white; margin: 15px 20px 15px 20px;"></i><b>Home</b></a>
    <a href="NewUserProfile.php"><i class="fa fa-home" style="color: white; margin: 15px 20px 15px 20px;"></i><b>Profile</b></a>
    <a href="UserFlightSchedule.php"><i class="fas fa-calendar-alt" style="color: white; margin: 15px 20px 15px 20px;"></i>Flight Schedule</a>
    <a href="UserViewBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>View Booking</a>
    <a href="UserViewHistoryBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>Manage History</a>
    
</div>

<div class="usercard">
    <div class="usercontainer">
      </h1>  

      <h3 class="glow">
        Manage your new destination properly with us. Book your seat now for a comfortable flight. You can view all the records of your previous flights with us through our website. If you want to book the flight ticket, press the click on button below

      </h3>

      <div class="hero-image">
        <div class="hero-text">
          <h1 class="H1" style="font-size:20px">We Are Warmly Welcome To Sri Lankan Airways</h1>
    
          <form action="UserNewBooking.php" method="POST">
            <!-- Your form fields go here -->
          </form>
    
          <a href="UserNewBooking.php">
            <i  style="color: white; margin: 15px 20px 15px 20px;"></i>
            
          </a>
          
        </div>
      
    </div> <!--usercontainer-->
</div> <!--usercard-->



  </div>
</body>
</html>