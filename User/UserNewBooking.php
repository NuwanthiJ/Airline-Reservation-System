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
<script src="C:/Users/Sajani Hewamanne/Desktop/IWT Assignment/UserNewBookin.php" ></script>
<link rel="stylesheet" href="UserNewBookingStyle.css">
<script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="navbar-user">
    <a href="UserDashboard.php"><i class="fa fa-home" style="color: white; margin: 15px 20px 15px 20px;"></i><b>Home</b></a>
    <a href="UserFlightSchedule.php"><i class="fas fa-calendar-alt" style="color: white; margin: 15px 20px 15px 20px;"></i>Flight Schedule</a>
    <a href="UserViewBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>View Booking</a>
    <a href="UserViewHistoryBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>Manage History</a>
</div>

<div class="bookingcard">
    <div class="usercontainer">
      <h1 style="margin: 10px;font-family: 'Times New Roman', Times, serif;color: darkslategray;"  >
        <i class='fa fa-plane fa-7px' style="margin: 20px; text-align: center;"></i><b>Reserve your seat</b></h1> 
          <div class="container">
          <div class="row">
            <div class="col-75">
              <div class="container">
                <form action="#" method="post">
                <?php
                  $u_scheduleId = $_SESSION['selected_schedule_id'];
                  $sql = "SELECT * FROM schedule WHERE Schedule_No='$u_scheduleId'";
                  $result = mysqli_query($db_connection, $sql);
                  $u_ScheduleNo = $_SESSION['selected_schedule_id'];
                  $u_ID = $_SESSION['u_ID']; 

                      if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                  ?>

                  <div class="row">
                    <div class="col-50"><br>
                      <label for="fullname"><i ></i> Full Name</label>
                      <input type="text" id="fullname" name="fullname" placeholder="John M. Doe">
                      <label for="email"><i ></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="john@example.com">
                      <label for="adr"><i></i> Address</label>
                      <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                      <label for="city"> City</label>
                      <input type="text" id="city" name="city" placeholder="New York">  
                    </div>
                      <div class="row">
                        <div class="col-50">
                        </div>
                        <div class="col-50">
                        </div>
                      </div>
                    </div>
          
                    <label style="font-size:20px" for="cars">From</label>
                    <input type="text" value="<?php echo $row['Start_From'] ?>" id="from" name="from" readonly>
                    <br><br><br>
                    <label   for="to">To:</label>
                    <input type="text" value="<?php echo $row['End_To'] ?>" id="to" name="to" readonly>

                    <br><br><br>

                    <select name="trip_type" id="trip_Type" style="height: 40px; width: 200px;">
                      <option value="Round">RoundTrip</option>
                      <option value="OneWay">OneWayTrip</option>
                      <option value="Multi-Cities">Multi-Cities</option>
                    </select>
                    <br><br>
          
                    <label for="Class" >Class</label>
                    <select name="class_type" id="Class_type" style="height: 40px; width: 200px;">
                        <option value="Business">Business</option>
                        <option value="Economic">Economic</option>    
                    </select>
                    <br><br><br>

                    <label for="adults">Adults(*16):</label>
                    <select name="adults" id="adults" style="height: 40px; width: 200px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </optgroup>
                    </select>
                    <br><br><br>
                    <label for="Departure">Departure</label>
                    <input type="text" value="<?php echo $row['D_Date'] ?>" id="departure" name="departure" readonly>
                    <br><br><br>

                    <label for="Return">Return</label>
                    <input type="text" value="<?php echo $row['R_Date'] ?>" id="return" name="return" readonly>     

                    <br><br><br>
                      <button style="border-radius: 10px" type="submit" value="Confirm Booking" name="add_Booking" class="btn" > Confirm </button>
                  
                  <?php }} ?> 
                </form>
      
              </div>
            </div>  
          </div>
        </div>    
      </div> <!--usercontainer-->
    </div> <!--usercard-->
</body>
</html>