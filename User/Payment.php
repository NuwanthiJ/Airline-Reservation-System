<?php
require("../Server.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Payment.css">
  
  <style>
    /* Your additional styles here */
  </style>
 

  
</head>
<body>

<div class="navbar-user">
    <a href="UserDashboard.php"><i class="fa fa-home" style="color: white; margin: 15px 20px 15px 20px;"></i><b>Home</b></a>
    <a href="UserFlightSchedule.php"><i class="fas fa-calendar-alt" style="color: white; margin: 15px 20px 15px 20px;"></i>Flight Schedule</a>
    <a href="UserViewBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>View Booking</a>
    <a href="UserViewHistoryBooking.php"><i class='fas fa-book' style="color: white; margin: 15px 20px 15px 20px;"></i>Manage History</a>
</div>

<div class="viewBookingcard">
    <div class="usercontainer"> 
        <div style="overflow-x:auto;"></div>
    
    <div class="bookingcard">
        <div class="usercontainer">
          <h1 style="margin: 10px; font-family: 'Times New Roman', Times, serif; color: darkslategray;">
          </h1> 
          <form action="UserViewBooking.php">
            <div class="container">

                  <!-- Your form content here -->
          </div>
        </form>
      </div>
    </div>
 
    
    <fieldset>
      <legend>
        <h1 style="font-size: 50px;color:black;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Make Your Payment Here</h1>
      </legend>

      <div class="bg-img">  
        <form action="UserDashboard.php" class="container">
          <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;text-align: center;">Payment Form</h1><br><br>

          <label for="Name"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="name" required>
          <label for="Registration Number"><b>Registration Number</b></label>
          <input type="text" placeholder="Enter Registration Number" name="Registration Number" required>
          <label for="E-mail"><b>E-mail</b></label>
          <input type="text" placeholder="E-mail" name="E-mail" required>

          <div class="col-50">
            
            <label for="fname"><b>Accepted Cards</b></label>
            <div class="icon-container"><br><br>
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div><br><br>
            <label for="cname"><b>Name on Card</b></label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum"><b>Credit card number</b></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

            <label for="expmonth"><b>Exp Month</b></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear"><b>Exp Year</b></label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv"><b>CVV</b></label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
              
    
              <form action="UserDashboard.php">
                <input style="border-radius: 10px" type="submit" value=" Pay " class="btn">
              </form>
          </div>
        </form>
      </div>
    </fieldset>

</div>
</div>
          

</body>
</html>
