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
        <?php $amount = strval($_SESSION['total']); ?>
    <p>Total Payment:  &#8369;  <?php echo $_SESSION['total']; ?></p>
    <!-- <input class="btn btn-primary" value="Pay Now"type="submit"> -->
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    


    <?php } else if(isset($_POST['order_status']) && $_POST['order_status'] == "NOT PAID"){ ?>
        <?php $amount = strval($_POST['order_total_price']); ?>
        <p>Total Payment:  &#8369;  <?php echo $_POST['order_total_price']; ?></p>
        <!-- <input class="btn btn-primary" value="Pay Now"type="submit"> -->
        <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <?php } else { ?>

          <p>You don't have an order</p>

      <?php } ?>



  </div>

      <!-- Replace "test" with your own sandbox Business account app client ID -->
      <script src="https://www.paypal.com/sdk/js?client-id=AarNHm75hLTVjoiFdCF17PMrX2WuXYHilVjfgs4Zbh7OUQGW0DWL9Y_mEfBHovnjjPA-UTWaM1Nd5ZGO&currency=USD"></script>

    <script>
      paypal.Buttons({
        // Order is created on the server and the order id is returned
createOrder: function(data, actions) {
    return actions.order.create({
        purchase_units: [{
            amount: {
                value: '<?php echo $amount; ?>'
            }
        }]
    });
},
        // Finalize the transaction on the server after payer approval
        onApprove(data, actions) {
          return actions.order.capture().then(function(orderData){

          
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  window.location.href = 'thank_you.html';
          });
        }
      }).render('#paypal-button-container');
    </script>


  <?php include('layouts/footer-one.php'); ?>
