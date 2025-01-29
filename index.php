<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "assets/css/index.css">
        <script src="assets/js/index.js" defer></script>
        <title>Home - Srilanakan Airways</title>
    </head> 
    <body>

    <?php include 'header.php'; ?> <br> 

    <div class="heading">
        <center><h1 class="h-color" style="color: black;">Book Your Dreams Now...!</h1></center>
    </div>

    <section class="container-img">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="1" src="assets/images/Logo/1.png" alt="firstbanner"/>
                <img id="2" src="assets/images/Logo/2.png" alt="secondbanner"/>
                <img id="3" src="assets/images/Logo/3.png" alt="thirdbanner"/>
                <img id="4" src="assets/images/Logo/4.png" alt="forthbanner"/>
            </div>
        </div>
    </section><br><br>

    <div class="h-color">
        <center><h2>Top Reginal Destinations</h2></center>
    </div>

    <div class="index-body">
    <!-- Card Swiper -->
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="assets/images/byronbay.jpg" alt="img" draggable="false"></div> 
            <h2>Byron Bay</h2>
            <p>New South whales, Australia</p>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/dubai.jpg" alt="img" draggable="false"></div>
            <h2>Dubai</h2>
            <p>The Jumeirah Hotel, Dubai</p>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/hongkong.jpeg" alt="img" draggable="false"></div>
            <h2>Hong Kong</h2>
            <p>Hong Kong, China </p>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/japan.jpg" alt="img" draggable="false"></div>
            <h2>Japan</h2>
            <p>Mount Fujii, Japan</p>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/moldives.jpg" alt="img" draggable="false"></div>
            <h2>Moldives</h2>
            <p>Hard Rock Hotel, Moldives</p>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/sydney.jpg" alt="img" draggable="false"></div>
            <h2>Sydney</h2>
            <p>Sydney Opera House, Australia</p>
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    </div>

    <?php include 'footer.php'; ?> 

    </body>
</html>