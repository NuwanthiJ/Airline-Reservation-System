<?php
require("./RouteServer.php");
include 'connect.php';
$Flight_ID=$_GET['updateFlight_ID'];
$sql="Select * from `crud` where Flight_ID=$Flight_ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Route_ID=$row['Route_ID'];
$From_Country=$row['From_Country'];
$To_Country=$row['To_Country'];

if(isset($_POST['submit'])){
    $Route_ID=$_POST['Route_ID'];
    $From_Country=$_POST['From_Country'];
    $To_Country=$_POST['To_Country'];

    $sql="update`crud` set Flight_ID=$Flight_ID,Route_ID='$Route_ID',From_Country='$From_Country',To_Country='$To_Country' where Flight_ID=$Flight_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "updated successfully!";
        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
<form method="post">
<div class="from-group">
    <label>Route ID</label>
    <input type="text" class="form-control"placeholder="Enter your Route ID" name="Route_ID" autocomplete="off" value=<?php echo $Route_ID;?>>
</div>

<div class="row-as">
            <div class="col-25">
              <label for="From_Country">From :</label>
            </div>
            <div class="col-75">
              
              <select id="From_Country" name="From_Country" value=<?php echo $From_Country;?>>
                <option value="Colombo-Sri Lanka">Colombo-Sri Lanka</option>
                <option value="Tokyo-Japan">Tokyo-Japan</option>
                <option value="Nagasaki-Japan">Nagasaki-Japan</option>
                <option value="Beihai-China">Beihai-China</option>
                <option value="Seoul-South Korea">Seoul-South Korea</option>
                <option value="Dhaka-Bangladesh">Dhaka-Bangladesh</option>
                <option value="Delhi-India">Delhi-India</option>
                <option value="BangalBangalore-Indiaore">Bangalore-India</option>
                <option value="Mumbai-India">Mumbai-India</option>
                <option value="Male-Maldives">Male-Maldives</option>
                <option value="Sohar-Oman">Sohar-Oman</option>
                <option value="Abu Dhabi-United Arab Emirates">Abu Dhabi-United Arab Emirates</option>
                <option value="Amman-Jordan">Amman-Jordan</option>
                <option value="Chicago-United States">Chicago-United States</option>
                <option value="Victoria-Canada">Victoria-Canada </option>
                <option value="Cagliari-Italy">Cagliari-Italy</option>
                <option value="Bangkok-Thailand">Bangkok-Thailand</option>
                <option value="Melbourne-Australia">Melbourne-Australia</option>
                <option value="Bergen-Norway">Bergen-Norway</option>
                <option value="Christchurch-New Zealand">Christchurch-New Zealand</option>
              </select>
            </div>
          </div>


          <div class="row-as">
            <div class="col-25">
              <label for="To_Country">To :</label>
            </div>
            <div class="col-75">
              <select id="To_Country" name="To_Country" value=<?php echo $To_Country;?>>
                <option value="Colombo-Sri Lanka">Colombo-Sri Lanka</option>
                <option value="Tokyo-Japan">Tokyo-Japan</option>
                <option value="Nagasaki-Japan">Nagasaki-Japan</option>
                <option value="Beihai-China">Beihai-China</option>
                <option value="Seoul-South Korea">Seoul-South Korea</option>
                <option value="Dhaka-Bangladesh">Dhaka-Bangladesh</option>
                <option value="Delhi-India">Delhi-India</option>
                <option value="BangalBangalore-Indiaore">Bangalore-India</option>
                <option value="Mumbai-India">Mumbai-India</option>
                <option value="Male-Maldives">Male-Maldives</option>
                <option value="Sohar-Oman">Sohar-Oman</option>
                <option value="Abu Dhabi-United Arab Emirates">Abu Dhabi-United Arab Emirates</option>
                <option value="Amman-Jordan">Amman-Jordan</option>
                <option value="Chicago-United States">Chicago-United States</option>
                <option value="Victoria-Canada">Victoria-Canada </option>
                <option value="Cagliari-Italy">Cagliari-Italy</option>
                <option value="Bangkok-Thailand">Bangkok-Thailand</option>
                <option value="Melbourne-Australia">Melbourne-Australia</option>
                <option value="Bergen-Norway">Bergen-Norway</option>
                <option value="Christchurch-New Zealand">Christchurch-New Zealand</option>
              </select>
            </div>
          </div>
    
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
        

 
  </body>
</html>