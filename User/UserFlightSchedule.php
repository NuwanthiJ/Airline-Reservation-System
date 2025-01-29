<?php
require("../Server.php");

if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="userFlightScheduleStyle.css">
    <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
<style> 
</style>
</head>
<body>

<div class="navbar-user">
    <a href="UserDashboard.php"><i class="fa fa-home" style="color: white; margin: 15px 20px 15px 20px;"></i><b>Home</b></a>
    <a href="UserFlightSchedule.php"><i class="fas fa-calendar-alt" style="color: white; margin: 15px 20px 15px 20px;"></i>Flight Schedule</a>
    <a href="UserViewBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>View Booking</a>
    <a href="UserViewHistoryBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>Manage History</a>
</div>

<div class="schedulecard">
    <div class="usercontainer"> 
      <div style="overflow-x:auto;">
        <div class="bg-img"><br>
        <h1 style="color:black;text-align: center;padding: 50px;">
          Daily Updates
        </h1><br><br>
        </div>
        <table>
          <tr>
            <th>Flight ID</th>
            <th>From</th>
            <th>To</th>
            <th>Departure Date</th>
            <th>Departure Time</th>
            <th>Return Date</th>
            <th>Return Time</th>
            <th>Economic Fares</th>
            <th>Business Fares</th>
            <th>Action</th>      
          </tr>
          
          <?php
            $sql = "SELECT * FROM  schedule";
            $result = mysqli_query($db_connection, $sql);

            if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
          ?>

         <tr>
          <td><?php echo $row["Flight_ID"]?></td>
          <td><?php echo $row["Start_From"]?></td>
          <td><?php echo $row["End_To"]?></td>
          <td><?php echo $row["D_Date"]?></td>
          <td><?php echo $row["D_Time"]?></td>
          <td><?php echo $row["R_Date"]?></td>
          <td><?php echo $row["R_Time"]?></td>
          <td><?php echo $row["E_Fare"]?></td>
          <td><?php echo $row["B_Fare"]?></td>
          <td><a href="UserNewBooking.php?selected_u_scheduleId=<?php echo $row["Schedule_No"]?>" ><button class="button2"><b>Book</b></button></td></a>
        </tr>
    
        <?php } }?>
        </table>  
    </div> <!--usercontainer-->
  </div> <!--usercard-->
</body>
</html>