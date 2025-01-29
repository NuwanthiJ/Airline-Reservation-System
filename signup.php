<?php
$conn =new mysqli('localhost','root','','sri_lankan_airways');
?>
<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $NIC = $_POST['NIC'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pcode = $_POST['pcode'];
    $password = $_POST['password'];

    $sql = "INSERT INTO normal_users (First_Name, Last_Name, `E-mail`, NIC, Gender, Phone_Number, Address, Postal_code, Password)
            VALUES ('$fname', '$lname', '$email', '$NIC', '$gender', '$phone', '$address', '$pcode', '$password')";

    $result = mysqli_query($conn, $sql);
    if($result) {
        header ("Location: ./User/UserDashboard.php");
    } else {
        die(mysqli_error($conn));
    }
}

// Close the connection
mysqli_close($conn);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/signup.css">
    <title>Sign-up</title>
</head>
<body> 

<?php include 'header.php'; ?> <br><br>

<form method="post" class="color" >
    <fieldset>
        <legend><h2>Sign-up</h2></legend>
        <center>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" class="color" placeholder="Your First Name" required><br><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" class="color" placeholder="Your Last Name" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" class="color" placeholder="Enter your E-mail" required><br><br>
        <label for="NIC">NIC Number:</label><br>
        <input type="text" id="NIC" name="NIC" class="color" placeholder="Your National Identity Card Number" required><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" class="color"><br>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="rather not say">Rather not say</option>
          <option value="custom">Custom</option>
        </select><br><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" class="color" placeholder="Your Phone Number (+94)" required><br><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" class="color" placeholder="Address" required><br><br>
        <label for="Pcode">Postal Code:</label><br>
        <input type="text" id="Pcode" name="pcode" class="color" placeholder="Your PostalCode (8200)" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="10" minlength="8" class="color" placeholder="Password" required ><br><br>
        <label for="repassword">Confirm Password:</label>
        <input type="password" id="repassword" name="repassword" maxlength="10" minlength="8" class="color" placeholder="Re-Enter Password" required ><br><br>
        <p> By Creating an Account, You can Agree to Our Terms and Conditions</p><br>
        <button type="submit" name="submit" class="submit"> Sign-up </button>
        </center>

    <div class="social-login">
        <p class="color">Or Sign-up with:</p>
        <a href="https://www.facebook.com" class="btn">Sign-up with Facebook</a><br><br>
        <a href="https://www.gmail.com" class="btn btn-gmail">Sign-up with Gmail</a><br><br>
        <a href="https://www.twitter.com" class="btn btn-twitter">Sign-up with Twitter</a><br><br>
    </div>
    </fieldset>
</form><br><br>

<?php include 'footer.php'; ?> 

</body>
</html>
