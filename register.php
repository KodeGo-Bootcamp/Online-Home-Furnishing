<?php

session_start();

    include('server/connection.php');



    // if user has already registered, then the user will be routed to account page
  if(isset($_SESSION['logged_in'])){
    header('location: account.php');
    exit;
  }


    if(isset($_POST['register'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirmPassword = $_POST['confirmPassword'];

          //if passwords didn't match
        if($password !== $confirmPassword){
            header('location: register.php?error=Passwords did not match');
  

                        //if password is less than 6 characters
                      }else if(strlen($password) < 6){
                          header('location: register.php?error=Password must be at least 6 characters');
                        


                        //if there is no error 
                      }else{

                        //check whether there is a user with this email or not
                        $stmt1 = $conn->prepare("SELECT count(*) FROM users where user_email = ?");
                        $stmt1->bind_param('s',$email);
                        $stmt1->execute();
                        $stmt1->bind_result($num_rows);
                        $stmt1->store_result();
                        $stmt1->fetch();


                        //if there is a user already registered with this email
                      if($num_rows != 0){
                          header('location: register.php?error=Email address already used');

                        //if no user registered with this email  
                        }else{

                        //create a new user
                      $stmt = $conn->prepare("INSERT INTO users (user_name,user_email,user_password)
                                                      VALUES(?,?,?)");

                      $stmt->bind_param('sss',$name,$email,md5($password));    

                      //if account was created successfully
                      if($stmt->execute()) {
                      $user_id = $stmt->insert_id;
                      $_SESSION['user_id'] = $user_id;
                      $_SESSION['user_email'] = $email;
                      $_SESSION['user_name'] = $name;
                      $_SESSION['logged_in'] = true;
                      header('location: account.php?register_success=Registered Successfully!');


                      //account couldn't be created
                      }else{
                      header('location: register.php?error=Could not create an account at the moment');
                      }

        }

      }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="This is an Online Furniture Store made by Group 4 from WD47" />
  <meta name="title" content="Online Home Furnishing" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet" />

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

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->



  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2>Home <em>Furnishing</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
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
              <a href="login.php" class="nav-link"><i class="fa-solid fa-circle-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <body>

    <!-- Register -->
    <div class="container text-center mt-3 pt-5">
      <h3 class="form-weight-bold">Register</h3>
    </div>
    <div class="mx-auto container">
      <form id="register-form" method="POST" action="register.php">
        <p style="color: red;"><?php if(isset($_GET['error'])) { echo $_GET['error'];} ?></p>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" class="form-control" id="register-password" name="password" placeholder="Password"
            required>
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="text" class="form-control" id="register-confirm-password" name="confirmPassword"
            placeholder="Confirm Password" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn" id="register-btn" name="register" value="Register">
        </div>
        <div class="form-group">
          <a href="login.php" id="login-url" class="btn">Login instead</a>
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