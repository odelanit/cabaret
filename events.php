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
if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
} else {
    $page = 1;
}
$stmt = $pdo->query("SELECT COUNT(*) FROM events WHERE display_status='Y'");
$row = $stmt->fetch();
$perPage = 5;
$count = $row['COUNT(*)'];
$lastPage = ceil($count / $perPage);
if ($page < 1) {
    $page = 1;
} elseif ($page > $lastPage) {
    $page = $lastPage;
}
$limit = "LIMIT " . ($page - 1) * $perPage . ", " . $perPage;
$query = "SELECT * FROM events WHERE display_status='Y' ORDER BY open_date DESC " . $limit;
$stmt = $pdo->query($query);

if ($page != $lastPage) {
    $next = $page + 1;
} else {
    $next = $page;
}
$prev = 1;
if ($page != 1) {
    $prev = $page - 1;
}

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
                <h5>Check our events</h5>
                <h2 class="display-4">Events</h2>
            </div>
        </div>
    </section>
    <!-- Cab Mini Hero Section Ends Here -->

    <!-- Cab News & Events v2 Section Starts Here -->
    <section class="cab-news-events-section v2 page">
        <div class="container">
            <div class="cab-news-events-content">
                <div class="row">
                    <?php
                    $i = 0;
                    while ($row = $stmt->fetch()) {
                        $i++;
                        ?>
                        <div class="col-md-4 <?php if ($i == 4) echo 'col-md-offset-2'?>">
                            <div class="cab-news-event-box">
                                <a href="/single-event.php?id=<?php echo $row['id'] ?>">
                                    <div class="news-event-img-box">
                                        <img src="<?php echo $row['image_url'] ?>" alt="News & Event Image">
                                    </div>
                                    <div class="news-event-title-box">
                                        <div class="date">
                                            <?php
                                            $open_date = strtotime($row['open_date']);
                                            ?>
                                            <?php echo date('M, d', $open_date) ?>
                                        </div>
                                        <h6><?php echo $row['title'] ?></h6>
                                        <p class="place">
                                            <?php echo $row['location'] ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="cab-blog-posts-section">
                    <div class="cab-blog-pagination-box" style="text-align: center;">
                        <a href="/events.php?page=<?php echo $prev ?>" class="pag-item prev">
                            <i class="flaticon-back"></i>
                        </a>
                        <a href="/events.php?page=<?php echo $next ?>" class="pag-item next">
                            <i class="flaticon-next"></i>
                        </a>
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