<?php include('layouts/header-one.php'); ?>

<?php

if( !empty($_SESSION['cart'])){

  //let user IN



  //route user to the home page
}else{

  header('location: index.php');

}


?>

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
      <p class="text-center" style="color: red;"><?php if(isset($_GET['message'])) { echo $_GET['message']; } ?>
      <?php if(isset($_GET['message'])) { ?>

        <a class="" href="login.php"></a>
    <?php } ?>
    </p>
    </form><br><br>
  </div>

  <!-- Footer -->
  <?php include('layouts/footer-one.php'); ?>

