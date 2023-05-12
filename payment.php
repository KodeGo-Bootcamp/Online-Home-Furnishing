<?php
session_start();
?>

<?php include('layouts/header-one.php'); ?>


<!-- Payment -->
<div class="container text-center mt-3 pt-5">
    <h3 class="form-weight-bold">Payment</h3>
  </div>
  <div class="mx-auto text-center container">
    <p><?php echo $_GET['order_status']; ?></p>
    <p>&#8369;<?php echo $_SESSION['total']; ?></p>
    <input class="btn btn-primary" value="Pay Now"type="submit">
  </div>


  <?php include('layouts/footer-one.php'); ?>
