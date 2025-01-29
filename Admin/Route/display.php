<?php
require("./RouteServer.php");
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>crud operation2</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
  </head>
  <body>
    <div class="container my-5">
        

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Flight ID</th>
      <th scope="col">Route ID</th>
      <th scope="col">From Country</th>
      <th scope="col">To Country</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
   
while($row=mysqli_fetch_assoc($result)){
    $Flight_ID=$row['Flight_ID'];
    $Route_ID=$row['Route_ID'];
    $From_Country=$row['From_Country'];
    $To_Country=$row['To_Country'];
    echo'<tr>
    <th scope="row">'.$Flight_ID.'</th>
    <td>'.$Route_ID.'</td>
    <td>'.$From_Country.'</td>
    <td>'.$To_Country.'</td>
    <td>
    <button class="btn btn-primary"><a href="update.php? updateFlight_ID='.$Flight_ID.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteFlight_ID='.$Flight_ID.'" class="text-light">Delete</a></button>
    </td>
  </tr>';
}} ?>

</tbody>
</table>

</body>
</html>