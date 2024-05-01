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
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <?php include '../admin/navbar.php'?>
                <?php include '../user-panel.php'?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <?php include '../admin/sidenav.php'?>
            </div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <div class="row mt-1">
                        <div class="col-md-9">
                            <div class="row">
                               <div class="col-md-3">
                                    <div class="card text-primary border-info">
                                        <div class="card-header bg-info  text-white">Products</div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <?php
                                                    for($i = 0; $i <= 10; $i++) {
                                                        $brands = "SELECT * FROM brands WHERE brandname = '$i'";
                                                        $runBrands = mysqli_query($connection, $brands);
                                                        $brandRow = mysqli_num_rows($runBrands);

                                                ?>
                                                <tr>
                                                    <th class="bg-light text-dark">No of Products <?php ;?></th>
                                                    <th class="text-danger"><?php $i?></th>
                                                </tr>
                                                <tr>
                                                    <th class="bg-light text-dark">Total Products Amount <?php ;?></th>
                                                    <th class="text-danger">R<?php ?></th>
                                                </tr>

                                                <?php
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-primary border-info">
                                        <div class="card-header bg-info  text-white">Total Fee Collected</div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <th class="bg-light text-dark">Total Fees</th>
                                                    <th>R <?php ?></th>
                                                </tr>
                                                <tr>
                                                    <th class="bg-light text-dark">Collected Fees</th>
                                                    <th>R <?php ?></th>
                                                </tr>
                                                <tr>
                                                    <th class="bg-light text-danger">Remaining Fees</th>
                                                    <th class="text-danger">R <?php ?></th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><br>

                                    <div class="card text-primary border-info">
                                        <div class="card-header bg-info  text-white">Balance Cash</div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-co">
                                                <tbody>
                                                <tr>
                                                    <th class="bg-light text-dark">Collected Fees</th>
                                                    <th>R <?php ?></th>
                                                </tr>
                                                <tr>
                                                    <th class="bg-light text-dark">Spent Fees</th>
                                                    <th>R <?php ?></th>
                                                </tr>
                                                <tr>
                                                    <th class="bg-light text-danger">Remaining Balance</th>
                                                    <th class="text-danger">R <?php ?></th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><br>


                                </div>
                                <div class="col-md-5">
                                    <div class="card text-primary border-info">
                                        <div class="card-header bg-info text-white">Expenses <small>( Last 10 expenses )</small></div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-co">
                                                <thead class="">
                                                <tr>
                                                    <th class="text-dark">Sr No</th>
                                                    <th class="text-dark">Date</th>
                                                    <th class="text-dark">Amount</th>
                                                    <th class="text-dark">Particular</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="bg-light text-danger"><?php  ?></td>
                                                        <td class="bg-light text-danger"><?php  ?></td>
                                                        <td class="bg-light text-danger">R <?php ?></td>
                                                        <td class="bg-light text-danger"><?php ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../footer.php'?>
<!-- fontawesome script -->
<script src="../js/all.min.js"></script>
<!-- bootstrap script -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>