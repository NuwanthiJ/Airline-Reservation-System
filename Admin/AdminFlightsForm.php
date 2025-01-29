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
  <link rel="stylesheet" href="css/adminFlightsFormStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
<script>
  function flightAlert() {
    alert("Flight added successfully!");
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
  
  <div class="adminFlights">
    <h3 style="margin: 40px 0; ">Add New Flight</h3>
    <hr>
    <!--Adding new  Flights form-->
    <div class="container-af">
        <form action="AdminFlights.php" method="post">
          <div class="row-af">
            <div class="col-25">
              <label for="fID">Flight ID :</label>
            </div>
            <div class="col-75">
              <input type="text" id="fId" name="fID" placeholder="Registered flight id number" required>
            </div>
          </div>
          <div class="row-af">
            <div class="col-25">
              <label for="eSeat">Economic Seats :</label>
            </div>
            <div class="col-75">
              <input type="text" id="eSeat" name="eSeat" placeholder="No of economic seats" required>
            </div>
          </div>
          <div class="row-af">
            <div class="col-25">
              <label for="bSeat">Bisuness Seats :</label>
            </div>
            <div class="col-75">
              <input type="text" id="bSeat" name="bSeat" placeholder="No of bissuness seats" required>
            </div>
          </div>
          <div class="row-af">
            <div class="col-25">
              <label for="rDate">Registered Date :</label>
            </div>
            <div class="col-75">
              <input type="date" id="rDate" name="rDate" placeholder="MM/DD/YYYY" required>
            </div>
          </div>
          <br>
          <div class="row-af">
            <button type="submit" class="submit-af" name="add_flight" onclick="flightAlert()">Submit</button>
          </div>
        </form>
      </div>
      

  </div> <!--adminUsers-->

</body>   
</html>