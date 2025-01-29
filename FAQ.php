<!DOCTYPE html>
<html>
<head>

  <title>Airline Ticket Reservation System - FAQ</title>
  <link rel="stylesheet" href="styles.css">

  <style>
    .usercard {
      background-color: rgb(7, 150, 166);
      box-shadow: 20px 20px 20px 20px rgb(210, 231, 241);
      transition: 0.3s;
      width: 900px;
      height: 1500px;
      border-radius: 10px;
      margin: 50px 300px 50px 330px;
      padding: 20px;
    }

    .read-more {
      display: none;
    }

    .show-more {
      display: inline;
    }
    .usercard {
    /* Existing styles */
  }

  .read-more {
    /* Existing styles */
  }

  .show-more {
    /* Existing styles */
  }

  /* Add the following CSS for the "Read more" button */
  button {
    border-radius: 10px;
    font-size: 20px; /* Increase the font size */
    padding: 10px 20px; /* Adjust the padding for width */
  }


  </style>
  <script>
    function toggleContent(id) {
      var dots = document.getElementById("dots" + id);
      var moreText = document.getElementById("more" + id);
      var btnText = document.getElementById("myBtn" + id);

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }


 
  </script>
</head>
<body style="background-color: whitex">


  <div class="usercard">
    <div class="usercontainer">
      <h1>
        <div class="hero-image">
          <div class="hero-text">
            <div class="container">
              <h1 style="color: rgb(250, 246, 246); font-size:50px; text-align: center;">Frequently Asked Questions</h1><br>
              <h2 style="color: rgb(30, 29, 44); font-size: 30px;">General Questions</h2>
              <hr>
              <ul style="color: white;">
                <li>
                  <h3 style="color: rgb(249, 248, 248); font-size: 20px;">How do I create an account?</h3>
                  <p style="color: rgb(253, 249, 249); font-size: 15px;">
                    Creating an account is easy. Simply click on the "Sign Up" button and fill out the registration form with your details.
                  </p>
                  <p style="color: rgb(252, 247, 247);font-size: 15px;">
                    We have created a form to enter your personal information. We have entered information such as your username, e-mail account, address, gender, etc. into that form. It is presented to you as a way to get a taste of our database information. Yes. We will make sure that the information is never passed into the hands of another person outside of our system.</p>
                  </p>
                  <p id="dots1">...</p>
                  <p id="more1" class="read-more" style="color: rgb(255, 253, 253);font-size: 15px;">
                    You cannot create multiple accounts with the same e-mail address and only one e-mail account is valid. Furthermore, different e-mail addresses limit the access of the same user to our website. We think it is more appropriate for your and our personal security. .                  </p>
                  <br><button style="border-radius: 10px" onclick="toggleContent(1)" id="myBtn1">Read more</button>
                </li>
                <li>
                  <h3 style="color: rgb(251, 247, 247); font-size: 20px;">Can I book a ticket without an account?</h3>
                  <p style="color: rgb(244, 242, 242); font-size: 15px;">
                    Yes, you can book a ticket as a guest user. However, creating an account provides additional benefits such as easier management of your bookings.
                  </p>
                  <p style="color: white;font-size: 15px;">
                    You can access our site without registering. It is the same process as a regular user and they are provided with many options that a registered user can do.</p>
                  <p id="dots2">...</p>
                  <p id="more2" class="read-more" style="color: rgb(249, 245, 245);font-size: 15px;">
                    Our company has provided the service to book your flight ticket without registering to the website, but we have limited the opportunities you get. Additional bonus facilities are not included in the service we provide to you. And you have an account with us. If it is related to your privacy, the safe behavior of the work will be more confirmed
                  </p>
                  <br><button style="border-radius: 10px;" onclick="toggleContent(2)" id="myBtn2">Read more</button>
                </li>
              </ul>

              <h2 style="color: rgb(40, 45, 61); font-size: 30px;">Booking and Reservations</h2><hr>
              <ul>
                <li>
                  <h3 style="color: rgb(251, 248, 248); font-size: 20px;">How can I cancel my ticket?</h3>
                  <p style="color: rgb(247, 240, 240); font-size: 15px;">
                    To cancel your ticket, log in to your account and go to the "Manage My Bookings" section. From there, you can select the ticket you want to cancel and follow the prompts.
                  </p>
                  <p style="color: rgb(246, 242, 242);font-size: 15px;">
                    If you need to cancel an air ticket reservation made by you, you are given the opportunity to do so.                  </p>
                  <p id="dots3">...</p>
                  <p id="more3" class="read-more" style="color: #fdf8f8;font-size: 15px;">
                    It involves many steps. If the cancellation is done within 24 hours, we will refund the entire amount you paid for the ticket. You can get half of the money back                  </p>
                  <br><button style="border-radius: 10px" onclick="toggleContent(3)" id="myBtn3">Read more</button>
                </li>
                <li>
                  <h3 style="color: rgb(252, 247, 247); font-size: 20px;">Can I change my travel dates after booking?</h3>
                  <p style="color: rgb(249, 249, 249); font-size: 15px;">
                    Yes, you can change your travel dates depending on the fare conditions of your ticket. Please refer to our ticket change policy or contact our customer support for assistance.
                  </p>
                  <p style="color: rgb(255, 249, 249);font-size: 15px;">
                    We have offered you the service to change the dates of your flight due to an emergency. </p>                  <p id="dots4">...</p>
                  <p id="more4" class="read-more" style="color: white;font-size: 15px;">
                    For that you can contact our customer liaison or send a message to our e-mail.                  </p><br>
                  <button style="border-radius: 10px" onclick="toggleContent(4)" id="myBtn4">Read more</button>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <script>
          function toggleContent(index) {
            var dots = document.getElementById("dots" + index);
            var moreText = document.getElementById("more" + index);
            var btnText = document.getElementById("myBtn" + index);

            if (dots.style.display === "none") {
              dots.style.display = "inline";
              btnText.innerHTML = "Read more";
              moreText.style.display = "none";
            } else {
              dots.style.display = "none";
              btnText.innerHTML = "Read less";
              moreText.style.display = "inline";
            }
          }
        </script>
      </h1>
    </div>
  </div>

</body>
</html>
