<?php
    include('inc/connect.php');

?>

<div class="list-group bg-dark">
    <ul class="navbar-nav text-center bg-dark">
        <li class="nav-item bg-dark">
            <a href="" class="nav-link text-white"><h5>Brands</h5></a>
        </li>
            <?php
            $selectBrands = "SELECT * FROM `brands`";
            $selectBrandsQuery = mysqli_query($connection, $selectBrands);

            while ($row = mysqli_fetch_assoc($selectBrandsQuery)) {
                $brandId = $row['brandId'];
                $brandName = $row['brandName'];
            echo "<li class='nav-item'><a href='' class='nav-link text-dark bg-light'>$brandName</a></li>";
            }
        ?>
    </ul>

    <ul class="navbar-nav text-center">
        <li class="nav-item bg-dark">
            <a href="" class="nav-link text-white"><h5>Categories</h5></a>
        </li>
        <?php
        $selectCategory = "SELECT * FROM `categories`";
        $selectCategoryQuery = mysqli_query($connection, $selectCategory);

        while ($row = mysqli_fetch_assoc($selectCategoryQuery)) {
            $categoryId = $row['categoryId'];
            $categoryName = $row['categoryName'];
            echo "<li class='nav-item'><a href='' class='nav-link text-dark bg-light'>$categoryName</a></li>";
        }
        ?>
    </ul>
</div>