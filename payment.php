<?php
session_start();

if(isset($_POST['order_pay_btn'])) {
$order_statu = $_POST['order_status'];
$order_total_price = $_POST['order_total_price'];
}
?>

<?php include('layouts/header-one.php'); ?>


<!-- Payment -->
<div class="container text-center mt-3 pt-5">
    <h3 class="form-weight-bold">Payment</h3>
  </div>
  <div class="mx-auto text-center container">



    <?php if(isset($_SESSION['total']) && $_SESSION['total'] !=0) { ?>
    <p>Total Payment:  &#8369;  <?php echo $_SESSION['total']; ?></p>
    <input class="btn btn-primary" value="Pay Now"type="submit">
    


    <?php } else if(isset($_POST['order_status']) && $_POST['order_status'] == "NOT PAID"){ ?>
        <p>Total Payment:  &#8369;  <?php echo $_POST['order_total_price']; ?></p>
        <input class="btn btn-primary" value="Pay Now"type="submit">

    <?php } else { ?>

          <p>You don't have an order</p>

      <?php } ?>

  </div>


  <?php include('layouts/footer-one.php'); ?>
