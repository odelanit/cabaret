<?php
require_once('config.php');
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

    <!-- Cab Offers Section Starts Here -->
    <section class="cab-offers-section">
        <div class="container">
            <div class="cab-heading-box">
                <div class="cab-small-heading">
                    <h6>Delicious Recipes</h6>
                </div>
                <div class="cab-main-heading">
                    <h1>Our Daily <span class="color-primary">Offers</span></h1>
                </div>
            </div>
            <div class="cab-offers-content-box">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-card xs-pt-0">
                            <div class="cab-card-inner-content">
                                <h6>Main Dishes</h6>
                                <p>
                                    Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to
                                </p>
                                <p class="price-tag">Price: $65</p>
                            </div>
                            <div class="h-sep">

                            </div>
                            <div class="cab-offer-img">
                                <img src="/assets/img/offer-1.png" alt="Cabaret Offer Image">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cab-card popular">
                            <div class="cab-top-img">
                                <img src="/assets/img/logo.png" alt="Popular Image Logo">
                            </div>
                            <div class="cab-card-inner-content">
                                <h6>Beverages</h6>
                                <p>
                                    Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to
                                </p>
                                <p class="price-tag">Price: $65</p>
                            </div>
                            <div class="h-sep">

                            </div>
                            <div class="cab-offer-img">
                                <img src="/assets/img/offer-2.png" alt="Cabaret Offer Image">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                        <div class="cab-card">
                            <div class="cab-card-inner-content">
                                <h6>Desserts</h6>
                                <p>
                                    Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to
                                </p>
                                <p class="price-tag">Price: $65</p>
                            </div>
                            <div class="h-sep">

                            </div>
                            <div class="cab-offer-img">
                                <img src="/assets/img/offer-3.png" alt="Cabaret Offer Image">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab Offers Section Ends Here -->

    <!-- Cab About Us Section Starts Here -->
    <section class="cab-about-section">
        <div class="cab-about-bg-shape">
            <img src="/assets/img/hero-img2.jpg" alt="About Image Bg">
        </div>
        <div class="container">
            <div class="cab-about-section-inner">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="left-side-content">
                            <div class="small-tagline">
                                Welcome to our restaurant
                            </div>
                            <h1>
                                We are modern & classic restaurant in the middle of the city
                            </h1>
                            <p>
                                Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff
                                that covered the whole of her lower arm towards viewer. Gregor then turned to look out the window.
                            </p>
                            <div class="cab-cta-btn-about-box">
                                <a href="#" class="cab-btn cab-btn-primary px-extra-padding">Discover More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-5">
                        <div class="cab-about-image-box">
                            <img src="/assets/img/plate-img.png" alt="Plate Image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Cab About Us Section Ends Here -->

    <!-- Cab Menu Section Starts Here -->
    <section class="cab-menu-section">
        <div class="container">
            <div class="cab-heading-box">
                <div class="cab-small-heading">
                    <h6>Our Menu</h6>
                </div>
                <div class="cab-main-heading">
                    <h1>Explore the menu</h1>
                </div>
            </div>
            <div class="cab-menu-content-box">
                <ul class="nav nav-pills" role="tablist">
                    <li class="active">
                        <a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab">
              Starters
            </a>
                    </li>
                    <li>
                        <a href="#menu2" aria-controls="menu2" role="tab" data-toggle="tab">
              Breakfast
            </a>
                    </li>
                    <li>
                        <a href="#menu3" aria-controls="menu3" role="tab" data-toggle="tab">
              Dinner
            </a>
                    </li>
                    <li>
                        <a href="#menu4" aria-controls="menu4" role="tab" data-toggle="tab">
              Meat
            </a>
                    </li>
                    <li>
                        <a href="#menu5" aria-controls="menu5" role="tab" data-toggle="tab">
              Desserts
            </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="menu1">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        35$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        144$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list list-second">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Kasi fride ullu checken</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        37$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        250$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-menu-btn">
                                <a href="#" class="secondary-link">View All Menu</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="menu2">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        35$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        144$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list list-second">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Kasi fride ullu checken</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        37$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        250$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-menu-btn">
                                <a href="#" class="secondary-link">View All Menu</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="menu3">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        35$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        144$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list list-second">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Kasi fride ullu checken</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        37$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        250$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-menu-btn">
                                <a href="#" class="secondary-link">View All Menu</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="menu4">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        35$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        144$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list list-second">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Kasi fride ullu checken</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        37$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        250$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-menu-btn">
                                <a href="#" class="secondary-link">View All Menu</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="menu5">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        35$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        144$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Shitake Mushroom Maaki <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="cab-menu-list list-second">
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Kasi fride ullu checken</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        37$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        250$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Voctimulok vegitable</h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        45$
                      </span>
                                        </div>
                                    </div>
                                    <div class="cab-menu-item clearfix">
                                        <div class="menu-title">
                                            <h6>Donalt best food envo <span class="tag-new">New</span></h6>
                                            <p>Ruccola, Roasted Garlic Bread Cheese,Peppers</p>
                                        </div>
                                        <div class="menu-price">
                                            <span class="price-tag">
                        17$
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all-menu-btn">
                                <a href="#" class="secondary-link">View All Menu</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cab-menu-section-bottom text-center">
                    <img src="/assets/img/menu-show-img.png" alt="Cab Menu Image">
                </div>

            </div>
        </div>
    </section>
    <!-- Cab Menu Section Ends Here -->

    <!-- Cab News & Events Section Starts Here -->
    <section class="cab-news-events-section v1">
        <div class="container">
            <div class="cab-heading-box">
                <div class="cab-small-heading">
                    <h6>Stay Updated</h6>
                </div>
                <div class="cab-main-heading">
                    <h1>Latest News & Events</h1>
                </div>
            </div>
            <div class="cab-news-events-content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="/assets/img/event-1.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="date">
                                        <i class="flaticon-calendar"></i> Feb 14 2020
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="/assets/img/event-2.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <h6>Restaurant consultants for restaurant marketing, restaurant branding</h6>
                                    <p class="date">
                                        <i class="flaticon-calendar"></i> Feb 14 2020
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="cab-news-event-box">
                            <a href="#">
                                <div class="news-event-img-box">
                                    <img src="/assets/img/event-3.jpg" alt="News & Event Image">
                                </div>
                                <div class="news-event-title-box">
                                    <h6>Food & Beverage Magazine has remained the leading resource</h6>
                                    <p class="date">
                                        <i class="flaticon-calendar"></i> Feb 14 2020
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab News & Events Section Ends Here -->

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