<?php
include '../inc/connect.php';

if(isset($_POST['saveCategory'])) {
    $categoryName = $_POST['categoryName'];

    $selectCategory = "SELECT * FROM products WHERE categoryName = '$categoryName'";
    $selectResult = mysqli_query($connection, $selectCategory);
    $categoryRows = mysqli_num_rows($selectResult);

    if($categoryRows > 0) {
        echo "<script>alert('Category name already exists');</script>";
        echo "<script>window.open('../admin/categories.php', '_self')</script>";
    }
    $insertCategory = "INSERT INTO products (categoryName) VALUES ('$categoryName')";
    $insertResult = mysqli_query($connection, $insertCategory);

    if($insertResult) {
        echo "<script>alert('New Category Added Successfully!');</script>";
        echo "<script>window.open('../admin/categories.php', '_self')</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Fontawesome link -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .navbar-logo {
            width: 5%;
            height: 5%;
        }
        .footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
<div class="row mt-2">
    <div class="col-md-12">
        <?php include '../admin/top.php'?>
        <?php include('../admin/navbar.php');?>
        <?php include('../admin/user-panel.php');?>
    </div>
</div>

<div class="row mt-1">
    <div class="col-md-3">
        <?php include('../admin/sidenav.php');?>
    </div>

    <div class="col-md-9">
        <div class="row p-5">
            <div class="col-md-12">
                <h2 class="text-center text-white bg-dark">Add Products</h2>
            </div>
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4 mt-2 w-50 m-auto p-0">
                        <label class="form-label text-danger" for="imageTitle">Product Name</label>
                        <input type="text" class="form-control text-center" placeholder="Enter Product Name" name="imageTitle" required id="imageTitle" autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                        <label class="form-label text-danger" for="productDescription">Product Description</label>
                        <input type="text" class="form-control text-center" placeholder="Enter Product Description" name="productDescription" required id="productDescription" autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                        <label class="form-label text-danger" for="productKeyword">Product Keyword</label>
                        <input type="text" class="form-control text-center" placeholder="Enter Product Keyword" name="productKeyword" required id="productKeyword" autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label class="form-label text-danger" for="productKeyword">Category</label>
                        <select name="productCategory" id="" class="form-control">
                            <option value="">Select Category</option>
                            <option value="jeans">Jeans</option>
                            <option value="shoes">Shoes</option>
                        </select>
                    </div>
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label class="form-label text-danger" for="productKeyword">Brand</label>
                        <select name="productCategory" id="" class="form-control">
                            <option value="">Select Brand</option>
                            <option value="jeans">Owdi Design</option>
                            <option value="shoes">Logic Vibes</option>
                        </select>
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                            <label class="form-label text-danger" for="productImage1">Product Image 1</label>
                            <input type="file" class="form-control text-center" placeholder="Enter Product Keyword" name="productImage1" required id="productKeyword" autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                            <label class="form-label text-danger" for="productImage2">Product Image 2</label>
                            <input type="file" class="form-control text-center" placeholder="Enter Product Keyword" name="productImage2"  autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                            <label class="form-label text-danger" for="productImage3">Product Image 3</label>
                            <input type="file" class="form-control text-center" placeholder="Enter Product Keyword" name="productImage3"  autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                            <label class="form-label text-danger" for="productAmount">Product Amount</label>
                            <input type="text" class="form-control text-center" placeholder="Enter Product Amount" name="productAmount" required id="productAmount" autocomplete="off">
                    </div>
                    <div class="form-outline mb-4 mt-2 w-50 m-auto">
                        <button type="submit" class="btn btn-outline-success btn-block mt-3" name="saveProduct">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- fontawesome script -->
<script src="../js/all.min.js"></script>
<!-- bootstrap script -->
<script src="../js/bootstrap.min.js"></script>