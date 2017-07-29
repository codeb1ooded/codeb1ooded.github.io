<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Megha, Aggarwal, codeb1ooded, developer, portfolio">
	<meta name="Description" content="Portfolio website of Megha Aggarwal, identified as Android  (github handle: codeb1ooded)">

	<title> Megha | codeb1ooded </title>

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

	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<?php
if(isset($_POST['submit'])){
	include 'database/SQLQueries.php';
	insert_message($_POST['name'], $_POST['email'], $_POST['message']);
	echo '<script type="text/javascript"> alert("Your message has been submitted");</script>';
}
?>
<body >
	<!-- start preloader -->
	<div id="loader-wrapper">
		<div class="logo"></div>
		<div id="loader">
		</div>
	</div>
	<!-- end preloader -->

	<!-- Start Header Section -->
	<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="lft_hd">
						<a href="index.html"><img src="images/logo.png" alt="Logo"/></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="rgt_hd">
						<div class="main_menu">
							<nav id="nav_menu">
								<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div id="navbar">
									<ul>
										<li><a class="page-scroll" href="index.html">Home</a></li>
									</li>
									<li><a class="page-scroll" href="#abt_sec">About</a></li>
									<li><a class="page-scroll" href="#project_sec">Projects <i class="fa fa-angle-down"></i></a>
										<ul>
											<li><a class="page-scroll" href="project.php?projectId=11&projectName=shikshakarohan">Shikshak Arohan</a></li>
												<li><a class="page-scroll" href="project.php?projectId=12&projectName=rti">RTI Management System</a></li>
											<li><a class="page-scroll" href="project.php?projectId=13&projectName=movieplate">MoviePlate Android App</a></li>
											<li><a class="page-scroll" href="project.php?projectId=14&projectName=othello">Othello</a></li>
											<li><a class="page-scroll" href="project.php?projectId=15&projectName=eventley">Eventley</a></li>
											<li><a class="page-scroll" href="project.php?projectId=16&projectName=calc">Calculator</a></li>
										</ul>
									</li>
									<li><a class="page-scroll" href="blog/">Blog</a></li>
									<li><a class="page-scroll" href="#tstm_sec">Achievements</a></li>
									<li><a class="page-scroll" href="#tm_sec">Technical Skills</a></li>
									<li><a class="page-scroll" href="#ctn_sec">Contact Me</a></li>
									<li><a class="page-scroll" href="resume_pdf.pdf" download="Megha_Aggarwal">Resume</a></li>

								</ul>
							</div>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header Section -->

<!-- start slider Section -->
<section id="slider_sec">
	<div class="container">
		<div class="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="wrap_caption">
							<div class="caption_carousel">
								<h1>Hey, Glad you are here!! :)</h1>
								<p class="above_caption_carousel"> Keep scrolling to know </p><br>
								<p class="below_caption_carousel"> more about me.... </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrap_caption">
							<div class="caption_carousel">
								<h1>Projects</h1>
								<p class="above_caption_carousel">Shikshak Arohan, RTI Management System</p><br>
								<p class="middle_caption_carousel"> Movieplate Android App, Othello </p><br>
								<p class="below_caption_carousel"> Eventley, Calculator app </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrap_caption">
							<div class="caption_carousel">
								<h1>Achievements</h1>
								<p class="above_caption_carousel">Winner @ Smart India Hackathon </p><br>
								<p class="middle_caption_carousel">Aziz Premji Award, Codediva, Cryptocodz</p><br>
								<p class="below_caption_carousel">Certificate of Special Effort</p>
							</div>
						</div>
					</div>
					<div class="item ">
						<div class="wrap_caption">
							<div class="caption_carousel">
								<h1>Skills</h1>
								<p class="above_caption_carousel"> Android App Development, Git & Github, Algorithm, Databases</p><br>
								<p class="below_caption_carousel">Linux, C/C++, Python, Java, Django, PHP, Xampp</p>
							</div>
						</div>
					</div>
					<div class="item ">
						<div class="wrap_caption">
							<div class="caption_carousel">
								<h1>Education</h1>
								<p class="above_caption_carousel">IGDTUW(B.Tech-CSE), Vivekanand School(12<sup>th</sup>),</p><br>
								<p class="below_caption_carousel"> Nav Jeevan Adarsh Public School (10<sup>th</sup>)</p>
							</div>
						</div>
					</div>
					<div class="item ">
						<div class="wrap_caption">
							<div class="caption_carousel">
								<h1>Positions of Responsibility</h1>
								<p class="above_caption_carousel">Member of EM team in Taarangana, Volunteer in publicity team of Espectro</p><br>
								<p class="below_caption_carousel">Member of EM team of Technoliterati Society, Voluteered in Annual fest of LFT, DWD</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
