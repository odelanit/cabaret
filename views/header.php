<?php
require('helpers.php');
require_once('config.php');
?>
<header class="cab-header v1">
    <div class="container">
        <nav class="cab-main-navbar">
                <span class="open-side-nav v1 show-on-sm-down">
                    <i class="ti-menu"></i>
                </span>
            <div class="main-menu cab-left-nav-links d-sm-none">
                <ul>
                    <li>
                        <a href="/index.php"
                            <?php
                            if (is_url('/index.php') || is_url('/')) {
                                echo 'class="active"';
                            }
                            ?>
                        >Home.</a>
                    </li>
                    <li>
                        <a href="/about.php"
                            <?php
                            if (is_url('/about.php')) {
                                echo 'class="active"';
                            }
                            ?>
                        >About Us.
                        </a>
                    </li>
                    <li>
                        <a href="/news.php"
                            <?php
                            if (is_url('/news.php')) {
                                echo 'class="active"';
                            }
                            ?>
                        >
                            News.
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cab-centered-logo-box">
                <a href="/">
                    <img src="/assets/img/logo.png" alt="Main Cabaret logo" class="cab-centered-logo">
                    <span class="brand-name">
                        <?php
                        echo TITLE
                        ?>
                    </span>
                </a>
            </div>
            <div class="main-menu cab-right-nav-links d-sm-none">
                <ul>
                    <li>
                        <a href="/events.php"
                            <?php
                            if (is_url('/events.php')) {
                                echo 'class="active"';
                            }
                            ?>
                        >Events.</a>
                    </li>
                    <li>
                        <a href="/menu.php"
                            <?php
                            if (is_url('/menu.php')) {
                                echo 'class="active"';
                            }
                            ?>
                        >Menu.</a>
                    </li>
                    <li>
                        <a href="/contact.php"
                            <?php
                            if (is_url('/contact.php')) {
                                echo 'class="active"';
                            }
                            ?>
                        >
                            Contact Us.
                        </a>
                    </li>
                    <li>
                        <a href="/login.php" style="background: #dd4b39; color: white; border-radius: 5px; text-decoration: none;">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <aside class="cab-sidebar-nav">
            <span class="close-side-nav-btn">
                <i class="ti-close"></i>
            </span>
        <div class="cab-sidebar-inner">
            <ul>
                <li>
                    <a href="/index.php"
                        <?php
                        if (is_url('/index.php') || is_url('/')) {
                            echo 'class="active"';
                        }
                        ?>
                    >Home.</a>
                </li>
                <li>
                    <a href="/about.php"
                        <?php
                        if (is_url('/about.php')) {
                            echo 'class="active"';
                        }
                        ?>
                    >About Us.
                    </a>
                </li>
                <li>
                    <a href="/news.php"
                        <?php
                        if (is_url('/news.php') || is_url('/single-news.php')) {
                            echo 'class="active"';
                        }
                        ?>
                    >
                        News.
                    </a>
                </li>
                <li>
                    <a href="/events.php"
                        <?php
                        if (is_url('/events.php')) {
                            echo 'class="active"';
                        }
                        ?>
                    >Events.</a>
                </li>
                <li>
                    <a href="/menu.php"
                        <?php
                        if (is_url('/menu.php')) {
                            echo 'class="active"';
                        }
                        ?>
                    >Menu.</a>
                </li>
                <li>
                    <a href="/contact.php"
                        <?php
                        if (is_url('/contact.php')) {
                            echo 'class="active"';
                        }
                        ?>
                    >
                        Contact Us.
                    </a>
                </li>
                <li>
                    <a href="/login.php" style="background: #dd4b39; color: white; border-radius: 5px; text-decoration: none;">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</header>