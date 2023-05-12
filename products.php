<?php 

include('server/connection.php');

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->get_result();

?>

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

    <script
      src="https://kit.fontawesome.com/aab2d75e67.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />

    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo-1.jpg" />
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
          <a class="navbar-brand" href="index.php">
            <h2>Home <em>Furnishing</em></h2>
          </a>
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
              <li class="nav-item">
                <a class="nav-link" href="index.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cart-one" href="cart.php"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"
                  ><i class="fa-solid fa-circle-user"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

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

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                <li class="active" data-filter="*">All Products</li>
                <li data-filter=".table">Tables</li>
                <li data-filter=".bed">Bed</li>
                <li data-filter=".cabinet">Cabinets</li>
                <li data-filter=".sofa">Sofa</li>
              </ul>
            </div>
          </div>

          <!-- Search -->
          <!-- <section id="search" class="my-5 py5 ms-5">
            <div class="container mt-5 py-5">
              <p>Search Products</p>
              <hr />
            </div>

            <form action="products.php" method="POST">
              <div class="row mx-auto container">
                <div class="col-lg-12 col-md-12 col-sm-12">

                  <p>Category</p>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="category"
                      id="category_one"
                      value="Table"
                      type="submit" name="search"
                    />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Table
                    </label>
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="category"
                      id="category_two"
                      value="Bed"
                      type="submit" name="search"
                      checked
                    />
                    <label class="form-check-label" for="flexRadioDefault2">
                      Bed
                    </label>
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="category"
                      id="category_two"
                      value="Sofa"
                      type="submit" name="search"
                      checked
                    />
                    <label class="form-check-label" for="flexRadioDefault2">
                      Sofa
                    </label>
                  </div>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="category"
                      id="category_two"
                      value="Cabinet"
                      type="submit" name="search"
                      checked
                    />
                    <label class="form-check-label" for="flexRadioDefault2">
                      Cabinet
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group my-3 mx-3">
                <input type="submit" name="search" class="btn btn-primary" />
              </div>
            </form>
          </section> -->






          <!-- PRODUCTS -->
          <div class="mx-auto container col-md-12">
            <div class="filters-content">
              <div class="row grid">

      <?php while($row = $products->fetch_assoc()) {?>
                <div class="col-lg-4 col-md-4 all">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/<?php echo $row['product_image']; ?>"/>
                    <div class="down-content">
                      <a href="#">
                        <h4><?php echo $row['product_name']; ?></h4>
                      </a>
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
                       <a class="btn buy-btn"  href="<?php echo "single_product.php?product_id=".$row['product_id']; ?>"> Add to Cart <i class="fa fa-shopping-cart"></i></a>
                    </div>
                  </div>
                </div>
    <?php } ?>         


                <!-- <div class="col-lg-4 col-md-4 all tab">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/table-2.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>5-piece Dining Set</h4>
                      </a>
                      <h6>&#8369;19,299</h6>
                      <p>
                        This set includes a rectangular dining table and four
                        matching chairs with sleek, tapered legs and a
                        mid-century modern design.The table is crafted from
                        sturdy, natural wood finish and black accents, while the
                        chairs are upholstered in a comfortable, easy-to-clean
                        fabric.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all tab">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/table-3.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Simple Living Dining Set</h4>
                      </a>
                      <h6>&#8369;22,345</h6>
                      <p>
                        The set includes a rectangular dining table and four
                        chairs, all crafted from high-quality rubberwood for
                        durability and longevity. The table features a white
                        finish with a natural wood top, while the chairs are
                        finished in white with natural wood seats.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>

                 Beds -->

                <!-- <div class="col-lg-4 col-md-4 all bed">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/bed-1.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Solid Wood Spindle Bed</h4>
                      </a>
                      <h6>&#8369; 33,599</h6>
                      <p>
                        Crafted from high-quality solid wood, the bed features a
                        spindle headboard and footboard design that adds a touch
                        of elegance and sophistication to the room. The platform
                        design eliminates the need for a box spring, providing
                        ample support for your mattress while also giving the
                        bed a low profile look.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all bed">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/bed-2.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Modern Wooden Bed</h4>
                      </a>
                      <h6>&#8369; 50,368</h6>
                      <p>
                        Crafted from high-quality solid wood, this bed features
                        a low-profile design and a sturdy platform base that
                        eliminates the need for a box spring. The clean lines
                        and natural wood finish give the bed a modern and
                        contemporary look that is sure to complement any decor
                        style. Available in a range of sizes.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all bed">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/bed-3.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Grid-tufted Bed</h4>
                      </a>
                      <h6>&#8369; 55,690</h6>
                      <p>
                        Featuring a grid-tufted headboard with a charcoal grey
                        upholstery, this bed adds a touch of elegance and
                        sophistication to the room. The sturdy wood frame and
                        solid wood legs provide ample support, while the padded
                        headboard provides a comfortable spot to lean back and
                        relax. Available in a range of sizes.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div> -->

          <!-- Sofa -->
          <!-- <div class="col-md-12">
            <div class="filters-content">
              <div class="row grid">
                <div class="col-lg-4 col-md-4 all sof">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/sofa-1.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Futon Sofa Bed Modern</h4>
                      </a>
                      <h6>&#8369;15, 999</h6>
                      <p>
                        This sofa bed features a contemporary design and is
                        upholstered in durable polyester fabric, making it both
                        stylish and easy to clean. With a simple and intuitive
                        mechanism, it can be easily converted from a sofa to a
                        bed, making it perfect for guests or for use in a small
                        apartment or studio.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all sof">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/sofa-2.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Linen Wood Loveseat</h4>
                      </a>
                      <h6>&#8369;17, 559</h6>
                      <p>
                        Upholstered in soft linen fabric, this loveseat features
                        a sleek and modern design that is both elegant and
                        versatile. The sturdy solid wood legs provide ample
                        support and stability, while the cushioned seating
                        ensures maximum comfort for you and your guests.
                        Suggested for you and your family.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all sof">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/sofa-3.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Modern Folding Sofa</h4>
                      </a>
                      <h6>&#8369;19, 999</h6>
                      <p>
                        Made with soft and durable cotton fabric, modern design
                        with a pillow backrest that provides support and
                        comfort. The easy-to-use folding mechanism allows for
                        quick and effortless conversion from a sofa to a bed,
                        making it a great choice for unexpected guests or for
                        use in small living.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div> -->

                <!-- Cabinet -->

                <!-- <div class="col-lg-4 col-md-4 all cab">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/cabinet-1.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Storage Cabinet</h4>
                      </a>
                      <h6>&#8369; 12, 299</h6>
                      <p>
                        This cabinet features a sleek and modern design with a
                        white finish that will complement any bathroom decor.
                        The cabinet doors open to reveal two adjustable shelves
                        that can be customized to fit your specific storage
                        needs. The compact size of this cabinet makes it ideal
                        for small bathrooms or for use as a supplementary
                        storage option.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all cab">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/cabinet-2.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Kitchen Pantry Cabinet</h4>
                      </a>
                      <h6>&#8369; 11, 433</h6>
                      <p>
                        This cabinet features a classic design with a distressed
                        finish that will add a rustic touch to your kitchen
                        decor. The cabinet doors open to reveal four adjustable
                        shelves that can be customized to fit your specific
                        storage needs, making it perfect for storing pantry
                        items, kitchen supplies, and small appliances.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 all cab">
                  <div class="product-item">
                    <img
                      class="prod-img"
                      src="assets/images/cabinet-3.jpg"
                      alt=""
                    />
                    <div class="down-content">
                      <a href="#">
                        <h4>Tall Storage Cabinet</h4>
                      </a>
                      <h6>&#8369; 14, 199</h6>
                      <p>
                        Featuring a modern design with a rich espresso oak
                        finish, this cabinet will complement any decor style.
                        The cabinet doors open to reveal three adjustable
                        shelves that can be customized to fit your specific
                        storage needs, making it perfect for storing books,
                        office supplies, or other household items.
                      </p>
                      <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                      <button class="add">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-md-12">
            <ul class="pages">
              <li class="active"><a href="#">1</a></li>
                <a href="#"><i class="fa fa-angle-double-right"></i></a>
              </li>
            </ul>
          </div> --> 
        </div>
      </div>
    </div>
    

    <!-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>
                Copyright &copy; Online Home Furnishing - Design:
                <a
                  rel="nofollow noopener"
                  href="https://github.com/orgs/KodeGo-Bootcamp/teams/online-home-furnishing"
                  target="_blank"
                  >Group 4</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->

    <!-- Back to top -->

    <div onclick="scrollToTop()" class="scrollTop">
      <i class="fa-solid fa-chevron-up"></i>
    </div>

    <script>
      function scrollToTop() {
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
