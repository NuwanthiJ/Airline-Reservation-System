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
  <link rel="stylesheet" href="css/adminSchedulesStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div class="row-as1">
      <h3 style="margin: 20px 0 20px 0; ">Schedules</h3>
      <!-- <div class="align-right"> -->
      <a href="AdminScheduleForm.php" ><button class="button2"><b>Add New Shedule</b><i class="fas fa-calendar" style="color: #ffffff; margin: 5px 0 0 8px;"></i></button></a>
      <!-- </div> -->
    </div> <!--row-as1-->
    
    <hr>
    
    <!--Schedules Table-->
    <div style="overflow-x:auto;">
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
        <td>
          <a href="AdminSchedule.php?selected_scheduleNo=<?php echo $row["Schedule_No"]?>"><button class="button3"><b>Update</b></button>
          <a href="AdminSchedule.php?delete_scheduleNo=<?php echo $row["Schedule_No"]?>"><button class="button1" onclick="deleteAlert()"><b>Delete</b></button>
        </td>    
      </tr>
  
      <?php } }?>
    </table>
    </div>
  </div> <!--adminSchedule-->

</body>   
</html>