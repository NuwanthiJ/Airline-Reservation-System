<?php
require("../Server.php");

if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}
?>
<?php include("user_server.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="userFlightScheduleStyle.css">
    <link rel="stylesheet" href="userViewBookingStyle.css">
    <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>

<script>
  function deleteAlert() {
    let text = "Do you want to remove schedule?";
    if (confirm(text) == true) {
      text = "You pressed OK!";
    } else {
      text = "You canceled!";
    }
  }
</script>  

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
            Manage My Booking
          </h1><br><br>
        </div>
          
        <div class="adminSchedule">
          <table >
            <tr>
              <th>Full Name</th>
              <th>Email</th>
              <th>Trip Type</th>
              <th>Class</th>
              <th>Adults</th>
              <th>Departure Date</th>
              <th>Action</th>
            </tr>
            
            <?php
                $currentDate = date('Y-m-d'); // generate today date
                $user_Id = $_SESSION['u_ID'];
                $sql = "SELECT * FROM  booking WHERE Departure_Date > '$currentDate' AND User_ID = '$user_Id'"; // select future bookings
                $result = mysqli_query($db_connection, $sql);

                if (mysqli_num_rows($result) > 0) {

                  while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["Full_Name"]?></td>
                <td><?php echo $row["Email"]?></td>
                <td><?php echo $row["Trip_Type"]?></td>
                <td><?php echo $row["Class"]?></td>
                <td><?php echo $row["Adults"]?></td>
                <td><?php echo $row["Departure_Date"]?></td>
                <td>
                  <a href="UserViewBooking.php?cancel_bookingId=<?php echo $row["Reservation_ID"]?>"><button class="button1"><b>Cancel</b></button></a> 
                </td>   
            </tr>

            <?php } } ?>
        
          </table>
        </div> <!--adminSchedule-->
      </div> 
    </div> <!--usercontainer-->
  </div> <!--usercard-->
</body>
</html>