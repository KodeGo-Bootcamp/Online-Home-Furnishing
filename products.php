<?php
$place_holder = "Search Product";
include('layouts/header.php');
include('server/connection.php');
if (isset($_POST['search']) && $_POST['query'] != "") {
  // Call a function to perform the desired action
  echo "<script> var temp = 'search'; </script>";
  $query = $_POST['query'];
  $products = mysqli_query($conn,"SELECT * FROM products WHERE product_name LIKE '%". $query ."%' OR product_category LIKE '%". $query ."%'");
  $place_holder = $query;
}else{
  echo "<script> var temp = 'no_search'; </script>";
  $products = mysqli_query($conn,"SELECT * FROM products");
}

?>

<!-- Page Content -->
<div class="page-heading products-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>new arrivals</h4>
          <h2>home furnishing products</h2>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- PRODUCTS -->
<div class="products">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12">
        <div class="filters">
          <ul>
              <li id="all_products" class="active" data-filter="*" onclick="refresh_page()">All Products</li>
              <li data-filter=".tab">Tables</li>
              <li data-filter=".bed">Bed</li>
              <li data-filter=".cab">Cabinets</li>
              <li data-filter=".sof">Sofa</li>
          </ul>
          <!-- SEARCH BOX -->
          <form action="products.php" method="POST">
            <input id="hid_text" type="text" value="<?php echo $place_holder; ?>" hidden="true">
            <input type="text" name="query" placeholder="<?php echo $place_holder; ?>">
            <button type="submit" name="search">Search</button>
          </form>
        </div>
      </div>

      <div class="col-md-12">
        <div class="filters-content">
          <div class="row grid">

            <?php
            $furn_cat = "";
            while ($row = mysqli_fetch_assoc($products)) {
              if($row['product_category'] == "Table"){
                $furn_cat = "col-lg-4 col-md-4 all tab";
              }else if($row['product_category'] == "Bed"){
                $furn_cat = "col-lg-4 col-md-4 all bed";
              }else if($row['product_category'] == "Sofa"){
                $furn_cat = "col-lg-4 col-md-4 all sof";
              }else if($row['product_category'] == "Cabinet"){
                $furn_cat = "col-lg-4 col-md-4 all cab";
              }
              $furn_img = "assets/images/".$row['product_image'];
              ?>
            <div name="product_img" class="<?php echo $furn_cat; ?>"> 
              
                <div class="product-item">
                  <img class="prod-img" src="<?php echo $furn_img; ?>" />
                  <div class="down-content">
                    <a href="#">
                      <h4>
                        <?php echo $row['product_name']; ?>
                      </h4>
                    </a>
                    <h6>&#8369;
                      <?php echo $row['product_price']; ?>
                    </h6>
                    <p>
                      <?php echo $row['product_description']; ?>
                    </p>
                    <ul class="stars text-center">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <br>
                    <a class="btn buy-btn" href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"> Add
                      to Cart <i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>
            <?php 
            } 
            if($row = mysqli_fetch_assoc($products)){
              echo "<script> alert('awe'); </script>";
            }else{
              
            }
            ?>
            </div>
          </div>
        </div>
<!----------------------------------------------------------------->
    </div>
  </div>
</div>
<!-- ******************************************* -->
      <?php include('layouts/footer.php');
      function test_function($id)
      {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
      }
      ?>

<script>
  
function refresh_page(){
	if(document.getElementById("hid_text").value != "Search Product"){

    window.location.replace("products.php");
  }else{

  }

}

</script>
