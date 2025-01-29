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
  <link rel="stylesheet" href="css/adminBookingStyle.css">
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
  
  <div class="adminBooking">
    <div class="row-abo1">
      <h3 style="margin: 20px 0 20px 0; ">Bookings</h3>
    </div> <!--row-abo1-->

    <hr>

    <!--Booking Table-->
    <table >
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Trip Type</th>
        <th>Class</th>
        <th>Adults</th>
      </tr>
      <?php
        $sql = "SELECT * FROM booking";
        $result = mysqli_query($db_connection, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <tr>
        <td><?php echo $row["Full_Name"]?></td>
        <td><?php echo $row["Email"]?></td>
        <td><?php echo $row["U_Address"]?></td>
        <td><?php echo $row["Trip_Type"]?></td>
        <td><?php echo $row["Class"]?></td>
        <td><?php echo $row["Adults"]?></td>
      </tr>
        
      <?php } }?>
      
    </table>
  </div> <!--adminBooking-->

</body>   
</html>