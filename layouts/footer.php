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

<script>
  
  function search_product(){
    alert( document.getElementById("search_box").value );
    var elements = document.getElementsByName("product_img");
      if(elements[1].hidden){
          elements[1].hidden = false;
          
  
      }else{
          elements[1].hidden = true;
      }
  }
  
  </script>
  </body>
</html>