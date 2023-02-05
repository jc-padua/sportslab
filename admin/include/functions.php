<?php
include('include/connection.php');

function getCategories()
{
    global $conn;
    $get_categories = "SELECT DISTINCT product_category FROM products LIMIT 5 ";
    $set_categories = mysqli_query($conn, $get_categories);
    while ($row_categories = mysqli_fetch_array($set_categories)) {
        // $categoryID = $row_categories['product_ID'];
        $categoryTitle = $row_categories['product_category'];
        echo "
            <a href='products.php?product_category=$categoryTitle' class='nav-link fs-4'> $categoryTitle </a>
        ";
    }
}

function viewAllProducts()
{
    global $conn;
    $sql = "SELECT * FROM products";
    $all_product = $conn->query($sql);
    echo "
    <h1>All Products</h1>
    ";
    while ($row = mysqli_fetch_assoc($all_product)) {
        $productImage = $row['product_image'];
        $productTitle = $row['product_title'];
        $productPrice = $row['product_price'];
        echo "
        <div class='col col-sm-4 col-md-6 '>
        <div class='card w-auto d-flex justify-content-center align-items-center text-center'>
            <img src= 'products-image/$productImage' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$productTitle</h5>
                <p class='card-price'>₱ $productPrice.00</p>
                <a href='#' class='btn btn-primary'>Buy now!</a>
            </div>
        </div>
    </div>
        ";
    }
}

function viewLimitedProducts()
{
    global $conn;
    $sql = "SELECT * FROM products LIMIT 4";
    $all_product = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($all_product)) {
        $productImage = $row['product_image'];
        $productTitle = $row['product_title'];
        $productPrice = $row['product_price'];
        echo "
        <div class='col col-sm-4 col-md-3'>
        <div class='card text-center mt-4'>
            <img src= 'products-image/$productImage' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$productTitle</h5>
                <p class='card-price'>₱ $productPrice.00</p>
                <a href='#' class='btn btn-primary'>Buy now!</a>
            </div>
        </div>
    </div>
        ";
    }
}

function viewProductCategory()
{
    global $conn;
    if (isset($_GET['product_category'])) {
        $productCategory = $_GET['product_category'];
        $get_p_cat = "SELECT * FROM products where product_category='$productCategory'";
        // print_r($productCategory);
        // $run_p_cat = mysqli_query($conn,$get_p_cat);
        // $row_p_cat = mysqli_fetch_array($run_p_cat);
        // $p_cat_title = $row_p_cat['p_cat_title'];
        // $p_cat_desc = $row_p_cat['p_cat_desc'];
        $get_products = "select * from products where product_category='$productCategory'";
        $run_products = mysqli_query($conn, $get_products);
        $count = mysqli_num_rows($run_products);
        if ($count == 0) {
            echo "    
                <div class='box'>        
                    <h1> No Product Found In This Product Category </h1>        
                </div>    
            ";
        } else {
            echo "    
                <div class='box'>        
                    <h1> $productCategory </h1>     
                </div>    
            ";
        }
        while ($row_products = mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_ID'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img = $row_products['product_image'];
            echo "    
            <div class='col col-sm-4 col-md-6 '>
            <div class='card'>
                <img src= 'products-image/$pro_img' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$pro_title</h5>
                    <p class='card-price'>₱ $pro_price.00</p>
                    <a href='#' class='btn btn-primary'>Buy now!</a>
                </div>
            </div>
            </div>
            ";
        }
    }
}

function search() {
    if (isset($_POST["search"])) {
        // (B1) SEARCH FOR USERS
        require "php/connection.php";
      
        // (B2) DISPLAY RESULTS
        if (count($results) > 0) { foreach ($results as $r) {
          // printf("<div>%s - %s</div>", $r["product_title"], $r["product_category"]);
          $prodImage = $r["product_image"];
          $prodTitle = $r["product_title"];
          $prodPrice =$r["product_price"];
          echo "
          <div class='col col-sm-4 col-md-3 '>
          <div class='card w-auto d-flex justify-content-center align-items-center text-center'>
              <img src= 'products-image/$prodImage' class='card-img-top' alt='...'>
              <div class='card-body'>
                  <h5 class='card-title'>$prodTitle</h5>
                  <p class='card-price'>₱ $prodPrice.00</p>
                  <a href='#' class='btn btn-primary'>Buy now!</a>
              </div>
          </div>
      </div>
          ";
        }} else { echo "No results found"; }
      
        
      }
}

?>
