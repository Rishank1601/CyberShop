<?php
include("functions.php");
include("acc_func.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-page</title>
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
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index"
              ><img src="images\logo.jpg" width="125px" border-style: solid
            /></a>
          </div>
          <div>
            <input
              class="
                searchBar
                h-9
                w-80
                rounded-l-xl
                px-3
                text-black
                ml-20
                focus:outline-none
                placeholder-black
              "
              id="search"
              type="text"
              placeholder="Search..."
            />
          </div>
          <div
            class="
              search-icon
              h-9
              w-10
              bg-black
              rounded-r-xl
              flex
              justify-center
              items-center
              text-white
            "
          >
            <svg
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
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </div>

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
        <div class="row">
          <div class="col2">
            <h1>
              Never tell everything <br />
              you Know...
            </h1>
            <p>
              There are more hackers breeding every day, and more brilliant
              minds are turning into hackers. Security has advanced, but so have
              hackers.
            </p>
            <a href="" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col2">
            <img src="images\cover3.jpg" />
          </div>
        </div>
      </div>
    </div>
    <! ---featured categories  --->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col3">
            <img src="images/c1.jpg" />
          </div>
          <div class="col3">
            <img src="images\p6.jpg" />
          </div>
          <div class="col3">
            <img src="images\c3.jpg" />
          </div>
        </div>
      </div>
    </div>

    <?php
    getPro();
    ?>

    <!--- Offer-->
    <div class="offers">
      <div class="small-container">
        <div class="row">
          <div class="col2">
            <img src="images\exclusive.png" class="offer-img" />
          </div>
          <div class="col2">
            <p>Exclusively Available on CyberShop</p>
            <h1>Smart Band 4</h1>
            <small
              >The MI Smart Band 4 features a 39.4% larger Amoled colour touch
              display with adjustable brightness so everything is clear as it
              should be.
            </small>
            <a href="" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial -->
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col3">
            <p>
              Lorem Ispum is simply dummy text of the printing and typesetting
              industry. Lorem Ispum has been the industry's standard dummy text
              ever.
            </p>
            <div class="rating">&#11088; &#11088; &#11088; &#11088;</div>
            <img src="images/user-1.png " />
            <h3>Sean Parker</h3>
          </div>
          <div class="col3">
            <p>
              Lorem Ispum is simply dummy text of the printing and typesetting
              industry. Lorem Ispum has been the industry's standard dummy text
              ever.
            </p>
            <div class="rating">&#11088; &#11088; &#11088; &#11088;</div>
            <img src="images/user-2.png" />
            <h3>Sean Parker</h3>
          </div>
          <div class="col3">
            <p>
              Lorem Ispum is simply dummy text of the printing and typesetting
              industry. Lorem Ispum has been the industry's standard dummy text
              ever.
            </p>
            <div class="rating">&#11088; &#11088; &#11088; &#11088;</div>
            <img src="images/user-3.png" />
            <h3>Sean Parker</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Brands Section -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col5">
            <img src="images/logo-dlink.jpg" />
          </div>
          <div class="col5">
            <img src="images\logo-mi.jpg" />
          </div>
          <div class="col5">
            <img src="images\logo-paypal.png" />
          </div>
          <div class="col5">
            <img src="images\logo-alpha.png" />
          </div>
          <div class="col5">
            <img src="images\logo-lenovo.png" />
          </div>
        </div>
      </div>
    </div>
    <!-- Footer section -->
    <div class="footer">
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
            <!--
            <p>
              Our purpose is to Make The Benefits of Sports Accessible To Many
            </p> -->
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
    </div>
    <!-- Js for toggle menu -->
    <script>
      var MenuItems = document.getElementById("Menu-Items");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px")
          MenuItems.style.maxHeight = "200px";
        else MenuItems.style.maxHeight = "0px";
      }
    </script>
  </body>
</html>
