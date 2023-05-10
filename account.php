<?php

session_start();

if(!isset($_SESSION['logged_in'])){
header('location: login.php');
exit;
}


  if(isset($_GET['logout'])){
    if(isset($_SESSION['logged_in'])) {
      unset($_SESSION['logged_in']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      header('location: login.php');
      exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="This is an Online Furniture Store made by Group 4 from WD47"
    />
    <meta name="title" content="Online Home Furnishing" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <title>Online Home Furnishing</title>

    <script
      src="https://kit.fontawesome.com/aab2d75e67.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/login-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />

    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo-1.jpg" />
  </head>
  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><h2>Home<em> Furnishing</em></h2></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact </a>
              </li>
              <li class="nav-item">
                <a class="nav-link cart-one" href="cart.php"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link"
                  ><i class="fa-solid fa-circle-user"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Account -->
    <div class="row container mx-auto">
      <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
        <h3 class="font-weight-bold">Account Info</h3>
        <hr class="mx-auto" />
        <div class="account-info">
          <p>Name: <span><?php if(isset($_SESSION['user_name'])) { echo $_SESSION['user_name'];} ?></span></p>
          <p>Email: <span><?php if(isset($_SESSION['user_email'])) { echo $_SESSION['user_email'];} ?></span></p>
          <p><a href="#orders" id="orders-btn">Your Orders</a></p>
          <p><a href="account.php?logout=1" id="logout-btn">Logout</a></p>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12">
        <form id="account-form">
          <h3>Change Password</h3>
          <hr class="mx-auto" />
          <div class="form-group">
            <label for="">Password</label>
            <input
              type="password"
              class="form-control"
              id="account-password"
              name="password"
              placeholder="Password"
              required
            />
          </div>
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input
              type="password"
              class="form-control"
              id="account-password-confirm"
              name="confirm-password"
              placeholder="Password"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="submit"
              value="Change Password"
              class="btn"
              id="change-pass-btn"
            />
          </div>
        </form>
      </div>
    </div>


    <!-- Orders -->
    <div id="orders" class="orders container my-5 py-3">
      <div class="container mt-2">
        <h2 class="font-weight-bold text-center">Your Orders</h2>
        <hr class="mx-auto">
      </div>

      <table class="mt-5 pt-5">
        <tr>
          <th>Product</th>
          <th>Date</th>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="assets/images/bed-1.jpg" alt="">
              <div>
                <p class="mt-3">Bed</p>
              </div>
            </div>
          </td>
          <td>
            <span>2023-05-8</span>
          </td>
        </tr>
      </table>
    </div>






    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
          // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ""; // with more chance of typos
          t.style.color = "#fff";
        }
      }
    </script>
  </body>
</html>