</section>
<!-- End slider Section -->

<!-- start about Section -->
<section id="abt_sec">
	<div class="container">
		<div class="row" style="text-align:center">
			<img src="images/semicolon.jpeg" alt="Semicolon logo" align="middle">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>ABOUT</h1>
					<h2 onclick="window.open('resume_pdf.pdf')" onmouseover="this.style.color='#3498db';" onmouseout="this.style.color='#606060';">Hi there, I'm Megha Aggarwal<br> a.k.a. <br>codeb1ooded</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="abt">
					<p>I am currently pursuing my Bachelors in Technology in Computer Science from IGDTUW; I love to &lt;code&gt; and see how it can changed the world in a way we can't even think of; Android App Development, Algorithms, and Operating Systems fascinates me;</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About Section -->

<!-- start our teastimonial Section -->
<section id="tstm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="all_tstm">

					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>Winner @ Smart India Hacakathon</h3>
							<p>Lead the team (TechnoTwisters) to the first position of Smart India Hackathon under category of NCPCR organized by Government of India. <br> <a href="http://www.i4c.co.in">View More</a></p>
							<h6>- AICTE, I4C, NCPCR</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>Aziz Premji Award</h3>
							<p>Awarded Aziz Premji Award by Vivekanand School at Fragrance 2013-14 for displaying excellence in the field of IT</p>
							<h6>- Vivekanand School</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3> Hack'It Girls </h3>
							<p> Won 2nd rank in an INTERCOLLEGE open theme hackathon organized by IEEE IGDTUW in association with Crypto Girls, PyLadies Delhi, HackerEarth and Elasticsearch Women India.<br/> "She builds. She makes. She hacks." </p>
							<h6>- IGDTUW</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>CodeDiva</h3>
							<p> Secured second position in a coding competition held by CSI-IGDTUW in association with HackerRank</p>
							<h6>- IGDTUW</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>Cryptocodz</h3>
							<p>Secured first position in Cryptocodz-14 and second position in Cryptocodz-13, held under Annual Cyber Celebration, Technowiz by Vivekanand Schhol</p>
							<h6>- Vivekanand School</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>Bugwars</h3>
							<p> Secured third rank in Bugwars with team, organised by IEEE IGDTUW Student Chapter in collaboration with Techsters </p>
							<h6>- IGDTUW</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>Code n Counter</h3>
							<p> Secured 19th rank with team in Code and Counter organised by Nagarro and Coding Blocks at HackerEarth platform </p>
							<h6>- IGDTUW</h6>
						</div>
					</div>
					<div class="clnt_tstm">
						<div class="sngl_tstm">
							<i class="fa fa-quote-right"></i>
							<h3>Mass Awareness Campaign</h3>
							<p>Certificate of Special Effort and Silver Medal by Care Promise Welfare Society for participating as volunteer in Mass Awareness Campaign against Cancer/ Hepatitis-Bl</p>
							<h6>- Care Promise Welfare Society</h6>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End our teastimonial Section -->

