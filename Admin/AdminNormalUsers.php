<?php
require("../Server.php");

if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}
?> 
<?php include("admin_server.php"); ?>
<?php
$conn =new mysqli('localhost','root','','sri_lankan_airways');
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/adminIndexStyle.css">
  <link rel="stylesheet" href="css/adminNomalUsersStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script> 
</head>
<body>
    <!--Admin Left Side Navigation Bar-->  
    <div class="adminnav">
        <h3><center>Admin</center></h3>
        <hr style="width:90%;text-align:center;margin-left:0">
        <i class='fa fa-user-circle-o fa-7x' style='color: white; margin: 15px 10px 15px 65px;'></i>
        <a href="AdminDashboard.php"><i class='fas fa-house-user' style='margin: 15px 10px 15px 15px;'></i>Dashboard</a>
        <a href="AdminFlights.php"><i class='fas fa-plane-departure' style='margin: 15px 10px 15px 15px;'></i>Flights</a>
        <a href="AdminSchedule.php"><i class="fas fa-calendar-alt" style="margin: 15px 10px 15px 15px;"></i>Schedule</a>
        <a href="AdminNormalUsers.php"><i class='fa fa-users' style='margin: 15px 10px 15px 15px;'></i>Users</a>
        <a href="AdminProfile.php"><i class='fa fa-user' style='margin: 15px 10px 15px 15px;' ></i>Profile</a>
        <a href="../login.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout" style="margin: 15px 10px 15px 15px;"></i>Logout</a>
    </div> <!--adminnav-->

    <div class="adminUsers">
    <h3>Admin Users</h3>
    <hr>
    <!--Registers Users Table-->
    
    <table>
      <tr>
        <th>User ID</th>
        <th>First N.</th>
        <th>Last N.</th>
        <th>Email</th>
        <th>NIC</th>
        <th>Gender</th>
        <th>Phone No.</th>
        <th>Address</th>
        <th>Postal code</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    <?php 
    $sql = "SELECT * FROM `normal_users`";
    $result=mysqli_query($conn,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id = isset($row['User_ID']) ? $row['User_ID'] : '';
        $fname = isset($row['First_Name']) ? $row['First_Name'] : '';
        $lname = isset($row['Last_Name']) ? $row['Last_Name'] : '';
        $email = isset($row['E-mail']) ? $row['E-mail'] : '';
        $NIC = isset($row['NIC']) ? $row['NIC'] : '';
        $gender = isset($row['Gender']) ? $row['Gender'] : '';
        $phone = isset($row['Phone_Number']) ? $row['Phone_Number'] : '';
        $address = isset($row['Address']) ? $row['Address'] : '';
        $pcode = isset($row['Postal_code']) ? $row['Postal_code'] : '';
        $password = isset($row['Password']) ? $row['Password'] : '';

        echo '<tr>
        <th scope="row">'.htmlspecialchars($id).'</th>
        <td>'.htmlspecialchars($fname).'</td>
        <td>'.htmlspecialchars($lname).'</td>
        <td>'.htmlspecialchars($email).'</td>
        <td>'.htmlspecialchars($NIC).'</td>
        <td>'.htmlspecialchars($gender).'</td>
        <td>'.htmlspecialchars($phone).'</td>
        <td>'.htmlspecialchars($address).'</td>
        <td>'.htmlspecialchars($pcode).'</td>
        <td>'.htmlspecialchars($password).'</td>
        <td>
        <a href="./user/edit_user.php?id='.urlencode($id).'"><i class="fas fa-edit" style="color: blue;"></i></a>
        <a href="./user/delete_user.php?id='.urlencode($id).'"><i class="fas fa-trash" style="color: red;"></i></a>
        </td>
        </tr>';
      }
    }
    ?>
      
    </table>
  </div> <!--adminUsers-->

</body>   
</html>
