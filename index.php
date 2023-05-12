
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
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <button class="add">Add to Cart <i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- <div class="col-md-4">
            <div class="product-item">
            <img class="prod-img" src="assets/images/table-2.jpg" alt="" />
              <div class="down-content">
                <h4>5-piece Dining Set</h4>
                <h6 class="price">&#8369;19,299</h6>
                <p>
                  This set includes a rectangular dining table and four matching
                  chairs with sleek, tapered legs and a mid-century modern
                  design.The table is crafted from sturdy, natural wood finish
                  and black accents, while the chairs are upholstered in a
                  comfortable, easy-to-clean fabric.
                </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <button class="add"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
            <img class="prod-img" src="assets/images/table-3.jpg" alt="" />
              <div class="down-content">
                <h4>Simple Living Dining Set</h4>
                <h6>&#8369;22,345</h6>
                <p>
                  The set includes a rectangular dining table and four chairs,
                  all crafted from high-quality rubberwood for durability and
                  longevity. The table features a white finish with a natural
                  wood top, while the chairs are finished in white with natural
                  wood seats.
                </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <button class="add"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
            <img class="prod-img" src="assets/images/bed-1.jpg" alt="" />
              <div class="down-content">
               <h4>Solid Wood Spindle Bed</h4>
                <h6>&#8369; 33,599</h6>
                <p>
                  Crafted from high-quality solid wood, the bed features a
                  spindle headboard and footboard design that adds a touch of
                  elegance and sophistication to the room. The platform design
                  eliminates the need for a box spring, providing ample support
                  for your mattress while also giving the bed a low profile
                  look.
                </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <button class="add"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
            <img class="prod-img" src="assets/images/bed-2.jpg" alt="" /></a>
              <div class="down-content">
              <h4>Modern Wooden Bed</h4>
                <h6>&#8369; 50,368</h6>
                <p>
                  Crafted from high-quality solid wood, this bed features a
                  low-profile design and a sturdy platform base that eliminates
                  the need for a box spring. The clean lines and natural wood
                  finish give the bed a modern and contemporary look that is
                  sure to complement any decor style. Available in a range of
                  sizes.
                </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <button class="add"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
            <img class="prod-img" src="assets/images/bed-3.jpg" alt="" />
              <div class="down-content">
              <h4>Grid-tufted Bed</h4>
                <h6>&#8369; 55,690</h6>
                <p>
                  Featuring a grid-tufted headboard with a charcoal grey
                  upholstery, this bed adds a touch of elegance and
                  sophistication to the room. The sturdy wood frame and solid
                  wood legs provide ample support, while the padded headboard
                  provides a comfortable spot to lean back and relax. Available
                  in a range of sizes, this panel bed is a versatile option that
                  can fit any room.
                </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <button class="add"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      
    </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Online Home Furnishing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p>
                Online home furnishing is the process of purchasing furniture
                and other decor items for your home from an online retailer.
                With the convenience of shopping from home, online home
                furnishing has become increasingly popular in recent years.
                Online retailers offer a wide range of furniture and decor
                options, including beds, sofas, chairs, tables, rugs, and more.
                Customers can browse a vast selection of products, compare
                prices and styles, and read customer reviews before making a
                purchase. Online home furnishing provides the flexibility to
                shop at any time, and many retailers offer free shipping and
                easy returns, making it a convenient and hassle-free way to
                decorate and furnish your home.
                <a rel="nofollow" href="contact.html">Contact us</a>
                for more info.
              </p>
              <!-- <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul> -->
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>
                    Shop smarter, not harder |<em> Home Furnishing</em> Products
                  </h4>
                  <p>
                    Make your home the envy of the neighborhood with our trendy
                    and affordable home furnishing options!
                  </p>
                </div>
                <div class="col-md-4">
                  <a href="products.html" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('layouts/footer.php'); ?>
