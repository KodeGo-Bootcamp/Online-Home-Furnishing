<?php 

session_start();

if(isset($_POST['add_to_cart'])){

  //if the customer has already added a product to the cart
 if(isset($_SESSION['cart'])){

  $products_array_ids = array_column($_SESSION['cart'], "product_id");
  //if product has been added to the cart or not
  if( !in_array($_POST['product_id'], $products_array_ids) ){

  $product_array = array(
    'product_id' => $_POST['product_id'],
    'product_name' => $_POST['product_name'],
    'product_price' => $_POST['product_price'],
    'product_image' => $_POST['product_image'],
    'product_quantity' => $_POST['product_quantity']
  );
  
$_SESSION['cart'] [$product_id] = $product_array;

    //if the product has been added already
  }else{
echo '<script>alert("The product selected was already added to the cart");</script>';
echo '<script>window.location="index.php";</script>';
  }

  //if this is the 1st product
 }else{

  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = $_POST['product_quantity'];

  $product_array = array(
    'product_id' => $product_id,
    'product_name' => $product_name,
    'product_price' => $product_price,
    'product_image' => $product_image,
    'product_quantity' => $product_quantity
  );

$_SESSION['cart'] [$product_id] = $product_array;


 }

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
          <a class="navbar-brand" href="index.html">
            <h2>Home <em>Furnishing</em></h2></a
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
                <a class="nav-link" href="index.html"
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
                <a class="nav-link cart" href="#"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
              </li>
              <li class="nav-item">
                <a href="login.html" class="nav-link"
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

    <!-- Cart -->
    <section class="cart container">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr class="">
        </div>
        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/images/cabinet-1.jpg" alt="">
                        <div>
                            <p>Cabinet</p>
                            <small><span>&#8369;</span>12, 299</small>
                            <br>
                            <a class="remove-btn" href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                    <a class="edit-btn" href="">Edit</a>
                </td>
                <td>
                    <span>&#8369;</span>
                    <span class="product-price">12, 299</span>
                </td>
            </tr>

        </table>
        <div class="cart-total">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>&#8369; 12, 299</td>
            </tr>
            <tr>
                <td>Total </td>
                <td>&#8369; 12, 299</td>
            </tr>

        </table>
    </div>

    <div class="checkout-container">
        <button class="btn checkout-btn">Checkout</button>
    </div>
    </section>







    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
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
