<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "assets/css/contact_us.css">
        <script src="assets/js/contact_us.js"></script>
        <title>Document</title>
    </head>
<body> 

<?php include 'header.php'; ?><br><br>

<center>
    <div class="centered">

        <h1 class="center"><u>Contact Us </u></h1>
  
        <p>If you have any questions or any other problems related to our service please contact us..!</P>
  
        <h3>Our 24 Hour Contact Center</h3>
    <p>
        Telephone: <a href="tel:+94821156325">+94356 22 1980</a>
        (Within Sri Lanka: <a href="tel:1980">1980</a>)<br>
        Fax: +94222 33 3111<br>
        Email: <a href="mailto:reservations@srilankanAirways.com">reservations@srilankanAirways.com</a>
    </p>
  
   <image src="">
   <form action="#" method="post" onsubmit="displayAlert()">
 
   <form action="#" method="post">
        <input type="text" name="name" placeholder="Enter Your Name" required>
        <input type="text" name="email" placeholder="Enter Your Email" required>
	    <input type="text" name="Contact Number" placeholder="Enter Your Contact Number" required>
        <textarea name="message" placeholder="Your Inquiries or Questions" rows="4" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
    </div>
</center>

<?php include 'footer.php'; ?> 

</body>
</html>