<!-- start Project Section -->
<section id="project_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<div class="title_sec">
					<h1>MY PROJECTS</h1>
					<h2>SOME OF MY PROJECTS WITH SOME IN WORKING PHASE</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a href="">
					<div class="service">
						<i class="fa fa-child"></i>
						<h2>Shikshak Arohan</h2>
						<div class="service_hoverly">
							<i class="fa fa-child"></i>
							<h2>Shikshak Arohan</h2>
							<p>A software which is used to monitor student-teacher ratio and (actual) percentage attendance of teachers in Government schools across India.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a href="https://rti-igdtuw.000webhostapp.com/">
					<div class="service">
						<i class="fa fa-info"></i>
						<h2>RTI Management System</h2>
						<div class="service_hoverly">
							<i class="fa fa-info"></i>
							<h2>RTI Management System </h2>
							<p>Project focuses on automating the RTI system in government institutions. Technologies used: HTML, CSS, Bootstrap, JS, PHP, XAMPP, MySQL Database</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a href="https://github.com/codeb1ooded/movieplate">
					<div class="service">
						<i class="fa fa-file-movie-o"></i>
						<h2>MOVIEPLATE</h2>
						<div class="service_hoverly">
							<i class="fa fa-file-movie-o"></i>
							<h2>MOVIEPLATE</h2>
							<p>Android app to let you browse popular, rated & now playing movies and TV shows. Also manage your watchlist here. This is a proptotype. Technologies used: Java, XML, APIs, Android libraries(Retrofit, GSON, Picasso, etc.), MySQL Database</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a href="https://github.com/codeb1ooded/OSM-EventGrade">
					<div class="service">
						<i class="fa fa-globe"></i>
						<h2>EVENTLEY</h2>
						<div class="service_hoverly">
							<i class="fa fa-globe"></i>
							<h2>EVENTLEY</h2>
							<p>Eventley help users to find popular and relevant(weather on day is fine) events near him on basis of his choice of category by analyzing events based on number of likes, number of comments, number of images, weather at time of event, etc.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a href="https://github.com/codeb1ooded/Othello">
					<div class="service">
						<i class="fa fa-gamepad"></i>
						<h2>OTHELLO</h2>
						<div class="service_hoverly">
							<i class="fa fa-gamepad"></i>
							<h2>OTHELLO</h2>
							<p> Othello is orignially a 1988 video game published by Acclaim Entertainment, made for the Nintendo Entertainment System. This is a board game made on similar concept with help of Java and its libraries with a UI interface.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<a href="https://github.com/codeb1ooded/Calculator">
					<div class="service">
						<i class="fa fa-calculator"></i>
						<h2>CALCULATOR APP</h2>
						<div class="service_hoverly">
							<i class="fa fa-calculator"></i>
							<h2>CALCULATOR APP</h2>
							<p> An android app which not only includes basic mathematics or some scientfic  functions, but also, conversion of number system</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<br><br><br><br><br><br><br>
<!-- End Service Section -->

<!-- start portfolio Section
<section id="protfolio_sec">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
<div class="title_sec">
<h1>Projects Screenshots</h1>
<h2>Some visuals of project</h2>
</div>
</div>
<div class="col-lg-12">
<div class="portfolio-filter text-uppercase text-center">
<ul class="filter">
<li class="active" data-filter="*">All</li>
<li data-filter=".rti-project">RTI Management System</li>
<li data-filter=".movieplate-project">MOVIEPLATE</li>
<li data-filter=".eventley-project">EVENTLEY</li>
<li data-filter=".calculator-project">CALCULATOR APP</li>
<li data-filter=".othello-project">OTHELLO GAME</li>
</ul>
</div>

<div class="all-portfolios">
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio othello-project">
<img class="img-responsive" src="images/project/othello/othello1.png" alt="othello project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio othello-project">
<img class="img-responsive" src="images/project/othello/othello2.png" alt="othello project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio othello-project">
<img class="img-responsive" src="images/project/othello/othello3.png" alt="othello project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio othello-project">
<img class="img-responsive" src="images/project/othello/othello4.png" alt="othello project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc1.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc2.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc3.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc4.png" alt="calculator project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc5.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc6.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc7.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc8.png" alt="calculator project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio calculator-project">
<img class="img-responsive" src="images/project/calc/calc9.png" alt="calculator project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate1.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate2.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate3.png" alt="movieplate project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate4.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate5.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate6.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate7.png" alt="movieplate project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate8.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate9.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate10.png" alt="movieplate project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio movieplate-project">
<img class="img-responsive" src="images/project/movieplate/project_movieplate11.png" alt="movieplate project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley1.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley2.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley3.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley4.png" alt="eventley project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley5.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley6.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley7.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley8.png" alt="eventley project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley9.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley10.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio eventley-project">
<img class="img-responsive" src="images/project/eventley/eventley11.png" alt="eventley project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio rti-project">
<img class="img-responsive" src="images/project/rti/rti1.png" alt="rti project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio rti-project">
<img class="img-responsive" src="images/project/rti/rti2.png" alt="rti project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio rti-project">
<img class="img-responsive" src="images/project/rti/rti3.png" alt="rti project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio rti-project">
<img class="img-responsive" src="images/project/rti/rti4.png" alt="rti project">
</div>
</div>
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio rti-project">
<img class="img-responsive" src="images/project/rti/rti5.png" alt="rti project">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
<div class="single-portfolio rti-project">
<img class="img-responsive" src="images/project/rti/rti6.png" alt="rti project">
</div>
</div>
</div>
</div>

