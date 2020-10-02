<?php
    include 'database/SQLQueries.php';
    if(!isset($_GET['projectId']) || !isset($_GET['projectName'])){
        header ('location: ../');
    }
    else{
        $projectId = $_GET['projectId'];
        $projectname = $_GET['projectName'];
        $result = get_project($projectId);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $result['TITLE']; ?></title>
        <meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="keywords" content=<?php echo $result['KEYWORDS']; ?>>
    	<meta name="Description" content=<?php echo $result['DESCRIPTION']; ?>>

        <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    	<link rel="manifest" href="images/favicon/manifest.json">
    	<meta name="msapplication-TileColor" content="#ffffff">
    	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    	<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="../css/main_project.css" />
	</head>
	<body>

		<!-- Header -->
		<header id="header" class="alt">
			<div class="inner">
				<h1><?php echo $result['TITLE']; ?></h1>
				<p><?php echo $result['SUB_TITLE']; ?></p>
			</div>
		</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
                        <span class="icon <?php echo $result['ICON']; ?> major"></span>
                        <h2>About</h2>
                        <p><?php echo $result['CONTENT']; ?></p>
                        <h3>Developers</h3><p><?php echo $result['DEVELOPERS']; ?></p>
                        <?php if($result['MENTORS'] != null){ ?>
                            <h3>Mentors</h3><p><?php echo $result['MENTORS']; ?></p>
                        <?php } ?>

                        <?php if($result['DEMO_LINK'] != null){ ?>
                            <a href="<?php echo $result['DEMO_LINK']; ?>"><p style="font-size:25px; font-family:Pacifico,cursive;"> Working demo </p></a>
                        <?php } ?>

                        <?php if($result['GITHUB_WEBSITE_LINK'] != null){ ?>
                            <a href="<?php echo $result['GITHUB_WEBSITE_LINK']; ?>"><p style="font-size:25px; font-family:Pacifico,cursive;"> View code on github </p></a>
                        <?php } ?>

                        <?php if($result['GITHUB_ANDROID_LINK'] != null){ ?>
                            <a href="<?php echo $result['GITHUB_ANDROID_LINK']; ?>"><p style="font-size:25px; font-family:Pacifico,cursive;"> View android app code on github </p></a>
                        <?php } ?>

                        <?php if($result['PLAYSTORE_LINK'] != null){ ?>
                            <a href="<?php echo $result['PLAYSTORE_LINK']; ?>"><p style="font-size:25px; font-family:Pacifico,cursive;"> View website code on github </p></a>
                        <?php } ?>
                    </section>

				<!-- Items -->
					<section class="main items">
                        <?php
                            $num = $result['NUM_OF_IMAGES'];
                            $loop = 1;
                            while($num-- > 0){
                                $image_index = 'IMAGE_' . $loop++;
                                $image_name = $result['IMAGE_LOCATION'] . $result[$image_index] . '.png';
                                $class = $projectname . '-item';
                        ?>
                                <article class="item <?php echo $class; ?>">
        							<header class="<?php echo $projectname; ?>">
        								<a href="<?php echo $image_name ?>"><img src="<?php echo $image_name ?>" alt="" /></a>
        								<!-- <h3>Feugiat et faucibus</h3> -->
        							</header>
        						</article>
                        <?php
                            }
                        ?>
					</section>

				<!-- CTA -->
					<section id="cta" class="main special">
						<h2>Technologies Used</h2>
						<p><?php echo $result['TECHNOLOGIES']; ?></p>
						<ul class="actions">
							<li><a href="<?php echo $result['ACTIONS']; ?>" class="button big">View More</a></li>
						</ul>
					</section>

				<!-- Footer -->
					<footer id="footer"><?php echo $result['FOOTER']; ?></footer>

			</div>

		<!-- Scripts -->
			<script src="../js/jquery-project.min.js"></script>
			<script src="../js/skel-project.min.js"></script>
			<script src="../js/util-project.js"></script>
			<script src="../js/main-project.js"></script>

	</body>
</html>
<?php } ?>
