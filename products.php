<?php

include('server/connection.php');
if (isset($_POST['search'])) {
  // Call a function to perform the desired action
  $query = $_POST['query'];
  // echo "<script> alert('".$query."'); </script>";
  $stmt = $conn->prepare("SELECT * FROM products WHERE product_name LIKE '%". $query ."%' OR product_category LIKE '%". $query ."%'");

  $stmt->execute();
  $products = $stmt->get_result();

}else{
  // determine the page number
  if(isset($_GET['page_no']) && $_GET['page_no'] !=""){
    //if user has alredy entered page then page number is the one that they selected
    $page_no = $_GET['page_no'];
  }else{
    //if user just entered the page then default page is number one.
    $page_no = 1;
  }
    //return number of products
  $stmt1 = $conn->prepare("SELECT COUNT(*) As total_records FROM products");
  $stmt1->execute();
  $stmt1->bind_result($total_records);
  $stmt1->store_result();
  $stmt1->fetch();

  //products per page
  $total_records_per_page = 9;
  $offset = ($page_no-1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2";
  $total_no_of_pages = ceil($total_records/$total_records_per_page);

  //get all products
$stmt2 = $conn->prepare("SELECT * FROM products LIMIT $offset,$total_records_per_page");
$stmt2->execute();
$products = $stmt2->get_result();


}






?>
<?php include('layouts/header.php'); ?>
<script>
  var temp_select1 = [];
</script>
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
              <li class="active" data-filter="*">All Products</li>
              <li data-filter=".tab">Tables</li>
              <li data-filter=".bed">Bed</li>
              <li data-filter=".cab">Cabinets</li>
              <li data-filter=".sof">Sofa</li>
          </ul>
          <!-- SEARCH BOX -->
          <!--<input id="search_box" onchange="search_product()" type="text">-->
          <form action="products.php" method="POST">
            <input type="text" name="query" placeholder="Search Product">
            <button type="submit" name="search">Search</button>
          </form>
        </div>
      </div>

      <div class="col-md-12">
        <div class="filters-content">
          <div class="row grid">

            <?php
            $furn_cat = "";
            $temp_count = 0 ;
            while ($row = $products->fetch_assoc()) {
              if($row['product_category'] == "Table"){
                $furn_cat = "col-lg-4 col-md-4 all tab";
              }else if($row['product_category'] == "Bed"){
                $furn_cat = "col-lg-4 col-md-4 all bed";
              }else if($row['product_category'] == "Sofa"){
                $furn_cat = "col-lg-4 col-md-4 all sof";
              }else if($row['product_category'] == "Cabinet"){
                $furn_cat = "col-lg-4 col-md-4 all cab";
              }
              ?>
            <div name="product_img" class="<?php echo $furn_cat; ?>"> 
              
                <div class="product-item">
                  <img class="prod-img" src="assets/images/<?php echo $row['product_image']; ?>" />
                  <div class="down-content">
                    <a href="#"><?php echo "<script> temp_select1[".$temp_count."] = '".$row['product_name']."';</script>";?>
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
            
            $temp_count++; 
            } 
            ?>
            </div>
          </div>
        </div>
<!----------------------------------------------------------------->
    </div>
  </div>
</div>


<!-- Pagination -->
<nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">

            <li class="page-item <?php if($page_no<=1){echo 'disabled';} ?>"><a class="page-link" href="<?php if($page_no <=1) {echo '#';} else { echo "?page_no=".($page_no-1);} ?>">Previous</a></li>

            <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
            <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>

            <?php if($page_no >= 3)  {?>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo "?page_no=".$page_no;?>"><?php echo $page_no; ?></a></li>
            <?php } ?>


            <li class="page-item <?php if($page_no>= $total_no_of_pages){echo 'disabled';}?>"><a class="page-link" href="<?php if($page_no >= $total_no_of_pages) { echo '#';} else { echo "?page_no=".($page_no+1);}?>">Next</a></li>
          </ul>
        </nav>


<!-- ******************************************* -->
      <?php include('layouts/footer.php');?>