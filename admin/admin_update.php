<?php

@include 'config.php';

$id = $_GET['edit'];

if (isset($_POST['update_product'])) {

   $product_name = $_POST['product_title'];
   $product_price = $_POST['product_price'];
   $product_category = $_POST['product_category'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'products-image/' . $product_image;

   // if (empty($product_name) || empty($product_price) || empty($product_image)) {
   //    $message[] = 'please fill out all!';
   // } else {

      $update_data = "UPDATE products SET product_title='$product_name', product_price='$product_price', product_category='$product_category', product_image='$product_image'  WHERE product_ID = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_product.php');
      } else {
         $$message[] = 'please fill out all!';
      }
   // }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/update.css">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
<div class="container-fluid bg-dark px-0">
      <div class="row gx-0">
         <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="admin_home.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
               <h1 class="m-0 display-4 text-primary text-uppercase" style="color: #FB5B21 !important; font-size: 4.4rem;">Sport's Lab</h1>
            </a>
         </div>
         <div class="col-lg-9">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
               <a href="index.php" class="navbar-brand d-block d-lg-none">
                  <h1 class="m-0 display-4 text-primary text-uppercase">Sport's Lab</h1>
               </a>
               <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav mr-auto py-0">
                     <a href="admin_home.php" class="nav-item nav-link">Home</a>
                     <a href="admin_aboutus.php" class="nav-item nav-link">About</a>
                     <a href="admin_product.php" class="nav-item nav-link">Products</a>
                     <a href="admin_contact.php" class="nav-item nav-link">Contact Us</a>
                  </div>
                  <a href="logout.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block" style="background: #FB5B21 !important; border: none; ">Logout</a>
               </div>
            </nav>
         </div>
      </div>
   </div>
   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }
   ?>
   <div class="container d-flex align-items-center justify-content-center">
      <div class="admin-product-form-container centered">
         <?php
         $select = mysqli_query($conn, "SELECT * FROM products WHERE product_ID = '$id'");
         while ($row = mysqli_fetch_assoc($select)) {
         ?>
            <form action="" method="post" enctype="multipart/form-data">
               <h3 class="title">update the product</h3>
               <div class="input-group">
                  <input type="text" class="box" name="product_title" value="<?php echo $row['product_title']; ?>" placeholder="enter the product name" required>
                  <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['product_price']; ?>" placeholder="enter the product price" required>
                  <input type="text" placeholder="Enter Product Category" name="product_category" class="box" value="<?php echo $row['product_category']; ?>" required>
                  <input type="file" class="box" name="product_image" value="<?php echo $row['product_image']; ?>" accept="image/png, image/jpeg, image/jpg" required>
               </div>
               <input type="submit" value="update product" name="update_product" class="btn btn-success" style="padding: 1.5rem; font-size: 1.5rem;">
               <a href="admin_product.php" class="btn btn-danger" style="padding: 1.5rem; font-size: 1.5rem;">go back!</a>
            </form>

      </div>

      <div class="view-product text-center">
         <h2>Current Card View</h2>
         <div class="card" style="width: 45rem;">
            <img src="products-image/<?php echo $row['product_image']; ?>" class="card-img-top text-center" alt="Product Image" style="width: 40rem; margin: 0 auto;">
            <div class="card-body text-center">
               <h2 class="card-title"><?php echo $row['product_title']; ?></h2>
               <p class="card-text">₱ <?php echo $row['product_price']; ?>.00</p>
               <a href="#" class="btn " style="background: #FB5B21 !important; color: #FFF; padding: 1rem;">Buy Now!</a>
            </div>
         </div>

      </div>
   <?php }; ?>
   </div>
</body>

</html>