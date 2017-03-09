<?php
    include '../database/SQLQueries.php';
    if(!isset($_GET['blogId'])){
        header ('location: ../');
    }
    else{
        $blogId = $_GET['blogId'];
        $blog = get_blog($blogId);
        $result = mysqli_fetch_assoc($blog);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $result['HOME_CONTENT']; ?>">
        <meta name="author" content="Megha Aggarwal">
        <title><?php echo $result['TITLE']; ?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
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

        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head><!--/head-->

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


        <section id="page-breadcrumb">
            <div class="vertical-center sun">
                <div class="container">
                    <div class="row">
                        <div class="action">
                            <div class="col-sm-12">
                                <h1 class="title"><?php echo $result['TITLE']; ?></h1>
                                <p><?php echo $result['PHRASE']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#page-breadcrumb-->

        <section id="blog-details" class="padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-7">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="single-blog blog-details two-column">
                                    <div class="post-thumb">
                                        <a href="#"><img src="images/<?php echo $result['IMAGE_NAME']; ?>" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="post-content overflow">
                                        <?php echo $result['DATA_CONTENT']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#blog-->


        <div class="col-sm-12 text-center bottom-separator">
            <img src="images/under.png" class="img-responsive inline" alt="">
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
<?php } ?>
