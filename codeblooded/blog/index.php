<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog</title>
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">



        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/style.css">
    </head><!--/head-->
    <?php include '../database/SQLQueries.php'; ?>
    <body>
        <header id="header">
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="index.html">
                            <h1><img src="../images/logo.png" alt="logo" height='100px'></h1>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->

        <section id="home-slider">
            <div class="container">
                <div class="row">
                    <div class="main-slider">
                        <div class="slide-text">
                            <h1>Codeb1ooded</h1>
                            <p>I am currently pursuing my Bachelors in Technology in Computer Science from IGDTUW; I love to &lt;code&gt; and see how it can changed the world in a way we can't even think of; Android App Development, Algorithms, and Operating Systems fascinates me;</p>
                        </div>
                        <img src="images/slider/hill.png" class="slider-hill" alt="slider image">
                        <img src="images/slider/house.png" class="slider-house" alt="slider image">
                        <img src="images/slider/sun.png" class="slider-sun" alt="slider image">
                        <img src="images/slider/birds1.png" class="slider-birds1" alt="slider image">
                        <img src="images/slider/birds2.png" class="slider-birds2" alt="slider image">
                    </div>
                </div>
            </div>
            <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
        </section>
        <!--/#home-slider-->

        <section id="services">
            <div class="container">
                <?php
                    $numBlogs = get_blog_count();
                    $showedLeft = $numBlogs;
                    while($showedLeft > 0){
                ?>
                <div class="row">
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                <img src="images/<?php echo get_blog_image_name($showedLeft); ?>" alt="">
                            </div>
                            <h2><a href="blog_detail.php?blogId=<?php echo $showedLeft; ?>"><?php echo get_blog_title($showedLeft); ?></a></h2>
                            <p><?php echo get_blog_home_content($showedLeft); ?></p>
                        </div>
                    </div>
                    <?php
                        $showedLeft--;
                        if($showedLeft > 0){
                    ?>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="images/<?php echo get_blog_image_name($showedLeft); ?>" alt="">
                            </div>
                            <h2><a href="blog_detail.php?blogId=<?php echo $showedLeft; ?>"><?php echo get_blog_title($showedLeft); ?></a></h2>
                            <p><?php echo get_blog_home_content($showedLeft); ?></p>
                        </div>
                    </div>
                    <?php
                        $showedLeft--;
                        }
                        if($showedLeft > 0){
                    ?>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                                <img src="images/<?php echo get_blog_image_name($showedLeft); ?>" alt="">
                            </div>
                            <h2><a href="blog_detail.php?blogId=<?php echo $showedLeft; ?>"><?php echo get_blog_title($showedLeft); ?></a></h2>
                            <p><?php echo get_blog_home_content($showedLeft); ?></p>
                        </div>
                    </div>
                </div>
                    <?php
                        $showedLeft--;
                    }   }
                    ?>
            </div>
        </section>
        <!--/#services-->

        <!--/#footer--><!-- start footer Section -->
        <footer id="ft_sec" style="background-color:#D1DBDD">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ft">
                            <ul>
                                <li><a href="https://github.com/codeb1ooded"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/megha-aggarwal-772440104"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.facebook.com/meghaaggarwal.yv"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/+MeghaAggarwalMe"><i class="fa fa-google"></i></a></li>
                                <li><a href="https://twitter.com/codeb1ooded"><i class="fa fa-twitter"></i></a></li>
                                <!-- <li><a href=""><i class="fa fa-wordpress"></i></a></li> -->
                            </ul>
                        </div>
                        <ul class="copy_right">
                            <li>&copy;Megha Aggarwal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Section -->


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
