<?php
require("../Server.php");

if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}
?>
<?php include("admin_server.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/adminIndexStyle.css">
  <link rel="stylesheet" href="css/adminScheduleFormStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
<script>
  function alert() {
    alert("Flight Schedule added successfully!");
  }
</script>  
</head>
<body>
 
<!--Admin Left Side Navigation Bar-->  
<div class="adminnav">
    <h3 ><center>Admin</center></h3>
    <hr style="width:90%;text-align:center;margin-left:0">
    <i class='fa fa-user-circle-o fa-7x' style='color: white; margin: 15px 10px 15px 65px;'></i>
    <a href="AdminDashboard.php"><i class='fas fa-house-user' style='margin: 15px 10px 15px 15px;'></i>Dashboard</a>
  <a href="AdminFlights.php"><i class='fas fa-plane-departure' style='margin: 15px 10px 15px 15px;'></i>Flights</a>
  <a href="AdminSchedule.php"><i class="fas fa-calendar-alt" style="margin: 15px 10px 15px 15px;"></i>Schedule</a>
  <a href="AdminNormalUsers.php"><i class='fa fa-users' style='margin: 15px 10px 15px 15px;'></i>Users</a>
  <a href="AdminProfile.php"><i class='fa fa-user' style='margin: 15px 10px 15px 15px;' ></i>Profile</a>
  <a href="../login.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout" style="margin: 15px 10px 15px 15px;"></i>Logout</a>

</div> <!--adminnav-->
  
  <div class="adminSchedule">

    <h3 style="margin: 40px 0; ">Add New Schedule</h3>
    <hr>

    <!--Adding new  Schedule form-->
    <div class="container-as">
        <form action="AdminSchedule.php" method="post">
          
          <div class="row-as">
            <div class="col-25">
              <label for="fID">Flight ID :</label>
            </div>
            <div class="col-75">
              <input type="text" id="fId" name="fID" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="from_country">From :</label>
            </div>
            <div class="col-75">
              
              <select id="from_country" name="from_country">
                <option value="Colombo-Sri Lanka">Colombo-Sri Lanka</option>
                <option value="Tokyo-Japan">Tokyo-Japan</option>
                <option value="Nagasaki-Japan">Nagasaki-Japan</option>
                <option value="Beihai-China">Beihai-China</option>
                <option value="Seoul-South Korea">Seoul-South Korea</option>
                <option value="Dhaka-Bangladesh">Dhaka-Bangladesh</option>
                <option value="Delhi-India">Delhi-India</option>
                <option value="BangalBangalore-Indiaore">Bangalore-India</option>
                <option value="Mumbai-India">Mumbai-India</option>
                <option value="Male-Maldives">Male-Maldives</option>
                <option value="Sohar-Oman">Sohar-Oman</option>
                <option value="Abu Dhabi-United Arab Emirates">Abu Dhabi-United Arab Emirates</option>
                <option value="Amman-Jordan">Amman-Jordan</option>
                <option value="Chicago-United States">Chicago-United States</option>
                <option value="Victoria-Canada">Victoria-Canada </option>
                <option value="Cagliari-Italy">Cagliari-Italy</option>
                <option value="Bangkok-Thailand">Bangkok-Thailand</option>
                <option value="Melbourne-Australia">Melbourne-Australia</option>
                <option value="Bergen-Norway">Bergen-Norway</option>
                <option value="Christchurch-New Zealand">Christchurch-New Zealand</option>
              </select>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="to_country">To :</label>
            </div>
            <div class="col-75">
              <select id="to_country" name="to_country">
                <option value="Colombo-Sri Lanka">Colombo-Sri Lanka</option>
                <option value="Tokyo-Japan">Tokyo-Japan</option>
                <option value="Nagasaki-Japan">Nagasaki-Japan</option>
                <option value="Beihai-China">Beihai-China</option>
                <option value="Seoul-South Korea">Seoul-South Korea</option>
                <option value="Dhaka-Bangladesh">Dhaka-Bangladesh</option>
                <option value="Delhi-India">Delhi-India</option>
                <option value="BangalBangalore-Indiaore">Bangalore-India</option>
                <option value="Mumbai-India">Mumbai-India</option>
                <option value="Male-Maldives">Male-Maldives</option>
                <option value="Sohar-Oman">Sohar-Oman</option>
                <option value="Abu Dhabi-United Arab Emirates">Abu Dhabi-United Arab Emirates</option>
                <option value="Amman-Jordan">Amman-Jordan</option>
                <option value="Chicago-United States">Chicago-United States</option>
                <option value="Victoria-Canada">Victoria-Canada </option>
                <option value="Cagliari-Italy">Cagliari-Italy</option>
                <option value="Bangkok-Thailand">Bangkok-Thailand</option>
                <option value="Melbourne-Australia">Melbourne-Australia</option>
                <option value="Bergen-Norway">Bergen-Norway</option>
                <option value="Christchurch-New Zealand">Christchurch-New Zealand</option>
              </select>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sDepDate">Departure Date :</label>
            </div>
            <div class="col-75">
              <input type="date" id="sDepDate" name="sDepDate" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sDepTime">Departure Time :</label>
            </div>
            <div class="col-75">
              <input type="time" id="sDepTime" name="sDepTime" require>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sReturnDate">Return Date :</label>
            </div>
            <div class="col-75">
              <input type="date" id="sReturnDate" name="sReturnDate" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sReturnTime">Return Time :</label>
            </div>
            <div class="col-75">
              <input type="time" id="sReturnTime" name="sReturnTime" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sEcoFare">Economic Fares :</label>
            </div>
            <div class="col-75">
              <input type="text" id="sEcoFare" name="sEcoFare" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sBsFare">Business Fares :</label>
            </div>
            <div class="col-75">
              <input type="text" id="sBsFare" name="sBsFare" required>
            </div>
          </div>
          <br>
          <div class="row-as">
            <button type="submit" class="submit-as" name="add_schedule" onclick="alert()">Submit</button>
          </div>
        </form>
      </div>
      

  </div> <!--adminSchedule-->

</body>   
</html>