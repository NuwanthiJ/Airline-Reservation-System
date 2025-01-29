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
  <link rel="stylesheet" href="css/adminIndexStyle.css">
  <link rel="stylesheet" href="css/adminFeedbackStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
<script>
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
  
  <div class="adminfeedback">
    <div class="row-afb">
      <h3 style="margin: 20px 0 20px 0; ">Feedbacks</h3>
    </div> <!--row-afb-->
    
    <hr>

    <!--Registers Flights Table-->
    <table >
      <tr>
        <th>Email</th>
        <th>Rating</th>
        <th>Comment</th>

      </tr>
       <?php
        $sql = "SELECT * FROM feedback ";
        $result = mysqli_query($db_connection, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        
      ?>

      <tr>
        <td><?php echo $row["Email"]?></td>
        <td><?php echo $row["Rating"]?></td>
        <td><?php echo $row["Comment"]?></td>
      </tr>  
      <?php } } ?>
    </table>
  </div> 

</body>   
</html>