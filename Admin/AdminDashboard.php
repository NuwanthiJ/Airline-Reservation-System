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
<link rel="stylesheet" href="css/adminDashboardStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
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

<div class="adminmain">
  <div class="row-ad3">
    <h2>Admin Dashboard</h2>
    <button class="emailTag"><?php echo $_SESSION['email']?><i class="fa fa-user" aria-hidden="true" style="margin: 15px 10px 15px 15px;"></i></button>
  </div>
  <hr>

  <!--Admin Dashboard Cards-->
  <!--Row 1-->
  <div class="row-ad1">
    <div class="col-ad1">
    <div class="admincard">
        <div class="admincontainer">

          <?php 
            
            $sql = "SELECT COUNT(User_ID) AS UserCount FROM users WHERE Utype = 0"; 
            $result = mysqli_query($db_connection, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <a href="AdminPassengers.php"><h4><i class='fa fa-users'></i><b>Passsengers</b></h4></a>
          <p><b><?php echo $row['UserCount'] ?></b></p> 
          <hr>
          <?php } } ?>
        </div> <!--admincontainer-->
      </div> <!--admincard-->
    </div> <!--col-ad1-->

    <div class="col-ad2">
      <div class="admincard">
        <div class="admincontainer">

          <?php 
            $sql = "SELECT COUNT(Flight_ID) As FlightCount FROM flight"; 
            $result = mysqli_query($db_connection, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <a href="AdminFlights.php"><h4><i class='fas fa-plane-departure' ></i><b>Flights</b></h4></a>
          <p><b><?php echo $row['FlightCount'] ?></b></p> 
          <hr>
          <?php }}?>
        </div> <!--admincontainer-->
      </div> <!--admincard-->
    </div> <!--col-ad2-->
    
    <div class="col-ad3">
      <div class="admincard">
        <div class="admincontainer">
          <?php 
            $sql = "SELECT COUNT(Schedule_No) As ScheduleCount FROM schedule"; 
            $result = mysqli_query($db_connection, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <a href="AdminSchedule.php"><h4><i class="fas fa-calendar-alt"></i><b>Schedule</b></h4></a> 
          <p><b><?php echo $row['ScheduleCount'] ?></b></p> 
          <hr>
          <?php }} ?>

        </div> <!--admincontainer-->
      </div> <!--admincard-->
    </div> <!--col-ad3-->
  </div> <!--row-ad1-->
<!--Row 2--> 

  <div class="row-ad2">
    <div class="col-ad1">
      <div class="admincard">
        <div class="admincontainer">
        <?php 
            $sql = "SELECT COUNT(Route_ID) As RouteCount FROM route"; 
            $result = mysqli_query($db_connection, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
          <a href="Route/user.php"><h4><i class="fa fa-map-marker"></i><b>Routes</b></h4></a> 
          <p><b><?php echo $row['RouteCount'] ?></b></p> 
          <hr>
          <?php }}?>
        </div> <!--admincontainer-->
      </div> <!--admincard-->
    </div> <!--col-ad1-->  
    <div class="col-ad2">
      <div class="admincard">
        <div class="admincontainer">

            <?php 
            $sql = "SELECT COUNT(Reservation_ID) As BookingCount FROM booking"; 
            $result = mysqli_query($db_connection, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
           
           <a href="AdminBooking.php"><h4><i class='fa fa-book' ></i><b>Bookings</b></h4></a>
          <p><b><?php echo $row['BookingCount'] ?></b></p> 
          <hr>
          <?php }}?>
          </div> <!--admincontainer-->
         </div> <!--admincard-->
      </div> <!--col-ad2-->  
        
    <div class="col-ad3">
      <div class="admincard">
        <div class="admincontainer">
        <a href="AdminFeedback.php"><h4><i class="fas fa-comment-dots"></i><b>Feedbacks</b></h4></a>
          <p><b>50</b></p> 
          <hr>
        </div> <!--admincontainer-->
      </div> <!--admincard-->
    </div><!--col-ad3-->
  </div> <!--row-ad2--> 
</div> <!--adminmain-->

</body>
</html> 
