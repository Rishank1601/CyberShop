<?php
include("all_pro2.php");
include("acc_func.php");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products - CyberShop</title>
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
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images\logo1.jpg" width="125px" />
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
    </div>

    <div class="small-container">
      <div class="row row-2">
        <h2>All Products</h2>        
      </div>

    <?php
      getPro();
    ?>
      
      <div class="page-btn">
      <span><a href='products-1' class="page-btn">1</a></span>
      <span> <a href='products-2' class="page-btn">2</a></span>
        <!--<span>&#8594;</span> -->
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
