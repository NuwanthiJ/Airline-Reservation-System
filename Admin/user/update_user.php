<?php
require("./Server.php");

if (!isset($_SESSION['email'])) {
  header("location:../login.php");
  exit();
}
?> 
<?php include("../admin_server.php"); ?>
<?php
$conn = new mysqli('localhost', 'root', '', 'sri_lankan_airways');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the user ID and updated details from the form
  $user_id = $_POST['user_id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $NIC = $_POST['NIC'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $pcode = $_POST['pcode'];
  $password = $_POST['password'];

  // Update the user details in the database
  $sql = "UPDATE `normal_users` SET `First_Name` = '$fname', `Last_Name` = '$lname', `E-mail` = '$email', `NIC` = '$NIC', `Gender` = '$gender', `Phone_Number` = '$phone', `Address` = '$address', `Postal_code` = '$pcode', `Password` = '$password' WHERE `user_id` = '$user_id'";

  if ($conn->query($sql) === TRUE) {
    echo "User details updated successfully.";
    // Redirect back to the previous page
    header("Location: ../AdminNormalUsers.php");
  } else {
    echo "Error updating user details: " . $conn->error;
  }
}

$conn->close();
?>
