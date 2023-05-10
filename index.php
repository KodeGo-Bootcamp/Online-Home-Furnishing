<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="This is an Online Furniture Store made by Group 4 from WD47"
    />
    <meta name="title" content="Online Home Furnishing" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <title>Online Home Furnishing</title>

    <script src="https://kit.fontawesome.com/aab2d75e67.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
  

    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo-1.jpg">

  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><h2>Home<em> Furnishing</em></h2></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact </a>
              </li>
              <li class="nav-item">
                <a class="nav-link cart1" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>
               <li class="nav-item">
              <a href="login.html" class="nav-link"><i class="fa-solid fa-circle-user"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="slide banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Transform Your Home with Home Furnishing</h4>
            <h2>Latest Trends in Furniture and Decor</h2>
            <br>
            <a href="products.html" class="shop-btn">Shop Now</a>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Discover the Best Deals on Home Furnishings</h4>
            <h2>Upgrade Your Living Space Today!</h2>
            <br>
            <a href="products.html" class="shop-btn">Shop Now</a>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Get Ready to Fall in Love with Your Home</h4>
            <h2>Wide Selection of Quality Furniture</h2>
            <br>
            <a href="products.html" class="shop-btn">Shop Now</a>
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
              <a href="products.html"
                >view all products <i class="fa fa-angle-right"></i
              ></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <img class="prod-img" src="assets/images/table-1.jpg" alt="" />
              <div class="down-content">
                <h4>Round Dining Table</h4>
                <h6>&#8369;21,865</h6>
                <p>
                  The table features a round top crafted from high-quality
                  weathered oak finish, while the base is made of metal with a
                  unique wrap-around design that adds a touch of industrial
                  style. Measuring 48 inches in diameter, this table comfortably
                  seats up to four people.
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
          </div>
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


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>
                Copyright &copy; Online Home Furnishing
                <a
                  rel="nofollow noopener"
                  href="https://github.com/orgs/KodeGo-Bootcamp/teams/online-home-furnishing"
                  target="_blank"
                  >Group 4</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <div onclick="scrollToTop()" class="scrollTop">
      <i class="fa-solid fa-chevron-up"></i>
    </div>

<script>
      function scrollToTop(){
        window.scrollTo(0, 0);
      }
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
  

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
          // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ""; // with more chance of typos
          t.style.color = "#fff";
        }
      }
    </script>
  </body>
</html>
