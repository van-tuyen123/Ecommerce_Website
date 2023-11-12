<!-- connect file -->
<?php

include('../includes/connect.php');
include('../funtions/common_funtion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Thời Trang</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Bootstrap -->
     <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- css file -->
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="../images/favicon/logo-gucci.jpg"  sizes="16x16">

     <style>
         .logo1{
    width: 3%;
    height: 6%;
          } 
        .admin_image{
    width: 60px;
    object-fit: contain;
}
.footer{
    position: absolute;
    bottom: 0;
}
body{
    overflow-x: hidden;
}
.product_img{
    width: 130px;
    object-fit: contain;

}

     </style>
</head>
<body>
    

<!-- navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/logo.jpg" alt="" class="logo1">
            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
    
    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="./index.php"><img src="./product_images/admin.png" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin</p>
            </div>
            <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
            <div class="button text-center ">
                <button><a href="./admin_registration.php" class="nav-link text-light bg-info p-3">Register</a></button>
                <button><a href="./admin_login.php" class="nav-link text-light bg-info p-3">Login</a></button>
                <button><a href="insert_product.php" class="nav-link text-light bg-info p-3">Insert Products</a></button>
                <button><a href="index.php?view_products" class="nav-link text-light bg-info p-3">View products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info p-3">Insert Categories</a></button>
                <button><a href="index.php?view_categories" class="nav-link text-light bg-info p-3">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info p-3">Insert Brands</a></button>
                <button><a href="index.php?view_brands" class="nav-link text-light bg-info p-3">View Brands</a></button>
                <button><a href="index.php?list_orders" class="nav-link text-light bg-info p-3">All orders</a></button>
                <button><a href="index.php?list_payments" class="nav-link text-light bg-info p-3">All payments</a></button>
                <button><a href="index.php?list_users" class="nav-link text-light bg-info p-3">List users</a></button>
                <button><a href="../index.php" class="nav-link text-light bg-info p-3">Logout</a></button>
            </div>
        </div>
    </div>

    <!-- fourth child -->
    <div class="container my-3">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        if(isset($_GET['view_products'])){
            include('view_products.php');
        }
        if(isset($_GET['edit_products'])){
            include('edit_products.php');
        }
        if(isset($_GET['delete_product'])){
            include('delete_product.php');
        }
        if(isset($_GET['view_categories'])){
            include('view_categories.php');
        }
        if(isset($_GET['view_brands'])){
            include('view_brands.php');
        }
        if(isset($_GET['edit_category'])){
            include('edit_category.php');
        }
        if(isset($_GET['edit_brands'])){
            include('edit_brands.php');
        }
        if(isset($_GET['delete_category'])){
            include('delete_category.php');
        } 
        if(isset($_GET['delete_brands'])){
            include('delete_brands.php');
        }
        if(isset($_GET['list_orders'])){
            include('list_orders.php');
        }
        if(isset($_GET['list_payments'])){
            include('list_payments.php');
        }
        if(isset($_GET['list_users'])){
            include('list_users.php');
        }
        ?>
    </div>
    

    <!-- last child -->
<!-- <div class="bg-info p-3 text-center footer">
  <p>All right reserved @- Designed by VanTuyen-2023 </p>
</div> -->
<?php
include("../includes/footer.php");
?>
    </div>


<!-- bootstrap js link -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>