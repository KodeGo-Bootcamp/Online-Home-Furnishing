<?php
session_start();
?>

<?php include('layouts/header-one.php'); ?>


<!-- Payment -->
<div class="container text-center mt-3 pt-5">
    <h3 class="form-weight-bold">Payment</h3>
  </div>
  <div class="mx-auto text-center container">
    <p><?php if(isset($_GET['order_status'])) {echo $_GET['order_status'];} ?></p>
    <p>&#8369;<?php if(isset($_SESSION['total'])) {echo $_SESSION['total'];} ?></p>
    <?php if(isset($_SESSION['total'])) { ?>
    <input class="btn btn-primary" value="Pay Now"type="submit">
    <?php } ?>

    <?php if(isset($_GET['order_status']) && $GET['order_status']== "NOT PAID"){ ?>
    <input class="btn btn-primary" value="Pay Now"type="submit">
    <?php } ?>

  </div>


  <?php include('layouts/footer-one.php'); ?>
