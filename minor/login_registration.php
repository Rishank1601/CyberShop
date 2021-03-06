
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberShop</title>
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
          <img src="images/logo1.jpg" width="125px" />
        </div>

        <nav>
          <ul id="Menu-Items">
            <li><a href="index">Home</a></li>
            <li><a href="products-1">Products</a></li>
            <li><a href="about">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="account_page">Account</a></li>
          </ul>
        </nav>
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
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              /></svg
        <img src="images\menu.png" class="menu-icon" onclick="menutoggle()" />
 
        
    
      </div>
    </div>

    <!-- Login Registration Page -->
    <div class="account-page">
      <div class="container">
        <div class="row">
          <div class="col2">
            <img src="images\cover3.jpg" width="100%" />
          </div>
          <div class="col2">
            <div class="form-container">
              <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="Indicator" />
              </div>

               <!-- Login -->
                <form id="LoginForm" action="auth.php" method="post">
                <input type="text" name="uname" required placeholder="Username" />
                <input type="password" name="psw" required placeholder="Password" />
                <button type="submit" class="btn">Login</button>
                <a href="forgot_password">Forgot Password</a>
              </form>

               <!-- SignUp -->
              <form id="RegForm" action="signAuth.php" method="post">
                <input type="text" placeholder="Username" name="uname1" required/>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Password" name="psw1" required/>
                <input type="password" placeholder="Confirm Password" name="cpsw1" required/>
                <button type="submit" class="btn">Register</button>
              </form>
            </div>
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

    <!-- Js for Toggle Registration Form -->
    <script>
      var loginForm = document.getElementById("LoginForm");
      var registrationForm = document.getElementById("RegForm");
      var Indicator = document.getElementById("Indicator");

      function register() {
        registrationForm.style.transform = "translateX(0px)";
        loginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
      }

      function login() {
        registrationForm.style.transform = "translateX(300px)";
        loginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
      }
    </script>
  </body>
</html>
