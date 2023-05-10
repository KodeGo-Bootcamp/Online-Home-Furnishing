<?php

session_start();

if( !empty($_SESSION['cart']) && isset($_POST['checkout'])){

  //let user IN



  //route user to the home page
}else{

  header('location: index.php');

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

    <script src="https://kit.fontawesome.com/aab2d75e67.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/login-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
  

    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo-1.jpg">

  </head>
  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><h2>Home<em>Furnishing</em></h2></a>
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
                <a class="nav-link cart-one" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>
               <li class="nav-item">
              <a href="login.html" class="nav-link"><i class="fa-solid fa-circle-user"></i></a>
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


<!-- Checkout -->
<div class="container text-center mt-3 pt-5">
    <h3 class="form-weight-bold">Check Out</h3>
  </div>
  <div class="mx-auto container">
    <form id="checkout-form" method="POST" action="server/place_order.php">
      <div class="form-group checkout-small-element">
        <label>Name</label>
        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required>
      </div>
      <div class="form-group checkout-small-element">
        <label>Email</label>
        <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group checkout-small-element">
        <label>Phone</label>
        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="+63" required>
      </div>
      <div class="form-group checkout-small-element">
        <label>City</label>
        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
      </div>
      <div class="form-group checkout-large-element">
        <label>Address</label>
        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
      </div>
      <div class="form-group checkout-btn-container">
        <p>Total Amount: &#8369; <?php echo $_SESSION['total']; ?></p>
        <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order">
      </div>
    </form>
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

