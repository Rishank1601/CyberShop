<?php
include("acc_func.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart Page</title>
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
      .button {
        float: right;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images\logo1.jpg" width="125px" />
        </div>

        <?php
          giveuser();
          

          ?>
        <i class="fas fa-shopping-cart"></i>
        <img src="images\menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>
    </div>

    <!-- Cart Item Details -->
    <div class="small-container cart-page">
      <table class="table" style="width: 100%">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images\buy-1.jpg" />
              <div>
                <p>Red Printed T-Shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a>Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images\buy-2.jpg" />
              <div>
                <p>Red Printed T-Shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a>Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="images\buy-3.jpg" />
              <div>
                <p>Red Printed T-Shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a>Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$100.00</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$200.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$30.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$230.00</td>
          </tr>
        </table>
      </div>
      <div class="button">
        <a href="order.html"
          ><button type="submit" class="btn">Place Order</button></a
        >
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

    <!-- Js for Product Gallery -->
  </body>
</html>
