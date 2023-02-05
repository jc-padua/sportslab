<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sports Lab | Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <?php
    include('include/connection.php');
    include('include/functions.php');
    include('admin_header.php');
    ?>
    <!-- Header End -->

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
                    <h1 class="display-3 text-uppercase mb-0">Welcome to Sport's Lab</h1>
                </div>
                <h4 class="text-body mb-4">Sport's Lab will sell the latest and most popular name-brand sporting goods, apparel, and accessories.</h4>
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
                            <p class="text-secondary mb-0">The Sports Lab location opened on August 30, 2022 in the City of Calamba in Laguna province, Philippines. The name was inspired when our team was founded and we chose to name each member "Lab" after the laboratories in which we work. The love of sports inspired both the name and the sports logo.</p>
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
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 180px;">
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
            <div class="container-fluid bg-dark facts p-5">
                <div class="row gx-5 gy-4 py-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-star fs-4 text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-secondary text-uppercase">Experience</h5>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">1252</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users fs-4 text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-secondary text-uppercase">Our Equipments</h5>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">545</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-check fs-4 text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-secondary text-uppercase">Team Buyer</h5>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">230</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-mug-hot fs-4 text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">2000</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Programe Start -->

    <div class="container-fluid">
        <div class="row ">
        <h1 class="display-3 text-uppercase mb-5 text-center">Team</h1>
            <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-3">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/developers/tricia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tricia D. Cabantog</h5>
                        <p class="card-text">Designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-3">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/developers/joy.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Joy F. Buenaceda</h5>
                        <p class="card-text">Web Writer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-3">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/developers/ron.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ron Angelo D. Estrella</h5>
                        <p class="card-text">Programmer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-3">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/developers/jork.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jork Cedric F. Padua</h5>
                        <p class="card-text">Programmer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Footer Start -->
    <?php
    include('admin_footer.php');
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>