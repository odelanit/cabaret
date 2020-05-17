<?php
require_once('config.php')
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
                <h5>Contact Info</h5>
                <h2 class="display-4">Contact Us</h2>
            </div>
        </div>
    </section>
    <!-- Cab Mini Hero Section Ends Here -->

    <!-- Cab Contcat Details Section Starts Here -->
    <section class="cab-contact-details-section">
        <div class="container">
            <div class="cab-contact-details-section-inner">
                <div class="cab-heading-box v2">
                    <div class="cab-small-heading">
                        <h6>Let's get in touch</h6>
                    </div>
                    <div class="cab-main-heading size-sm">
                        <h1>Get in touch! try our food.</h1>
                    </div>
                </div>
                <div class="cab-contact-details-content">
                    <div class="brief-description">
                        <p>
                            Raising a heavy maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nuncIt showed a lady fitted out with a fur hat and fur boa who sat upright, 
                        </p>
                    </div>
                    <div class="contact-details-options">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="contact-option-box">
                                    <div class="icon">
                                        <i class="ti-home"></i>
                                    </div>
                                    <div class="title">
                                        Head Office
                                    </div>
                                    <div class="detail">
                                        45 soroni road  nasir uddin road
                                        Melborn Austria
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="contact-option-box">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="title">
                                        Email Address
                                    </div>
                                    <div class="detail">
                                        <span><a href="mailto:demo@example.com">demo@example.com</a></span>
                                        <span><a href="mailto:example@g.com">example@g.com</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="contact-option-box">
                                    <div class="icon">
                                        <img src="assets/img/icons/phone.png" alt="icon" class="icon-img">
                                    </div>
                                    <div class="title">
                                        Phone Number
                                    </div>
                                    <div class="detail">
                                        <span><a href="tel:++579817561741">++579817561741</a></span>
                                       <span><a href="tel:++8752(025)045747">++8752(025)045747</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="contact-option-box">
                                    <div class="icon">
                                        <i class="ti-alarm-clock"></i>
                                    </div>
                                    <div class="title">
                                        Opening Hours
                                    </div>
                                    <div class="detail">
                                        <span>Mon day - Sun day</span>
                                        <span>Mon day close</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cab-contact-form-box">
                <div class="cab-heading-box v2">
                    <div class="cab-main-heading size-sm">
                        <h3>Still have query, then fill out the form!</h3>
                    </div>
                </div>
                <div class="cab-contact-form">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control basic" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="email" class="form-control basic" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="number" class="form-control basic" placeholder="Your Phone" onkeydown="return event.keyCode !== 69">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control basic" placeholder="Contact Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control basic" rows="6" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="cab-btn cab-btn-primary-filled">Send the Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cab Contact Details Section Ends Here -->

    <!-- Cab Footer Starts Here -->
    <?php
    require_once('views/footer.php')
    ?>
    <!-- Cab Footer Ends Here -->

    <!-- Cab Script Files -->
    <script src="assets/js/cab_app.js"></script>
    <script src="assets/js/cab_main.js"></script>
</body>


<!-- Mirrored from codeavour.com/demo/cabaret/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 May 2020 10:05:42 GMT -->
</html>