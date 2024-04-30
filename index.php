<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tsa Kasi Clothing</title>
    <!-- Fontawesome link -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Personal css stylesheet link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <!-- Navbar -->
                <?php include 'navbar.php'?>
                <!-- user panel -->
                <?php include 'user-panel.php'?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <!-- Side Navbar -->
                <?php include 'sidenav.php'?>
            </div>
            <div class="col-md-10">
                    <!-- Products -->
                    <?php include 'products.php'?>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>

<!-- fontawesome script -->
<script src="js/all.min.js"></script>
<!-- bootstrap script -->
<script src="js/bootstrap.min.js"></script>
<!-- Jquery script -->
<script src="js/jquery.js"></script>
<!-- Personal javascript -->
<script src="js/script.js"></script>
</body>
</html>