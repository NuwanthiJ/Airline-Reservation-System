<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "assets/css/rate us.css">
        <title>Rate us</title>
    </head>
    <body>
          
    <?php include 'header.php'; ?>  <br><br>

    <center>
    <div class="center-container">
        <div class="center">

            <h1><u>Service Customer Feedback Form</u></h1><br><br>

            <h3 class="E-mail">Enter Your E-mail</h3>

            <input type="text" name="email" placeholder="Enter Your Email" required>
            <h3>Would You Recommend Our Service To Your Family / Employee Or Other Parties..?</h3>

            <input name="YesNo" type="radio" value="Yes"> Yes
            <input name="YesNo" type="radio" value="No" checked> No

            <form action="#" method="post">
                <label for="rating">
                    <h3>Rate your Recommendation From Our Service : </h3>
                </label>
                <select name="rating" id="rating" required>
                    <option value="">-- Select --</option>
                    <option value="5">Excellent</option>
                    <option value="4">Good</option>
                    <option value="3">Average</option>
                    <option value="2">Fair</option>
                    <option value="1">Poor</option>
                </select>

                <label for="comments">
                    <h3>Do you have any suggestions to improve our service better ...?</h3>
                </label>
                <textarea name="comments" id="comments" rows="4" class="wide-textarea"></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    </center>

    <?php include 'footer.php'; ?> 

        </body>
</html>