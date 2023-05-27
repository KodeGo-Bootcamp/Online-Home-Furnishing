
<?php
session_start();

include('server/connection.php');

if( !empty($_SESSION['cart'])){

  //let user IN

  if(isset($_SESSION['logged_in'])){
    //$products = mysqli_query($conn,"SELECT * FROM users WHERE product_name");
    //$place_holder = $query;
    $name = "value=".$_SESSION['user_name'];
    $email = "value=".$_SESSION['user_email'];
    $cp_num = "value=".$_SESSION['cp_num'];
    $address = "value=".$_SESSION['address'];
    }else{
      $name = "placeholder='Name'";
      $email = "placeholder='Email'";
      $cp_num = "placeholder='+63'";
      $address = "placeholder='Delivery Address'";
    }

  //route user to the home page
}else{

  header('location: index.php');

}


?>

<?php include('layouts/header-one.php'); ?>

<!-- Checkout -->
<div class="container text-center mt-3 pt-5">
    <h3 class="form-weight-bold">Check Out</h3>
  </div>
  <div class="mx-auto container">
    <form id="checkout-form" method="POST" action="server/place_order.php">
      <div class="form-group checkout-small-element">
        <label>Name</label>
        <input type="text" class="form-control" id="checkout-name" name="name" <?php echo $name; ?> required>
      </div>
      <div class="form-group checkout-small-element">
        <label>Email</label>
        <input type="text" class="form-control" id="checkout-email" name="email" <?php echo $email; ?> required>
      </div>
      <div class="form-group checkout-small-element">
        <label>Phone</label>
        <input type="tel" class="form-control" id="checkout-phone" name="phone" <?php echo $cp_num; ?> required>
      </div>
      <div class="form-group checkout-small-element">
        <label>City</label>
        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
      </div>
      <div class="form-group checkout-large-element">
        <label>Address</label>
        <input type="text" class="form-control" id="checkout-address" name="address" <?php echo $address; ?> required>
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
    </form>
  </div>

  <?php include('layouts/footer-one.php'); ?>

