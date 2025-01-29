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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Check if the user ID is provided in the query parameter
  if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM `normal_users` WHERE `user_id` = '$user_id'";

    if ($conn->query($sql) === TRUE) {
      echo "User deleted successfully.";
      // Redirect back to the previous page
      header("Location: ".$_SERVER['HTTP_REFERER']);
    } else {
      echo "Error deleting user: " . $conn->error;
    }
  } else {
    echo "User ID not provided.";
  }
}

$conn->close();
?>
