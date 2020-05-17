<?php
require('config.php');

$host = '127.0.0.1';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s;port=%s", $host, DB_NAME, $charset, $port);
try {
    $pdo = new \PDO($dsn, DB_USER, DB_PASSWORD, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title><?php echo TITLE ?></title>
    <!-- Cab CSS Files-->
    <link rel="stylesheet" href="assets/css/cab_app.css" />
    <link rel="stylesheet" href="assets/css/cab_main.css" />
</head>

<body id="bodyTop">
    <?php
    require('views/header.php')
    ?>

    <!-- Cab Mini Hero Section Starts Here -->
    <section class="cab-mini-hero-section"
    style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(assets/img/inner-bg.jpg) no-repeat bottom; background-size: cover">
        <div class="container">
            <div class="cab-mini-hero-inner">
                <h5>Check our menu</h5>
                <h2 class="display-4">Our Menu</h2>
            </div>
        </div>
    </section>
    <!-- Cab Mini Hero Section Ends Here -->

    <!-- Cab Menu Section v2 Starts Here -->
    <section class="cab-menu-section v2">
        <div class="container">
            <div class="cab-menu-content-box">
                <ul class="nav nav-pills v2" role="tablist">
                    <?php
                    $query = 'SELECT * FROM categories';
                    $stmt = $pdo->query($query);
                    $i = 0;
                    while ($row = $stmt->fetch()) {
                        $i++;
                    ?>
                        <li class="<?php if ($i == 1) echo 'active'?>">
                            <a href="#<?php echo $row['slug'] ?>" aria-controls="<?php echo $row['slug'] ?>" role="tab" data-toggle="tab">
                                <i class="flaticon-order"></i>
                                <span><?php echo $row['title'] ?></span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

                <div class="tab-content">
                    <?php
                    $query = 'SELECT * FROM categories';
                    $stmt = $pdo->query($query);
                    $i = 0;
                    while ($row = $stmt->fetch()) {
                        $i++;
                    ?>
                    <div role="tabpanel" class="tab-pane fade in <?php if ($i == 1) echo 'active'?>" id="<?php echo $row['slug'] ?>">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 p-0">
                                <div class="cab-menu-list">
                                    <?php
                                    $query2 = "SELECT * FROM menu WHERE category_id = ".$row['id']." AND display_status='Y'";
                                    $stmt2 = $pdo->query($query2);
                                    while ($menu_item = $stmt2->fetch()) {
                                    ?>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6><?php echo $menu_item['title'] ?></h6>
                                            <p><?php echo $menu_item['description'] ?></p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                                                $<?php echo $menu_item['price'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
    <!-- Cab Menu Section Ends Here -->

    <!-- Cab Footer Starts Here -->
    <?php
    require_once('views/footer.php')
    ?>
    <!-- Cab Footer Ends Here -->

    <!-- Cab Script Files -->
    <script src="assets/js/cab_app.js"></script>
    <script src="assets/js/cab_main.js"></script>
</body>


<!-- Mirrored from codeavour.com/demo/cabaret/menu.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 May 2020 10:04:59 GMT -->
</html>