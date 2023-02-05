<?php 
    $active = 'active';
?>

<div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Sports Lab</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">sportslab@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+012 345 6789</h6>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Sports Lab</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="aboutus.php" class="nav-item nav-link">About</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <!-- <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                    <a href="detail.php" class="dropdown-item">Blog Detail</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
                                    <li><a class="dropdown-item" href="products.php">View All Products<a/></li>
                                    <?php
                                    $sql = "SELECT DISTINCT product_category FROM `products`";
                                    $categories = $conn->query($sql);
                                    while ($row = mysqli_fetch_assoc($categories)) {
                                        echo '<li><a class="dropdown-item" href="products.php?product_category=' . $row['product_category'] . '" >' . $row['product_category'] . '</a></li>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <a href="https://shopee.ph/" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Shop Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>