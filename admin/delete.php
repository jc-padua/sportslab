<?php 
include('include/connection.php');
// function delete() {
//    global $conn;
//    if (isset($_GET['delete'])) {
//       $id = $_GET['delete'];
//       $query = mysqli_query($conn, "DELETE FROM products WHERE product_ID = $id");
//       if ($query) {
//          echo '<script> alert("Data Deleted"); </script>';
//          // header('location:admin_product.php');
//       }
//    };
// }

if (isset($_POST['delete_prod'])) {
   $id = $_POST['prod_id'];
   $query = "DELETE FROM products WHERE product_ID= '$id'";
   $query_run = mysqli_query($conn, $query);

   if ($query_run) {
      echo "<script>alert('Successfully Deleted');</script>";
      header('Location: admin_product.php');
   } else {
      echo "<script>alert('Something Went Wrong');</script>";
      header('Location: admin_product.php');
   }
}

?>