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
$query = 'SELECT * FROM events WHERE id=:id';
$stmt = $pdo->prepare($query);
$stmt->execute(['id' => $_GET['id']]);
$news_item = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>
        <?php
        echo TITLE
        ?>
    </title>
    <!-- Cab CSS Files-->
    <link rel="stylesheet" href="assets/css/cab_app.css" />
    <link rel="stylesheet" href="assets/css/cab_main.css" />
</head>

<body id="bodyTop">

    <!-- Cab Header v2 Starts Here -->
    <?php
    require_once('views/header.php')
    ?>
    <!-- Cab Header v2 Ends Here -->

    <!-- Cab Mini Hero Section Starts Here -->
    <section class="cab-mini-hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(assets/img/inner-bg.jpg) no-repeat bottom; background-size: cover">
        <div class="container">
            <div class="cab-mini-hero-inner">
                <h5>Check our news</h5>
                <h2 class="display-4">Single Event</h2>
            </div>
        </div>
    </section>
    <!-- Cab Mini Hero Section Ends Here -->

    <!-- Cab News & Events v2 Section Starts Here -->
    <section class="cab-blog-posts-section">
        <div class="container">
            <div class="cab-news-events-content">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="cab-single-blog-inner">
                            <div class="cab-single-blog-main-banner">
                                <img src="<?php echo $news_item['image_url'] ?>" alt="Main Post Image">
                            </div>
                            <div class="cab-single-blog-post-details">
                                <div class="post-meta-details">
                                <span class="date">
                                    <i class="flaticon-clock"></i>
                                    <?php
                                    $create_date = strtotime($news_item['open_date']);
                                    echo date('M, d, Y', $create_date)
                                    ?>
                                </span>
                                <span class="author">
                                    <i class="flaticon-user-1"></i>
                                    By: Admin
                                </span>
                                <span class="author">
                                    <i class="ti-location-pin"></i>
                                    <?php
                                    echo $news_item['location']
                                    ?>
                                </span>
                                </div>
                                <div class="post-title">
                                    <h4>
                                        <a href="#">
                                            <?php
                                            echo $news_item['title']
                                            ?>
                                        </a>
                                    </h4>
                                </div>
                                <div class="single-post-description">
                                    <p>
                                        <?php
                                        echo $news_item['description']
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab News & Events v2 Section Ends Here -->

    <!-- Cab Footer Starts Here -->
    <?php
    require_once('views/footer.php')
    ?>
    <!-- Cab Footer Ends Here -->

    <!-- Cab Script Files -->
    <script src="assets/js/cab_app.js"></script>
    <script src="assets/js/cab_main.js"></script>
</body>
</html>