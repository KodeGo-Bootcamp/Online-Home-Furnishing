<?php

session_start();

include('server/connection.php');

if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}

  if(isset($_POST['login_btn'])){

    $email =  $_POST['email'];
    $password =  md5($_POST['password']);

    $stmt = $conn->prepare("SELECT user_id,user_email,user_name,user_password FROM users WHERE user_email = ? AND user_password = ? LIMIT 1");

    $stmt->bind_param('ss', $email,$password);

    if($stmt->execute()) {
      $stmt->bind_result($user_id,$user_name,$user_email,$user_password);
      $stmt->store_result();

      if($stmt->num_rows() == 1){
      $stmt->fetch_result();

      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_name'] = $user_name;
      $_SESSION['user_email'] = $user_email;
      $_SESSION['logged_in'] = true;

      header('location: account.php?message=Logged in successfully');

    }else{
      header('location: login.php?error=Could not verify your account');
    }

    }else{
        //error
        header('location: login.php?error=Something went wrong');
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

    <!-- Login -->
    <div class="container text-center mt-3 pt-5">
      <h3 class="form-weight-bold">Login</h3>
    </div>
    <div class="mx-auto container">
      <p style="color: red;" class="text-center"><?php if(isset($_GET['error'])) {echo $_GET['error']; }?></p>
      <form id="login-form" method="POST" action="login.php">
        <div class="form-group">
          <label>Email</label>
          <input
            type="text"
            class="form-control"
            id="login-email"
            name="email"
            placeholder="Email"
            required
          />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input
            type="text"
            class="form-control"
            id="login-password"
            name="Password"
            placeholder="Password"
            required
          />
        </div>
        <div class="form-group">
          <input type="submit" class="btn" id="login-btn" name="login_btn" value="Login" />
        </div>
        <div class="form-group">
          <a href="register.php" id="register-url" class="btn">Sign Up</a>
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