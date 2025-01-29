<?php include("../Admin/admin_server.php"); ?>
<?php
$conn = new mysqli('localhost', 'root', '', 'sri_lankan_airways');
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./userprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="adminUsers">
    <center>
        <h3>Edit User</h3>
    </center>
    <hr>

    <?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if the email exists in the database
    $sql = "SELECT * FROM `normal_users` WHERE `E-mail` = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['First_Name'];
        $lname = $row['Last_Name'];
        $NIC = $row['NIC'];
        $gender = $row['Gender'];
        $phone = $row['Phone_Number'];
        $address = $row['Address'];
        $pcode = $row['Postal_code'];
        $password = $row['Password'];

        echo "<h2>User Data</h2>";
        echo "<table>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>NIC</th><th>Gender</th><th>Phone</th><th>Address</th><th>Postal Code</th><th>Password</th></tr>";
        echo "<tr><td>$fname</td><td>$lname</td><td>$email</td><td>$NIC</td><td>$gender</td><td>$phone</td><td>$address</td><td>$pcode</td><td>$password</td></tr>";
        echo "</table>";

        echo "<h2>Update User Data</h2>";
        echo "<form action='update_user.php' method='POST'>";
        echo "<input type='hidden' name='email' value='$email'>";
        echo "<label for='fname'>First Name:</label>";
        echo "<input type='text' name='fname' value='$fname' required><br>";

        echo "<label for='lname'>Last Name:</label>";
        echo "<input type='text' name='lname' value='$lname' required><br>";

        echo "<label for='NIC'>NIC:</label>";
        echo "<input type='text' name='NIC' value='$NIC' required><br>";

        echo "<label for='gender'>Gender:</label>";
        echo "<input type='text' name='gender' value='$gender' required><br>";

        echo "<label for='phone'>Phone:</label>";
        echo "<input type='text' name='phone' value='$phone' required><br>";

        echo "<label for='address'>Address:</label>";
        echo "<input type='text' name='address' value='$address'><br>";

        echo "<label for='pcode'>Postal Code:</label>";
        echo "<input type='text' name='pcode' value='$pcode' required><br>";

        echo "<label for='password'>Password:</label>";
        echo "<input type='password' name='password' value='$password' required><br>";

        echo "<input type='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "Email not found.";
    }
}
?>
</div>
</body>
</html>
