<?php
require("./Server.php");

if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}
?> 
<?php include("../admin_server.php"); ?>
<?php
$conn =new mysqli('localhost','root','','sri_lankan_airways');
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./edit_user.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script> 
</head>
<body>

    <div class="adminUsers">
    <center><h3>Edit User</h3></center>
    <hr>

    <?php
    // Check if the user ID is provided in the query parameter
    if (isset($_GET['id'])) {
      $user_id = $_GET['id'];
      
      // Retrieve the user details from the database
      $sql = "SELECT * FROM `normal_users` WHERE `user_id` = '$user_id'";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['First_Name'];
        $lname = $row['Last_Name'];
        $email = $row['E-mail'];
        $NIC = $row['NIC'];
        $gender = $row['Gender'];
        $phone = $row['Phone_Number'];
        $address = $row['Address'];
        $pcode = $row['Postal_code'];
        $password = $row['Password'];
        ?>
        
        <form action="./update_user.php" method="POST">
            <fieldset>
                <center>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" value="<?php echo $fname; ?>" required><br>

                <label for="lname">Last Name:</label>
                <input type="text" name="lname" value="<?php echo $lname; ?>" required><br>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $email; ?>" required><br>

                <label for="NIC">NIC:</label>
                <input type="text" name="NIC" value="<?php echo $NIC; ?>" required><br>

                <label for="gender">Gender:</label>
                <input type="text" name="gender" value="<?php echo $gender; ?>" required><br>

                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>" required><br>

                <label for="address">Address:</label>
                <input type="text" name="address" value="<?php echo $address; ?>"><br>

                <label for="pcode">Postal Code:</label>
                <input type="text" name="pcode" value="<?php echo $pcode; ?>" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" value="<?php echo $password; ?>" required><br>
                </center>

                <input type="submit" value="Update">
            </fieldset>
        </form>

        <?php
      } else {
        echo "Failed to fetch user details.";
      }
    } else {
      echo "User ID not provided.";
    }
    ?>
  </div> <!--adminUsers-->
</body>   
</html>
