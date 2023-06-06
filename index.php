<?php include('layouts/header.php'); ?>



    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="slide banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Transform Your Home with Home Furnishing</h4>
            <h2>Latest Trends in Furniture and Decor</h2>
            <br>
            <a href="products.php" class="shop-btn">Shop Now</a>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Discover the Best Deals on Home Furnishings</h4>
            <h2>Upgrade Your Living Space Today!</h2>
            <br>
            <a href="products.php" class="shop-btn">Shop Now</a>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Get Ready to Fall in Love with Your Home</h4>
            <h2>Wide Selection of Quality Furniture</h2>
            <br>
            <a href="products.php" class="shop-btn">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Products -->

    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Featured Products</h3>
        <hr />
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_featured_products.php'); ?>

      <?php while($row= $featured_products->fetch_assoc()){ ?>

        <div class="product text-center img-fluid col-lg-3 col-md-6 col-sm-12">
        <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><img class="img-fluid mb-3" src="assets/images/<?php echo $row['product_image']; ?>" alt="" /></a>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">&#8369;<?php echo $row['product_price']; ?></h4>
        </div>
        <?php } ?>
      </div>
    </section>

    <!-- Brands -->
    <section id="brand" class="container">
    <div class="container text-center mt-5 py-5">
        <h3>Partner Brands</h3>
        <hr />
      <div class="row">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/brand-05.png" alt="">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/brand-02.png" alt="">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/brand-08.png" alt="">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brands/brand-04.png" alt="">
      </div>
    </section>

    <!-- Latest Products -->
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.php"
                >view all products <i class="fa fa-angle-right"></i
              ></a>
            </div>
          </div>

          <?php include('server/get_latest_products.php'); ?>

          <?php while($row= $latest_products->fetch_assoc()){ ?>
          <div class="col-md-4">
            <div class="product-item">
              <img class="prod-img" src="assets/images/<?php echo $row['product_image']; ?>" alt="" />
              <div class="down-content">
                <h4><?php echo $row['product_name']; ?></h4>
                <h6>&#8369;<?php echo $row['product_price']; ?></h6>
                <p><?php echo $row['product_description']; ?></p>
                <ul class="stars text-center">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <br>
          <form method="POST" action="cart.php">
          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
          <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
          <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
          <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
          <input type="hidden" name="product_quantity" value="1" />
          <button class="add" type="submit" name="add_to_cart"><i class="fa fa-shopping-cart"></i></button>
          </form>

              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

<!-- Footer -->
    <?php include('layouts/footer.php'); ?>
