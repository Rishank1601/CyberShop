<?php
include('acc_func.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="static/styles/fontawesome/css/all.min.css" />
    <style>
      * {
        box-sizing: border-box;
      }

      /* Create two unequal columns that floats next to each other */
      .column {
        float: left;
        padding: 10px;
        height: 600px;
        /* Should be removed. Only for demonstration */
      }

      .left {
        width: 20%;
        background-color: #989898;
      }
      .profile-pic {
        height: 200px;
        width: 200px;
        border-radius: 50%;
        overflow: hidden;
        border: 1px solid grey;
      }
      #uploadBtn {
        padding-left: 50px;
      }

      #uploadBtn {
        color: black;
        line-height: 30px;
        font-family: sans-serif;
        font-size: 15px;
        cursor: pointer;
      }
      .form {
        padding-left: 300px;
        width: 800px;
      }

      .right {
        width: 80%;
        background-color: #dcdcdc;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      .navbar {
        background-color: white;
      }
      .navbar h1 {
        padding-left: 300px;
        font-size: 40px;
      }
      .account-section h1 {
        padding-left: 10px;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <div class="logo">
        <a href="index"
          ><img src="images\logo.jpg" width="125px" border-style: solid
        /></a>
      </div>
      <h1><b>MY ACCOUNT</b></h1>

      <?php
          giveuser();        

          ?>
      <a href="cart"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
          /></svg
      ></a>
      <img src="images\menu.png" class="menu-icon" onclick="menutoggle()" />
    </div>

    

      <?php
      getUser();
      ?>

      

    <script src="app.js"></script>

    <!-- Footer section -->
    <!-- <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download our App</h3>
            <p>Download App for Android and IOS</p>
            <div class="app-logo">
              <img src="images\play-store.png" />
              <img src="images\app-store.png" />
            </div>
          </div>
          <div class="footer-col2">
            <img src="images\logo1.jpg" />

            <p>
              Our purpose is to Make The Benefits of Sports Accessible To Many
            </p>
          </div>
          <div class="footer-col3">
            <h3>Useful Links</h3>
            <ul>
              Coupons
            </ul>
            <ul>
              Blog Post
            </ul>
            <ul>
              Return Policy
            </ul>
            <ul>
              Affiliate
            </ul>
          </div>
          <div class="footer-col4">
            <h3>Follow Us</h3>
            <ul>
              Facebook
            </ul>
            <ul>
              Twitter
            </ul>
            <ul>
              Instagram
            </ul>
            <ul>
              YouTube
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2021 CyberShop</p>
      </div>
    </div> -->

    <!-- Js for toggle menu -->
    <!-- <script>
      var MenuItems = document.getElementById("Menu-Items");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px")
          MenuItems.style.maxHeight = "200px";
        else MenuItems.style.maxHeight = "0px";
      }
    </script> -->

    <!-- Js for Product Gallery -->
  </body>
</html>
