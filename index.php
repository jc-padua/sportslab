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
    include('include/connection.php');
    include('include/functions.php');
    ?>
    <!-- Header Start -->
    <?php
    include('header.php');
    ?>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/home1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Sports Shop</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Making sports more accessible to young people</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/home2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Sports Shop</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Playing your favorite sports is the best thing in the world.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/logo.png" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase">About Us</h5>
                    <h1 class="display-3 text-uppercase mb-0">Welcome to Sports Lab</h1>
                </div>
                <h4 class="text-body mb-4">Sports Lab will sell the latest and most popular name-brand sporting goods, apparel, and accessories.</h4>
                <p class="mb-4">Born to glory, destined to be extraordinary. All in order to better sports experience. It provides the best fashion sports equipment for all sports fans around the world.</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill" href="#pills-1">About Us</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill" href="#pills-2">Why Choose Us</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0 ">The Sports Lab location opened on August 30, 2022 in the City of Calamba in Laguna province, Philippines. The name was inspired when our team was founded and we chose to name each member "Lab" after the laboratories in which we work. The love of sports inspired both the name and the sports logo.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0">We stand out to be an iconic vendor in the sports goods industry with broad product categories, and best quality to meet the demands of our customers. Starting as a single business focusing on high quality sports equipment and some products, the shop grew to be one of Laguna's most popular sports shops. Sports Lab has thrived mostly through word of mouth and brand reputation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <!-- <i class="flaticon-six-pack display-1 text-primary"></i> -->
                    <h3 class="text-uppercase my-4">Game Ready</h3>
                    <p>Never lose a game with Sports Lab Game Ready.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <!-- <i class="flaticon-barbell display-1 text-primary"></i> -->
                    <h3 class="text-uppercase my-4">Competition Level</h3>
                    <p>Lead the team with competition level equipment.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <!-- <i class="flaticon-bodybuilding display-1 text-primary"></i> -->
                    <h3 class="text-uppercase my-4">High Quality</h3>
                    <p>Thousands of equipments with the best quality for you.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">Great Shopping Experience</h1>
                <a href="https://shopee.ph/" class="btn btn-primary py-3 px-5">Shop with us now</a>
            </div>
        </div>
    </div>
    <!-- Programe Start -->


    <!-- Class Timetable Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Our Brand</h5>
            <h1 class="display-3 text-uppercase mb-0">Partners</h1>
        </div>
        <div class="tab-class text-center">
            <!-- <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">3</a>
                </li>
            </ul> -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-1.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-2.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-4.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-5.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-7.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-8.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="rounded text-center py-2 px-3">
                                    <img style="width:150px;height:150px;" src="img/brand-9.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Class Timetable Start -->


    <!-- Facts Start -->
    <div class="container-fluid bg-dark facts p-2 my-2">
        <div class="row gx-0 gy-4 py-5">
            <div>
                <!-- <div class="ps-4">
                    <h3 class=" text-white text-center "> The retail store is open Monday through Saturday from 9:00 am to 7:00 pm and is closed on Sunday. </h3>
                </div> -->
                <h2 class="text-center fs-1 text-white mb-5">Best Selling Products</h2>
                <div class="best-selling-categories d-flex gap-5 justify-content-center mb-5 nav">
                    <a href='products.php' class='nav-link fs-4'> View All Product </a>
                    <?php
                    getCategoriesLimit();
                    ?>
                </div>

                <div class="card-container container">
                    <div class="row justify-content-center">
                        <?php
                        viewLimitedProducts()
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Shop Now in our</h5>
            <h1 class="display-3 text-uppercase mb-0">Online Shop</h1>
        </div>

        <div class="row g-5">

            <div class="col-lg-4 col-md-6" style="margin-left: 18%">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="img/shopee.png" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://shopee.ph"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">SHOPEE</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="img/lazada.png" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://www.lazada.com.ph"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">LAZADA</h5>

                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid p-0 my-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/customer.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 bg-dark p-5">
                <div class="mb-5">
                    <h5 class="text-primary text-uppercase">FeedBack</h5>
                    <h1 class="display-4 text-uppercase text-light mb-0 ">Our Customers Say</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>The service is smooth and straightforward. The website was helpful. I would recommend this to everyone.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Tricia</h5>
                                <span class="text-uppercase text-secondary">Football Player</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>The customer needs and requirements are really what the service focuses on. This website is very useful and easy to use.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Joy</h5>
                                <span class="text-uppercase text-secondary">Badminton Player</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>The customer needs and requirements are really what the service focuses on. This website is very useful and easy to use.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Ron</h5>
                                <span class="text-uppercase text-secondary">Basketball Player</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




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