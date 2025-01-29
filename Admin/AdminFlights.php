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
  <link rel="stylesheet" href="css/adminFlightsStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
<script>
  function deleteAlert() {
    let text = "Do you want to delete this flight?";
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
  
  <div class="adminFlights">
    <div class="row-af1">
      <h3 style="margin: 20px 0 20px 0; ">Registered Flights</h3>
      <a href="AdminFlightsForm.php" ><button class="button2"><b>Add New Flight</b><i class="fas fa-plane" style="color: #ffffff; margin: 5px 0 0 8px;"></i></button></a>
    </div> <!--row-af1-->
    
    <hr>

    <!--Registers Flights Table-->
    <table >
      <tr>
        <th>Flight ID</th>
        <th>Economic Seats</th>
        <th>Business Seats</th>
        <th>Registered Date</th>
        <th>Action</th>
      </tr>
      <?php
        $sql = "SELECT * FROM flight ";
        $result = mysqli_query($db_connection, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <tr>
        <td><?php echo $row["Flight_ID"]?></td>
        <td><?php echo $row["E_Seat"]?></td>
        <td><?php echo $row["B_Seat"]?></td>
        <td><?php echo $row["Reg_Date"]?></td>
        <td>
          <a href="AdminFlights.php?delete_flightId=<?php echo $row["Flight_ID"]?>"><button class="button1" onclick="deleteAlert()"><b>Remove Flight</b></button>
        </td>
      </tr>
        
      <?php } }?>
      
    </table>
  </div> <!--adminFlights-->

</body>   
</html>