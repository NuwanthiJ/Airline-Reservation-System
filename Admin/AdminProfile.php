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
<link rel="stylesheet" href="css/adminProfileStyle.css">
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

<div class="adminProfile">
  <h2>Admin Profile</h2>
  <hr>
  <!--Admin Profile Cards-->
  <div class="profilecard-ap">
    <div class="card_background_img"></div>
    <div class="card_profile_img"><img src="image/admin_img.png"></div>
    <?php
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db_connection, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <div class="user_details">
        <h3><b><?php echo $row["FirstName"]. " ".$row["LastName"]?></b></h3>
    </div>

    <div class="form-ap">

      <div class="row-ap">
        <div class="col-25">
          <label for="fn">Full name :</label>
        </div>
        <div class="col-75">
          <input type="text" id="fn" name="fID" value="<?php echo $row["FirstName"]. " ".$row["LastName"]?>" required>
        </div>
      </div>
      <div class="row-ap">
        <div class="col-25">
          <label for="email">Email :</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" value="<?php echo $row["Email"]?>"required>
        </div>
      </div>
      <div class="row-ap">
        <div class="col-25">
          <label for="cn">Contact No :</label>
        </div>
        <div class="col-75">
          <input type="text" id="cn" name="phoneNo" value="+94723504510" minlength="10" required>
        </div>
      </div>
      <div class="row-ap">
        <div class="col-25">
          <label for="bd">Birth of Date :</label>
        </div>
        <div class="col-75">
          <input type="date" id="bd" name="bDate" value="1995-01-23">
        </div>
      </div>
      <div class="row-ap">
        <div class="col-25">
          <label for="aDate">Assigned Date :</label>
        </div>
        <div class="col-75">
          <input type="date" id="aDate" name="aDate" value="2023-05-01" required>
        </div>
      </div>
      
    </div>
    <?php } } ?>
  </div>
</div>
  
</div>

</body>
</html> 
