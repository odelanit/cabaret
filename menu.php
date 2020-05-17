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
                    <li class="active">
                        <a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab">
                            <i class="flaticon-cocktail-1"></i>
                            <span>Starters</span>
                        </a>
                    </li>
                    <li>
                        <a href="#menu2" aria-controls="menu2" role="tab" data-toggle="tab">
                            <i class="flaticon-restaurant"></i>
                            <span>Breakfast</span>
                        </a>
                    </li>
                    <li>
                        <a href="#menu3" aria-controls="menu3" role="tab" data-toggle="tab">
                            <i class="flaticon-order"></i>
                            <span>Dinner</span>
                        </a>
                    </li>
                    <li>
                        <a href="#menu4" aria-controls="menu4" role="tab" data-toggle="tab">
                            <i class="flaticon-jamaican-jerk-chicken"></i>
                            <span>Meat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#menu5" aria-controls="menu5" role="tab" data-toggle="tab">
                            <i class="flaticon-cup-cake"></i>
                            <span>Desserts</span>
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
                        </div>
                    </div>
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