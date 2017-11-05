<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="layout-v3">
        
        <!-- Start: Header Section -->
        <header id="header" class="navbar-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="menu-wrap">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index.php">
                                            <img src="images/libraria-logo-v3.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <!-- Navigation -->
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-gird-view-v2.php">Books &amp; Media</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-md">
                                    <div class="topbar-links">
                                    <?php 
                                    if(!isset($_SESSION['email'])){
                                        header("Location: signin.php");
                                    }
                                    else{
                                        echo '<a href="#"><i class="fa fa-user"></i> '.$_SESSION['name'].'</a>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <!-- Header Topbar -->
                            </div>
                        </div>
                        <div class="mobile-menu hidden-md hidden-lg">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="books-media-gird-view-v2.php">Books &amp; Media</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Upload</h2>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Upload</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Checkout Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="checkout-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <article class="page type-page status-publish hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce">
                                                <form action="upload.php" enctype="multipart/form-data" method="POST">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <h2>Contact Information</h2>
                                                            <span class="underline left"></span>
                                                            <div class="woocommerce-info">
                                                                <div class="col-sm-7">
                                                                    <p class="input-required">
                                                                        <input type="text" required placeholder="Title *" name="title" class="input-text">
                                                                    </p>
                                                                    <p class="input-required">
                                                                        <input type="text" required placeholder="Author *" value="" name="author" class="input-text">
                                                                    </p>
                                                                    <p class="input-required">
                                                                        <input type="text" required placeholder="Category *" name="category" class="input-text">
                                                                    </p>
                                                                        <input type="file" name="filep" size=45>
                                                                        <br>
                                                                    <input type="submit" class="btn btn-default" name="action" value="Upload">
                                                                </div>
                                                            </form>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <br><br>
                                                            <span class="underline left"></span>
                                                            <div style="margin-left:50%">
                                                                            <img src="https://www.w3schools.com/howto/img_avatar.png" style="height: 150px;width:150px;border-radius: 50%;">
                                                                           <?php
                                                                            echo "<center><br><label><h3>".$_SESSION['name']."</h3></label><br>
                                                                            <br><label>".$_SESSION['email']."</label><br>
                                                                            <form action=\"logout.php\" method=\"post\">
                                                                            <br><input type=\"submit\" value=\"LogOut\" class=\"btn btn-default\"></input></center></form>";
                                                                            ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div><!-- .entry-content -->
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Checkout Section -->

        <!-- Start: Footer -->
        <footer class="site-footer">
                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-text col-md-3">
                                <p>&copy; 2017 LIBRARIA. All rights reserved.</p>
                            </div>
                            <div class="col-md-9 pull-right">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="books-media-gird-view-v2.php">Books &amp; Media</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End: Footer -->
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>
        
    </body>

<!-- Mirrored from demo.presstigers.com/libraria/public_html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2017 14:38:54 GMT -->
</html>
