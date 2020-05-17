<?php
require_once('config.php');

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
$query = "SELECT * FROM news WHERE is_home=1 ORDER BY created_at DESC LIMIT 3";
$stmt = $pdo->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <title><?php echo TITLE ?></title>
    <!-- Cab CSS Files-->
    <link rel="stylesheet" href="/assets/css/cab_app.css" />
    <link rel="stylesheet" href="/assets/css/cab_main.css" />
</head>

<body class="cab-homepage-v1" id="bodyTop">
    <?php require_once('views/header.php');
    ?>

    <!-- Cab Hero Section v1 Starts Here -->
    <section class="cab-hero-section v1 p-0">
        <div class="cab-hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cab-hero-slide-inner">
                        <img src="/assets/img/hero-img.jpg" alt="Hero Slide Image">
                        <div class="cab-hero-slide-caption">
                            <div class="cab-sub-heading-box">
                                <h6>Fresh</h6>
                                <span class="sep"></span>
                                <h6>Delicious</h6>
                                <span class="sep"></span>
                                <h6>Super</h6>
                            </div>
                            <div class="cab-big-heading">
                                <h1 class="display-1">
                                    Delicious Food
                                </h1>
                            </div>
                            <div class="cab-hero-cta-btn-box text-center">
                                <a href="#" class="cab-btn cab-btn-primary">Make a Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cab-hero-slide-inner">
                        <img src="/assets/img/hero-img2.jpg" alt="Hero Slide Image">
                        <div class="cab-hero-slide-caption">
                            <div class="cab-sub-heading-box">
                                <h6>Fresh</h6>
                                <span class="sep"></span>
                                <h6>Delicious</h6>
                                <span class="sep"></span>
                                <h6>Super</h6>
                            </div>
                            <div class="cab-big-heading">
                                <h1 class="display-1">
                                    Love Pizza!
                                </h1>
                            </div>
                            <div class="cab-hero-cta-btn-box text-center">
                                <a href="#" class="cab-btn cab-btn-primary">Make a Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cab-hero-slide-inner">
                        <img src="/assets/img/hero-img.jpg" alt="Hero Slide Image">
                        <div class="cab-hero-slide-caption">
                            <div class="cab-sub-heading-box">
                                <h6>Fresh</h6>
                                <span class="sep"></span>
                                <h6>Delicious</h6>
                                <span class="sep"></span>
                                <h6>Super</h6>
                            </div>
                            <div class="cab-big-heading">
                                <h1 class="display-1">
                                    Delicious Food
                                </h1>
                            </div>
                            <div class="cab-hero-cta-btn-box text-center">
                                <a href="#" class="cab-btn cab-btn-primary">Make a Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cab-hero-slide-inner">
                        <img src="/assets/img/hero-img2.jpg" alt="Hero Slide Image">
                        <div class="cab-hero-slide-caption">
                            <div class="cab-sub-heading-box">
                                <h6>Fresh</h6>
                                <span class="sep"></span>
                                <h6>Delicious</h6>
                                <span class="sep"></span>
                                <h6>Super</h6>
                            </div>
                            <div class="cab-big-heading">
                                <h1 class="display-1">
                                    Delicious Food
                                </h1>
                            </div>
                            <div class="cab-hero-cta-btn-box text-center">
                                <a href="#" class="cab-btn cab-btn-primary">Make a Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next">
                <span>N</span>
                <span>E</span>
                <span>X</span>
                <span>T</span>
            </div>
            <div class="swiper-button-prev">
                <span>P</span>
                <span>R</span>
                <span>E</span>
                <span>V</span>
            </div>
        </div>
    </section>
    <!-- Cab Hero Section v1 Ends Here -->

    <!-- Cab News & Events Section Starts Here -->
    <section class="cab-news-events-section v1">
        <div class="container">
            <div class="cab-heading-box">
                <div class="cab-small-heading">
                    <h6>Stay Updated</h6>
                </div>
                <div class="cab-main-heading">
                    <h1>Latest News</h1>
                </div>
            </div>
            <div class="cab-news-events-content">
                <div class="row">
                    <?php
                    while ($row = $stmt->fetch()) {
                    ?>
                        <div class="col-sm-4">
                            <div class="cab-news-event-box">
                                <a href="/single-news.php?id=<?php echo $row['id'] ?>">
                                    <div class="news-event-img-box">
                                        <img src="<?php echo $row['image_url'] ?>" alt="News & Event Image">
                                    </div>
                                    <div class="news-event-title-box">
                                        <h6><?php echo $row['title'] ?></h6>
                                        <p class="date">
                                            <?php
                                            $create_date = strtotime($row['created_at']);
                                            ?>
                                            <i class="flaticon-calendar"></i> <?php echo date('M, d, Y', $create_date) ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab News & Events Section Ends Here -->

    <!-- Cab About Us Section Starts Here -->

    <!-- Cab About Us Section Ends Here -->

    <!-- Cab Footer Starts Here -->
    <?php
    require_once('views/footer.php')
    ?>
    <!-- Cab Footer Ends Here -->

    <!-- Cab Script Files -->
    <script src="/assets/js/cab_app.js"></script>
    <script src="/assets/js/cab_main.js"></script>
</body>


<!-- Mirrored from codeavour.com/demo/cabaret/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 May 2020 10:02:40 GMT -->
</html>