</div>
<div class="post_btn">
<div class="hover_effect_btn" id="hover_effect_btn">
<a href="https://github.com/codeb1ooded" data-hover="view more post"><span>View more on Github</span></a>
</div>
</div>
</div>
</div>
</section>
<!-- End Portfolio Section -->

<h2 id="title-work-experience">Education & Work Experience</h2>
<div id="container-timeline">
	<ul class="timeline">

		<li>
			<div class="timeline-badge">
				<a><i class="fa fa-circle" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4>Android developer at The Testament</h4>
				</div>
				<div class="timeline-body">
					<ul style="padding:0 40px">
						<li>Worked on <a href="https://play.google.com/store/apps/details?id=in.thetestament.market_acquire">Market Acquire</a></li>
						<li>Worked on features including Firebase, Bug fixes, Dynamic Views, etc.</li>
						<li>Market Acquire is a business-specific data management tool developed by The Testament which effortlessly manages the registration data collected on field.</li>
						<li>Major Features of app:<br/>1. Save the forms in the app with a simple click, especially when internet connectivity is not available.<br/>2. Attach photos to the form directly using your phone camera.<br/>3. Upload any number of forms directly to the server in one go.</li>
						<li>Company website: <a href="http://www.thetestament.com"> The Testament </a></li>
					</ul>
				</div>
				<div class="timeline-footer">
					<p class="text-right">JULY 2017</p>
				</div>
			</div>
		</li>

		<li class="timeline-inverted">
			<div class="timeline-badge">
				<a><i class="fa fa-circle invert" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4>Participated in Smart India Hackathon 2017</h4>
				</div>
				<div class="timeline-body">
					<ul style="padding:0 40px">
						<li>Won competition under NCPCR with 1st position.</li>
						<li>Team name mentioned in Winners list on <a href="https://blog.mygov.in/wp-content/uploads/2017/04/Winners-details.pdf">MyGov</a></li>
						<li>Team Leader of team comprised of 6 girls and two mentors. Team Name : TechnoTwisters</li>
						<li>Created a product named <a href="project.php?projectId=11&projectName=shikshakarohan">Shikshak Arohan</a> comprising of both an android app and website.</li>
						<li>Product was focused on monitoring Teacher-Student ratio in govt. schools efficiently and track attendance of teachers.</li>
						<li>Gave idea submission under NCPCR and UGC, was selected for both.</li>
					</ul>
				</div>
				<div class="timeline-footer">
					<p class="text-right">DECEMBER 2016 - APRIL 2017</p>
				</div>
			</div>
		</li>

		<li>
			<div class="timeline-badge">
				<a><i class="fa fa-circle" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4>Android Developer at Creapptic Technologies</h4>
				</div>
				<div class="timeline-body">
					<ul style="padding:0 40px">
						<li>Worked on android apps Trading Adda & Rotary Mysore West</li>
						<li>Trading Adda: <a href="https://play.google.com/store/apps/details?id=trading.adda"> On playstore </a></li>
						<li>Rotary Mysore West: <a href="https://play.google.com/store/apps/details?id=naddy.rotary"> On playstore </a></li>
					</ul>
				</div>
				<div class="timeline-footer">
					<p class="text-right">OCTOBER 2014 - PRESENT</p>
				</div>
			</div>
		</li>

		<li class="timeline-inverted">
			<div class="timeline-badge">
				<a><i class="fa fa-circle invert" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4>B.Tech. Computer Scienece</h4>
				</div>
				<div class="timeline-body">
					<ul style="padding:0 40px">
						<li>From Indira Gandhi Delhi Technical University for Women.</li>
						<li>Aggregate percentage till 6th Semester is 85.77%</li>
						<li>Upgraded from IT to CSE after 1st Year.</li>
						<li>Participated in Online social media training during June-July 2016.</li>
						<li>Took session on git and similar topics.</li>
					</ul>
				</div>
				<div class="timeline-footer">
					<p class="text-right">AUGUST 2014 - MAY 2018 (Expected)</p>
				</div>
			</div>
		</li>

		<li>
			<div class="timeline-badge">
				<a><i class="fa fa-circle" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4>12th from CBSE</h4>
				</div>
				<div class="timeline-body">
					<ul style="padding:0 40px">
						<li>Scored 94.6% in 12th Standard</li>
						<li>Completed from Vivekanad School.</li>
						<li>Subjects: Physics, Chemistry, Maths, Computer Science & English</li>
						<li>Had an academic scholarship of 50% during 12th.</li>
					</ul>
				</div>
				<div class="timeline-footer">
					<p class="text-right">APRIL 2013 - MAY 2014</p>
				</div>
			</div>
		</li>

		<li class="timeline-inverted">
			<div class="timeline-badge">
				<a><i class="fa fa-circle invert" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4>10th from CBSE</h4>
				</div>
				<div class="timeline-body">
					<ul style="padding:0 40px">
						<li>Scored 10/10 CGPA in 10th Standarad</li>
						<li>Completed from Nav Jeevan Adarsh Public School</li>
					</ul>
				</div>
				<div class="timeline-footer">
					<p class="text-right">APRIL 2011 - MAY 2012</p>
				</div>
			</div>
		</li>

		<li class="clearfix no-float"></li>
	</ul>
