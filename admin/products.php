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
        <div class="row">
            <div class="col-md-12">
                <div align="right">
                    <a href="addProduct.php" class="btn btn-outline-dark" data-target="productModal">Add Product</a>
                </div>
                <table class="table table-bordered mt-3" id="tableToExcel">
                    <thead class="bg-dark text-white">
                    <tr>
                        <th>Product No</th>
                        <th>Category Id</th>
                        <th>Brand Id</th>
                        <th>Product Title</th>
                        <th>Product Keywords</th>
                        <th>Product Image 1</th>
                        <th>Product Image 2</th>
                        <th>Product Image 3</th>
                        <th>Price</th>
                        <th>
                            <i class="fa fa-eye"></i>
                        </th>
                        <th>
                            <i class="fa fa-pencil-square"></i>
                        </th>
                        <th>
                            <i class="fa fa-trash"></i>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td>
                                <img class="img-fluid rounded" src="../admin/images/student/<?php  ?>"
                                     width="100px;">
                            </td>
                            <td>
                                <img class="img-fluid rounded" src="../admin/images/student/<?php  ?>"
                                     width="100px;">
                            </td>
                            <td>
                                <img class="img-fluid rounded" src="../admin/images/student/<?php  ?>"
                                     width="100px;">
                            </td>
                            <td>
                            </td>
                            <td>
                                <a class="btn btn-info" href="student-details.php?id=<?php ?>">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="edit-student-details.php?id=<?php ?>">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="student.php?del=<?php ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- fontawesome script -->
<script src="../js/all.min.js"></script>
<!-- bootstrap script -->
<script src="../js/bootstrap.min.js"></script>