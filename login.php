<?php
require("./Server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <br><br>
    <form class="color" method="post">
        <fieldset>
            <legend><h2>Login</h2></legend>
            <center>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" class="color" placeholder="Enter your E-mail" required><br>
            <label for="Password">Password:</label><br>
            <input type="password" id="Password" name="Password" class="color" maxlength="12" minlength="8" placeholder="Password" required><br><br>
            <input type="checkbox" id="reminder" name="remainder">
            <label for="reminder">Remaind me</label>
            <a href="#">Forgot Password?</a><br><br>
            <button type="submit" class="submit" name="login">Submit</button>
            </center>
        
        <div class="social-login">
            <p class="color">Or log in with:</p>
            <a href="https://www.facebook.com" class="btn">Facebook</a>
            <a href="https://www.gmail.com" class="btn btn-gmail">Gmail</a>
          </div>
        </fieldset> 
    </form><br><br>

    <?php include 'footer.php'; ?>
</body>
</html>