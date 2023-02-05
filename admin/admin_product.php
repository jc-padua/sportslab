<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

   $product_name = $_POST['product_title'];
   $product_price = $_POST['product_price'];
   $product_category = $_POST['product_category'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   // $product_image_folder = 'products-image/'.$product_image;

   if (empty($product_name) || empty($product_price) || empty($product_image) || empty($product_category)) {
      $message[] = 'Please fill out all';
   } else {
      move_uploaded_file($product_image_tmp_name, "products-image/$product_image");
      $insert = "INSERT INTO products(product_title, product_price,product_category, product_image) VALUES('$product_name', '$product_price','$product_category', '$product_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         $message[] = 'New product added successfully';
         header('Location: admin_product.php');
      } else {
         $message[] = 'Could not add the product';
         header('Location: admin_product.php');
      }
   }
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sports Lab | Admin</title>
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<style>
   * {
      /* font-family: 'Poppins', sans-serif; */
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      border: none;
      text-decoration: none;
      text-transform: capitalize;
   }

   html {
      font-size: 66%;
      overflow-x: hidden;
   }

   .message {
      display: block;
      background: var(--bg-color);
      padding: 1.5rem 1rem;
      font-size: 2rem;
      color: var(--black);
      margin-bottom: 2rem;
      text-align: center;
   }

   .container {
      max-width: 1200px;
      padding: 2rem;
      margin: 0 auto;
   }

   .admin-product-form-container.centered {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;

   }

   .admin-product-form-container form {
      max-width: 50rem;
      margin: 0 auto;
      padding: 2rem;
      border-radius: .5rem;
      background: var(--bg-color);
   }

   .admin-product-form-container form h3 {
      text-transform: uppercase;
      color: var(--black);
      margin-bottom: 1rem;
      text-align: center;
      font-size: 2.5rem;
   }

   .admin-product-form-container form .box {
      width: 100%;
      border-radius: .5rem;
      padding: 1.2rem 1.5rem;
      font-size: 1.7rem;
      margin: 1rem 0;
      background: var(--white);
      text-transform: none;
   }

   .product-display {
      margin: 2rem 0;
   }

   .product-display .product-display-table {
      width: 100%;
      text-align: center;
   }

   .product-display .product-display-table thead {
      background: var(--bg-color);
   }

   .product-display .product-display-table th {
      padding: 1rem;
      font-size: 2rem;
      width: 10rem;
      text-align: center;
   }

   .product-display .product-display-table td {
      padding: 1rem;
      font-size: 2rem;
      border-bottom: var(--border);
   }

   .product-display .product-display-table .btn:first-child {
      margin-top: 0;
      padding: 1rem;
   }

   .product-display .product-display-table .btn:last-child {
      padding: 1rem;
   }

   .product-display .product-display-table .btn:last-child:hover {
      background: var(--black);
   }

   .product-display .product-display-table .btn-success {
      width: 100%;
   }

   .product-display .product-display-table .btn-outline-danger {
      width: 100%;
   }
</style>

<body>
   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         // echo '<span class="message">' . $message . '</span>';
         echo '<script>alert("' . $message . '");</script>';
      }
   }
   $select = mysqli_query($conn, "SELECT * FROM products");
   ?>
   <div class="container-fluid bg-dark px-0">
      <div class="row gx-0">
         <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="admin_home.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
               <h1 class="m-0 display-4 text-primary text-uppercase" style="color: #FB5B21 !important; font-size: 5.4rem;">Sports Lab</h1>
            </a>
         </div>
         <div class="col-lg-9">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
               <a href="index.php" class="navbar-brand d-block d-lg-none">
                  <h1 class="m-0 display-4 text-primary text-uppercase">Sports Lab</h1>
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

   <div class="container d-flex justify-content-between">
      <h1 style="font-size: 4rem;">PRODUCTS</h1>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary fs-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
         Add New Product
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <!-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Product</h1> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="admin-product-form-container">
                     <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                        <h3>add a new product</h3>
                        <input type="text" placeholder="Enter Product Name" name="product_title" class="box">
                        <input type="number" placeholder="Enter Product Price" name="product_price" class="box">
                        <input type="text" placeholder="Enter Product Category" name="product_category" class="box">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                        <input type="submit" class="btn btn-success" style="font-size: 1.6rem;" name="add_product" value="add product">
                     </form>
                  </div>
               </div>
               <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">OKay</button>
               </div> -->
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="delete.php" method="POST">
               <div class="modal-body">
                  <input type="hidden" name="prod_id" id="delete_id">
                  <h4> Do you want to delete this product?</h4>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="delete_prod" class="btn btn-danger">Delete</button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <!-- Update Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               ...
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Product Table -->

   <div class="container">
      <div class="product-display">
         <table class="product-display-table " id="example">
            <thead>
               <tr>
                  <th>product id</th>
                  <th>product image</th>
                  <th>product name</th>
                  <th>product price</th>
                  <th>product category</th>
                  <th>action</th>
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td class="prod_id"><?php echo $row['product_ID']; ?></td>
                  <td><img src="products-image/<?php echo $row['product_image']; ?>" height="100" alt="..."></td>
                  <td><?php echo $row['product_title']; ?></td>
                  <td>₱ <?php echo $row['product_price']; ?></td>
                  <td><?php echo $row['product_category']; ?></td>
                  <td>
                     <a href="admin_update.php?edit=<?php echo $row['product_ID']; ?>" class="btn btn-success mb-2"> <i class="fas fa-edit"></i> edit </a>
                     <!-- href="admin_product.php?delete=
                     <?php
                     // echo $row['product_ID']; 
                     ?>" 
                  -->
                     <button type="button" class="btn btn-outline-danger deletebtn"> <i class="fas fa-archive"></i> archive </button>
                  </td>
               </tr>
            <?php } ?>
         </table>
      </div>
   </div>
   <script src="https: //cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https: //cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#example').DataTable();
      });
   </script>

   <script>
      $(document).ready(function() {
         $('.deletebtn').click(function(e) {
            e.preventDefault();
            var prod_id = $(this).closest('tr').find('.prod_id').text()
            console.log(prod_id);
            $('#delete_id').val(prod_id);
            $('#deletemodal').modal('show');
         })
      });
      // })
   </script>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>