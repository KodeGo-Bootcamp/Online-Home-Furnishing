<?php include('layouts/header-one.php'); ?>

<?php 

if(isset($_POST['add_to_cart'])){

  //if the customer has already added a product to the cart
 if(isset($_SESSION['cart'])){

  $products_array_ids = array_column($_SESSION['cart'], "product_id");
  //if product has been added to the cart or not
  if(!in_array($_POST['product_id'], $products_array_ids)){

    $product_id = $_POST['product_id'];

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

 //calculate total cart
 calculateTotalCart();

 //remove the product from the cart
}else if(isset($_POST['remove_product'])){

  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);

//calculate total
calculateTotalCart();



}else if(isset($_POST['edit_quantity'])){

  //we get ID nd quantity from the form
  $product_id = $_POST['product_id'];
$product_quantity =  $_POST['product_quantity'];

//get the product rray from the session
$product_array = $_SESSION['cart'][$product_id];

//update product quantity
$product_array['product_quantity'] = $product_quantity;

//return array back to its place
$_SESSION['cart'][$product_id] = $product_array;

//calculate total
calculateTotalCart();

}else{
  // header('location: index.php');
}

function calculateTotalCart(){

  $total_price = 0;
  $total_quantity = 0;

   foreach($_SESSION['cart'] as $key => $value) {
      $product = $_SESSION['cart'][$key];
    $price = $product['product_price'];
    $quantity = $product['product_quantity'];
    $total_price = $total_price + ($price * $quantity);
    $total_quantity = $total_quantity + $quantity;
   }

   $_SESSION['total'] =  $total_price;
   $_SESSION['quantity'] =  $total_quantity;
}
?>

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

            <?php if(isset($_SESSION['cart'])) { ?>
<?php foreach($_SESSION['cart'] as $key => $value) { ?>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/images/<?php echo $value['product_image']; ?>" alt="">
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span>&#8369;</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form method="POST" action="cart.php">
                              <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                            <input type="submit" name="remove_product" class="remove-btn" value="remove">
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    
                    <form class="quantity-form" method="POST" action="cart.php">
                      <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                      <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>">
                      <input type="submit" class="edit-btn" value="update" name="edit_quantity">
                    </form>
                </td>
                <td>
                    <span>&#8369;</span>
                    <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                </td>
            </tr>

            <?php } ?>

            <?php } ?>

        </table>
        <div class="cart-total">
        <table>
            <tr>
                <td>Total </td>

                <?php if(isset($_SESSION['cart'])) {?>
                <td>&#8369; <?php echo $_SESSION['total']; ?> </td>
                <?php } ?>
            </tr>

        </table>
    </div>

    <div class="checkout-container">
      <form action="checkout.php" method="POST">
      <input class="btn checkout-btn" type="submit" value="Checkout" name="checkout"></input>
      </form>
        
    </div>
    </section>
    <br><br><br><br>

  <?php include('layouts/footer-one.php'); ?>
