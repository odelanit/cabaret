<?php
require_once('config.php');
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

    <!-- Cab Search Box Starts Here -->
    <div class="cab-search-overlay">
        <div class="cab-search-inner">
            <div class="search-form">
                <span class="close-search-overlay">
                    <i class="ti-close"></i>
                </span>
                <form>
                    <input type="text" placeholder="search here">
                    <button type="submit" class="">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Cab Search Box Ends Here -->

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
                <h2 class="display-4">News</h2>
            </div>
        </div>
    </section>
    <!-- Cab Mini Hero Section Ends Here -->

    <!-- Cab News & Events v2 Section Starts Here -->
    <section class="cab-news-events-section v2 page">
        <div class="container">
            <div class="cab-news-events-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="assets/img/event-1.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <div class="date">
                                        Feb 14
                                    </div>
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="place">
                                        Resturant guah, 09 PM
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="assets/img/event-2.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <div class="date">
                                        Feb 14
                                    </div>
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="place">
                                        Resturant guah, 09 PM
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="assets/img/event-3.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <div class="date">
                                        Feb 14
                                    </div>
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="place">
                                        Resturant guah, 09 PM
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="assets/img/event-4.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <div class="date">
                                        Feb 14
                                    </div>
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="place">
                                        Resturant guah, 09 PM
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="assets/img/event-5.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <div class="date">
                                        Feb 14
                                    </div>
                                    <h6>Restaurant consultants for restaurant marketing, restaurant branding</h6>
                                    <p class="place">
                                        Resturant guah, 09 PM
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="assets/img/event-6.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <div class="date">
                                        Feb 14
                                    </div>
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="place">
                                        Resturant guah, 09 PM
                                    </p>
                                </div>
                            </a>
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