</div>

<!-- start Skills Section -->
<section id="tm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>TECHNICAL SKILLS</h1>
					<h2>Programming languages, Software packages, Web frameworks, Version Control, etc.</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="all_team">
					<div class="sngl_team">
						<img src="images/android.jpg" alt=""/>
						<h3> Android <span>App Development</span></h3>
						<p>I knows the basic and some advanced concepts of Android app development. Created some apps, MoviePlate being major of them. I also have worked with some libraries and git repos of them in android.</p>
					</div>
					<div class="sngl_team">
						<img src="images/gitngithub.png" alt=""/>
						<h3>Git and Github <span> Version Control </span></h3>
						<p>I have hosted all my projects on github and use it to manage them on regular basis. I know basics of git and github.</p>
					</div>
					<div class="sngl_team">
						<img src="images/algorithm.jpeg" alt=""/>
						<h3> Algorithm <span>   Computational Thinking   </span></h3>
						<p>Perhaps the most important principle for the good algorithm designer is to refuse to be content. OK, Can we do better?</p>
					</div>
					<div class="sngl_team">
						<img src="images/database.png" alt=""/>
						<h3>Databases<span> Data Storage </span></h3>
						<p>Data being the important thing and its manipulation even more important, I have worked with many databases in different technologies </p>
					</div>
					<div class="sngl_team">
						<img src="images/os.jpeg" alt=""/>
						<h3> Linux <span>Operating System</span></h3>
						<p>Shifted to Linux from window not so long ago, I found it best operating system and use it as default. I have worked on many distros of linux like Ubuntu, CentOS, Fedora, Kali Linux, Backtrack, etc.</p>
					</div>
					<div class="sngl_team">
						<img src="images/python.png" alt=""/>
						<h3>Python & Django <span> Framework</span></h3>
						<p>I have created a website using Python and Django. I know their basics.</p>
					</div>
					<div class="sngl_team">
						<img src="images/php.png" alt=""/>
						<h3> PHP and Xampp<span> Backend Dev. </span></h3>
						<p>My one of the best projects is in PHP, i.e., RTI management system. I learned and worked with php during my RTI project only.</p>
					</div>
					<div class="sngl_team">
						<img src="images/java.png" alt=""/>
						<h3> Java <span>   Programming Language  </span></h3>
						<p>My language to code some of the times. I knows the basics of language and some libraries and know how to implement most of the DS in Java.</p>
					</div>
					<div class="sngl_team">
						<img src="images/c++.png" alt=""/>
						<h3>C/C++<span> Programming Language </span></h3>
						<p>C++ was my first language and still the default language to code. I have created a library management system in 12th in C++</p>
					</div>
					<div class="sngl_team">
						<img src="images/hacking.png" alt=""/>
						<h3> Ethical Hacking <!-- <span>Designer</span> --></h3>
						<p>I knows basic of Ethical Hacking and have done 40 day training of Ethical Hacking from I3indya Technologies. I learned many new things during this phase.</p>
					</div>
					<div class="sngl_team">
						<img src="images/front-end.png" alt=""/>
						<h3>HTML, CSS & JS <span> Front end Dev. </span></h3>
						<p>I am a newbie in HTML, CSS and JS. I have learned them from sites like W3Schools, codeacademy, etc. and have used this knowledge in some of my projects also.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End our team Section -->

