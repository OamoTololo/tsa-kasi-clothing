<?php
    include '../inc/connect.php';

    $category = "SELECT * FROM `categories`";
    $runCategory = mysqli_query($connection, $category);
    $categoryRow = mysqli_num_rows($runCategory);

    $brand = "SELECT * FROM `brands`";
    $runBrand = mysqli_query($connection, $brand);
    $brandRow = mysqli_num_rows($runBrand);

?>

<div class="list-group bg-dark">
    <a href="../admin/index.php" class="list-group-item list-group-item-action bg-dark text-center text-white text-uppercase">
        Admin panel
    </a>
    <a href="../admin/products.php" class="list-group-item list-group-item-action">
        <i class="fa fa-user"></i> Products
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php ?></span>
        </button>
    </a>
    <a href="../admin/categories.php" class="list-group-item list-group-item-action">
        <i class="fa fa-user"></i> Categories
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php echo $categoryRow?></span>
        </button>
    </a>
    <a href="../admin/brands.php" class="list-group-item list-group-item-action">
        <i class="fa fa-lightbulb"></i> Brands
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php echo $brandRow; ?></span>
        </button>
    </a>

    <a href="../admin/orders.php" class="list-group-item list-group-item-action">
        <i class="fa fa-sort"></i> All Orders
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php ?></span>
        </button>
    </a>

    <a href="../admin/payments.php" class="list-group-item list-group-item-action">
        <i class="fa fa-money-bill"></i> All Payments
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php ?></span>
        </button>
    </a>

    <a href="../admin/users.php" class="list-group-item list-group-item-action">
        <i class="fa fa-question"></i> Users
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php ?></span>
        </button>
    </a>

    <a href="../admin/message.php" class="list-group-item list-group-item-action">
        <i class="fa fa-envelope"></i> Logout
        <button type="button" class="btn btn-primary pull-right btn-sm">
            <span class="badge badge-light text-danger"><?php ?></span>
        </button>
    </a>
</div>