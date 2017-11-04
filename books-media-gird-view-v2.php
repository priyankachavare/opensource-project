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
                                        <a href="signin.php"><i class="fa fa-lock"></i>Login / Register</a>
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
                    <h2>Books & Media Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Books & Media</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-full-width">
                        <div class="container">
                            <br><br><br>
                            <div class="booksmedia-fullwidth">
                                <ul>
                                <?php
                                require "db.php";

                                $num_rec_per_page=9;
                                $sql = "SELECT * FROM ieee"; 
                                $result = $conn->query($sql);
                                
                                $results=$result->num_rows;
                                $total_records = $results;
                                
                                $total_pages = ceil($total_records / $num_rec_per_page); 
                                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                                
                                $start_from = ($page-1) * $num_rec_per_page; 
                                $sql1="SELECT * from ieee LIMIT $start_from, $num_rec_per_page";
                                $result = $conn->query($sql1);

                                if ($result->num_rows > 0)
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                    echo "<li>
                                        <div class=\"book-list-icon blue-icon\"></div>
                                        <figure>
                                            <a href=\"http://docs.google.com/gview?url=http://localhost.com/code/public_html/data/". $row['link'] . "&embedded=true\" target=\"_blank\" style=\"width:100%; height:700px;\" frameborder=\"0\"><img src=\"images/books-media/layout-3/books-media-layout3-01.jpg\" alt=\"Book\"></a>
                                            <figcaption>
                                                <header>
                                                    <h4><a href=\"http://docs.google.com/gview?url=http://localhost.com/code/public_html/data/". $row['link'] . "&embedded=true\" target=\"_blank\" style=\"width:100%; height:700px;\" frameborder=\"0\">". $row['name'] . "</a></h4>
                                                    <p><strong>Author:</strong> ". $row['author'] . "</p>
                                                    <p><strong>Category:</strong>  ". $row['category'] . "</p>
                                                </header>
                                            </figcaption>
                                        </figure>                                                
                                    </li>";
                                    }
                                    ?>
                                    </ul>
                            </div>

                            <nav class="navigation pagination text-center">
                                <h2 class="screen-reader-text">Posts navigation</h2>
                                <div class="nav-links">
                                <?php
                                echo '<a class="prev page-numbers" href="books-media-gird-view-v2.php?page=1"> First</a>'; 
                                    for ($i=1; $i<=$total_pages; $i++) 
                                    { 
                                        echo "<a class=\"page-numbers\" href='menu.php?page=".$i."'>".$i."</a> ";
                                    }
                                echo "<a class=\"next page-numbers\"  href='books-media-gird-view-v2.php.php?page=".$total_pages."'>Last </a>";}?>
                            
                                </div>
                            </nav>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
<br><br>
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

<!-- Mirrored from demo.presstigers.com/libraria/public_html/books-media-gird-view-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2017 14:42:42 GMT -->
</html>