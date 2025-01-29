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
    alert("Schedule updated successfully!");
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

    <h3 style="margin: 40px 0; ">Update New Schedule</h3>
    <hr>

    <!--Adding new  Schedule form-->
    <div class="container-as">

        <form action="AdminSchedule.php" method="post">
          
        <?php

          $edit_ScheduleId = $_SESSION['selected_schedule_id'];
          $sql = "SELECT * FROM schedule WHERE Schedule_No='$edit_ScheduleId'";
          $result = mysqli_query($db_connection, $sql);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
          
        ?>

          <div class="row-as">
            <div class="col-25">
              <label for="fID">Flight ID :</label>
            </div>
            <div class="col-75">
              <input type="text" value="<?php  echo $row["Flight_ID"] ?>" id="fId" name="fID" readonly>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="from_country">From :</label>
            </div>
            <div class="col-75">
              <input type="text" value="<?php  echo $row["Start_From"] ?>" id="from_country" name="from_country" readonly>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="to_country">To :</label>
            </div>
            <div class="col-75">
              <input type="text" value="<?php echo $row["End_To"] ?>" id="to_country" name="to_country" readonly>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sDepDate">Departure Date :</label>
            </div>
            <div class="col-75">
              <input type="date" value="<?php echo $row["D_Date"]?>" id="sDepDate" name="sDepDate" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sDepTime">Departure Time :</label>
            </div>
            <div class="col-75">
              <input type="time" value="<?php echo $row["D_Time"]?>" id="sDepTime" name="sDepTime" require>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sReturnDate">Return Date :</label>
            </div>
            <div class="col-75">
              <input type="date" value="<?php echo $row["R_Date"]?>" id="sReturnDate" name="sReturnDate" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sReturnTime">Return Time :</label>
            </div>
            <div class="col-75">
              <input type="time" value="<?php echo $row["R_Time"]?>" id="sReturnTime" name="sReturnTime" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sEcoFare">Economic Fares :</label>
            </div>
            <div class="col-75">
              <input type="text" value="<?php echo $row["E_Fare"]?>" id="sEcoFare" name="sEcoFare" required>
            </div>
          </div>
          <div class="row-as">
            <div class="col-25">
              <label for="sBsFare">Business Fares :</label>
            </div>
            <div class="col-75">
              <input type="text" value="<?php echo $row["B_Fare"]?>" id="sBsFare" name="sBsFare" required>
            </div>
          </div>
          <br>
          <div class="row-as">
            <a href="AdminSchedule.php"><button type="submit" class="submit-as" name="update_schedule" onclick="alert()">Save</button>
          </div>

          <?php } } ?>
        </form>
      </div>
      

  </div> <!--adminSchedule-->

</body>   
</html>