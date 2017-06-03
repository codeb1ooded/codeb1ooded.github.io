<?php
    include 'database/SQLQueries.php';
    if(!isset($_GET['projectId']) || !isset($_GET['projectName'])){
        header ('location: ../');
    }
    else{
        $projectId = $_GET['projectId'];
        $projectname = $_GET['projectName'];
        $project = get_project($projectId);
        $result = mysqli_fetch_assoc($project);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $result['TITLE']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
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
					<section id="intro" class="main"><?php echo $result['CONTENT']; ?></section>

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
							<li><a href="https://github.com/codeb1ooded/BMSU" class="button big">View More</a></li>
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
