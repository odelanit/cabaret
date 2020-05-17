<?php
require('config.php');
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
    <?php require_once('views/header.php');
    ?>

    <!-- Cab Mini Hero Section Starts Here -->
    <section class="cab-mini-hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(assets/img/inner-bg.jpg) no-repeat bottom; background-size: cover">
        <div class="container">
            <div class="cab-mini-hero-inner">
                <h5>Our Story</h5>
                <h2 class="display-4">About Us</h2>
            </div>
        </div>
    </section>
    <!-- Cab Mini Hero Section Ends Here -->

    <!-- Cab About Brief Section Starts Here -->
    <section class="cab-about-brief-section">
        <div class="container">
            <div class="cab-about-brief-section-inner">
                <div class="cab-heading-box v2">
                    <div class="cab-small-heading">
                        <h6>Welcome to our restaurant</h6>
                    </div>
                    <div class="cab-main-heading">
                        <h1>We are modern & classic restaurant in the middle of the city</h1>
                    </div>
                </div>
                <div class="cab-about-brief-content">
                    <div class="brief-description">
                        <p>
                            Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff
                            that covered the whole of her lower arm towards viewer. Gregor then turned to look out the window.
                        </p>
                    </div>
                    <div class="about-brief-img-gallery">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="about-brief-img-box">
                                    <img src="assets/img/showcase-1.jpg" alt="About Us">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="about-brief-img-box">
                                    <img src="assets/img/hero-v4-bg.jpg" alt="About Us">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="about-brief-img-box">
                                    <img src="assets/img/showcase-4.jpg" alt="About Us">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab About Brief Section Ends Here -->

    <!-- Cab CTA v3 Section Starts Here -->
    <section class="cab-cta-section v3" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(assets/img/about-v3.jpg) no-repeat center fixed; background-size: cover;">
        <div class="container">
            <div class="cab-cta-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="cab-cta-content-inner">
                            <h1>Learn What Our Waiter, Mootu Smith, Loves On The Menu
                            </h1>
                            <h6>Take a couple minutes and ask them a few questions</h6>
                            <a href="reservation.html" class="cab-btn cab-btn-primary px-extra-padding">Book a table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab CTA v3 Section Ends Here -->

    <!-- Cab About History Section Starts Here -->
    <section class="cab-about-history-section">
        <div class="container">
            <div class="cab-about-history-inner">
                <div class="cab-heading-box v3">
                    <div class="cab-main-heading img-alt">
                        <img src="assets/img/heading-vector.png" alt="">
                        <h1>The history of us</h1>
                    </div>
                </div>
                <div class="cab-about-history-timeline d-flex">
                    <div class="cab-about-timeline-box">
                        <div class="timeline-title">
                            <span class="year">2011</span>
                            <span class="title">Started The restaurant</span>
                        </div>
                        <div class="timeline-line">
                            
                        </div>
                        <div class="timeline-description">
                            <div class="inner">
                                Fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arme againg durig the havy muli
                            </div>
                        </div>
                    </div>
                    <div class="cab-about-timeline-box">
                        <div class="timeline-title">
                            <span class="year">2013</span>
                            <span class="title">Reached a milestone</span>
                        </div>
                        <div class="timeline-line"></div>
                        <div class="timeline-description">
                            <div class="inner">
                                Fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arme againg durig the havy muli
                            </div>
                        </div>
                    </div>
                    <div class="cab-about-timeline-box">
                        <div class="timeline-title">
                            <span class="year">2015</span>
                            <span class="title">Win a Big Award</span>
                        </div>
                        <div class="timeline-line"></div>
                        <div class="timeline-description">
                            <div class="inner">
                                Fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arme againg durig the havy muli
                            </div>
                        </div>
                    </div>
                    <div class="cab-about-timeline-box">
                        <div class="timeline-title">
                            <span class="year">2017</span>
                            <span class="title">Add Foreign Office</span>
                        </div>
                        <div class="timeline-line"></div>
                        <div class="timeline-description">
                            <div class="inner">
                                Fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arme againg durig the havy muli
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab About History Section Ends Here -->

    <!-- Cab Testimonials Section Starts Here -->
    <section class="cab-testimonials-section v1" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(assets/img/testimonials-bg1.jpg) no-repeat center fixed; background-size: cover">
        <div class="container">
            <div class="cab-heading-box">
                <div class="cab-small-heading">
                    <h6>Testimonials</h6>
                </div>
                <div class="cab-main-heading light">
                    <h1>Happy customers</h1>
                </div>
            </div>
            <div class="cab-testimonials-slider-box v1">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-words">
                                <p>
                                    “Domed and divided by arches into stiff sections. The bedding was able cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <h6 class="color-primary">
                                    Michel Jhone
                                </h6>
                                <small>Happy client</small>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-words">
                                <p>
                                    “Domed and divided by arches into stiff sections. The bedding was able cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved helplessly as doslig never gose on to ave not fundy
                                    ever”
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <h6 class="color-primary">
                                    Michel Jhone
                                </h6>
                                <small>Happy client</small>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-words">
                                <p>
                                    “Domed and divided by arches into stiff sections. The bedding was able cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved helplessly as doslig never gose on to ave not fundy
                                    ever waved helplessly as doslig never gose on to ave not fundy ever”
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <h6 class="color-primary">
                                    Michel Jhone
                                </h6>
                                <small>Happy client</small>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab Testimonials Section Ends Here -->

    <!-- Cab Master Chef Section Starts Here  -->
    <section class="cab-master-chef-section">
        <div class="container">
            <div class="cab-master-chef-inner">
                <div class="cab-heading-box v3">
                    <div class="cab-main-heading">
                        <img src="assets/img/heading-vector.png" alt="">
                        <h1>Meet the master chef</h1>
                    </div>
                </div>
                <div class="cab-master-chef-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cab-chef-card">
                                    <div class="chef-img-box">
                                        <img src="assets/img/chef-1.jpg" alt="Chef">
                                        <div class="chef-social-box">
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="chef-details">
                                        <h5>Jonathon Trote</h5>
                                        <small>Master Shape</small>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cab-chef-card">
                                    <div class="chef-img-box">
                                        <img src="assets/img/chef-2.jpg" alt="Chef">
                                        <div class="chef-social-box">
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="chef-details">
                                        <h5>Jonathon Trote</h5>
                                        <small>Master Shape</small>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cab-chef-card">
                                    <div class="chef-img-box">
                                        <img src="assets/img/chef-3.jpg" alt="Chef">
                                        <div class="chef-social-box">
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="chef-details">
                                        <h5>Jonathon Trote</h5>
                                        <small>Master Shape</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab Meet Chef Section Ends Here  -->

    <!-- Cab Footer Starts Here -->
    <?php
    require_once('views/footer.php')
    ?>
    <!-- Cab Footer Ends Here -->

    <!-- Cab Script Files -->
    <script src="assets/js/cab_app.js"></script>
    <script src="assets/js/cab_main.js"></script>
</body>


<!-- Mirrored from codeavour.com/demo/cabaret/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 May 2020 10:04:44 GMT -->
</html>