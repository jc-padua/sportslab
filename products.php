<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sports Lab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once('include/connection.php');
    require('include/functions.php');
    ?>
    <!-- Header Start -->
    <?php
    include('header.php');
    ?>
    <!-- Header End -->

    <!-- Product Start -->
    <div class="container-fluid p-5">
        <div class="row g-5">
            <!-- Product list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <!-- Products Card Start-->
                    <?php if (isset($_POST["search"])) {
                        // (B1) SEARCH FOR PRODUCTS use different connection for search purpose
                        require "include/pdo.php";
                        // (B2) DISPLAY RESULTS
                        if (count($results) > 0) {
                            foreach ($results as $r) {
                                // printf("<div>%s - %s</div>", $r["product_title"], $r["product_category"]);
                                $prodImage = $r["product_image"];
                                $prodTitle = $r["product_title"];
                                $prodPrice = $r["product_price"];
                                echo "
                      <div class='col col-sm-6 col-md-6 '>
                      <div class='card'>
                          <img src= './admin/products-image/$prodImage' class='card-img-top' alt='...'>
                          <div class='card-body text-center'>
                              <h5 class='card-title'>$prodTitle</h5>
                              <p class='card-price'>₱ $prodPrice.00</p>
                              <a href='https://shopee.ph/' class='btn btn-primary'>Buy now!</a>
                          </div>
                      </div>
                  </div>
                      ";
                            }
                        } else {
                            echo "No results found";
                        }
                        //If product_category is not on the url then view all products
                    } else if (!isset($_GET['product_category'])) {
                        viewAllProducts();
                        //Then if product category is on the url then view filtered product by category selected by the user
                    } else {
                        viewProductCategory();
                    } ?>
                </div>
            </div>
            <!-- Product list End -->
            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <form method="POST" action="products.php" class="input-group">
                        <input type="search" name="search" id="search" class="form-control p-3" placeholder="Keyword" required>
                        <input type="submit" value="Search" class="btn btn-primary px-4"></input>
                    </form>
                </div>
                <!-- Search Form End -->
                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start bg-light rounded p-4">
                        <!-- <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Design</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Keyword Research</a>
                        <a class="fs-5 fw-bold text-light text-uppercase" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Email Marketing</a> -->
                        <a class="fs-5 fw-bold  text-uppercase mb-2" href="products.php"><i class="bi bi-arrow-right text-primary me-2"></i>View All Products</a>
                        <?php getCategories() ?>
                    </div>
                </div>
                <!-- Category End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php 
        include('footer.php');
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>