<!-- start progress bar Section -->
<section id="skill_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>My Skill diagram</h1>
					<h2 style="color:#000000">I am a software developer</h2>
				</div>
			</div>
			<div class="skills progress-bar1">
				<ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
					<li class="progress">
						<div class="progress-bar" data-width="75">
							compile 'android.app:development-v16:21.2.97' 75%
						</div>
					</li>
					<li class="progress">
						<div class="progress-bar" data-width="50">
							#include&lt;C/C++&gt; 50%
						</div>
					</li>
					<li class="progress">
						<div class="progress-bar" data-width="80">
							&lt;HTML/CSS Design&gt; 80%
						</div>
					</li>
					<li class="progress">
						<div class="progress-bar" data-width="70">
							getElementById(Javascript) 70%
						</div>
					</li>
				</ul>
				<ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
					<li class="progress">
						<div class="progress-bar" data-width="65">
							import Java; 65%
						</div>
					</li>
					<li class="progress">
						<div class="progress-bar" data-width="75">
							Git & --Github 75%
						</div>
					</li>
					<li class="progress">
						<div class="progress-bar" data-width="85">
							Data-&gt;Structures-&gt;and-&gt;Algorithms 85%
						</div>
					</li>
					<li class="progress">
						<div class="progress-bar" data-width="70">
							CREATE TABLE "SQL and Databases"; 70%
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End progress bar Section -->

<!-- start contact us Section -->
<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Contact Info</h1>
					<h2>A learner and software developer from Delhi, India</h2>
				</div>
			</div>
			<div class="col-sm-6">
				<div id="cnt_form">
					<h3> I also have some private projects(not on github), if you want to know about them, please write to me.</h3>
					<form id="contact-form" class="contact" name="contact-form" method="post" action="#">
						<div class="form-group">
							<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name*">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email*">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message*"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary" value="Send">Send</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cnt_info">
					<ul>
						<li><a href="http://igdtuw.ac.in/"><i class="fa fa-institution"></i><p>Indira Gandhi Delhi Technical University for Women</p></a></li>
						<li><div id="mail_to_me" onclick='window.open("mailto:meghaaggarwal493@gmail.com");'><i class="fa fa-envelope"></i><p>meghaaggarwal493@gmail.com</p><div></li>
							<li><a href="https://github.com/codeb1ooded"><i class="fa fa-github"></i><p>codeb1ooded</p></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact us  Section -->

	<!-- start footer Section -->
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
							<li><a href="https://twitter.com/Megha__Aggarwal"><i class="fa fa-twitter"></i></a></li>
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

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/showHide.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/main.js"></script>

	<script src="js/showHide.js" type="text/javascript"></script>

	<script type="text/javascript">

	$(document).ready(function(){


		$('.show_hide').showHide({
			speed: 1000,  // speed you want the toggle to happen
			easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
			changeText: 1, // if you dont want the button text to change, set this to 0
			showText: 'View',// the button text to show when a div is closed
			hideText: 'Close' // the button text to show when a div is open

		});


	});

	</script>
	<script>
	jQuery(document).ready(function( $ ) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
	</script>

	<script>

	//Hide Overflow of Body on DOM Ready //
	$(document).ready(function(){
		$("body").css("overflow", "hidden");
	});

	// Show Overflow of Body when Everything has Loaded
	$(window).load(function(){
		$("body").css("overflow", "visible");
		var nice=$('html').niceScroll({
			cursorborder:"5",
			cursorcolor:"#00AFF0",
			cursorwidth:"3px",
			boxzoom:true,
			autohidemode:true
		});

	});
	</script>



</body>
</html>
