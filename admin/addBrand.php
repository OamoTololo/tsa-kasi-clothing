<?php
include '../inc/connect.php';

if(isset($_POST['saveBrand'])) {
    $brandName = $_POST['brandName'];

    $selectBrand = "SELECT * FROM brands WHERE brandName = '$brandName'";
    $selectResult = mysqli_query($connection, $selectBrand);
    $brandRows = mysqli_num_rows($selectResult);

    if($brandRows > 0) {
        echo "<script>alert('Brand name already exists');</script>";
        echo "<script>window.open('../admin/brands.php', '_self')</script>";
    }
    $insertBrand = "INSERT INTO brands (brandName) VALUES ('$brandName')";
    $insertResult = mysqli_query($connection, $insertBrand);

    if($insertResult) {
        echo "<script>alert('New Brand Added Successfully!');</script>";
        echo "<script>window.open('../admin/brands.php', '_self')</script>";
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
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger" for="imageTitle">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-center" placeholder="Enter Brand Name" name="brandName" required id="saveBrand" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-outline-success btn-block" name="saveBrand">Save Brand</button>
                        </div>
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