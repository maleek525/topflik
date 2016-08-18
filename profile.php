<?php include("functions/init.php"); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>TopFlik Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="profile_nav.css"/>
	
	    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style_login.css" rel="stylesheet">
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="img/topfliklogo.png"/> <!---url logo-->
	
	
	
<link rel="stylesheet" href="css/bootstrap1.css">
<link rel="stylesheet" href="css/styles1.css">
<script src="js/jquery1.js"></script>
<script src="js/bootstrap1.js"></script>
<script src="js/scripts.js"></script>	
	
	
	
	</head>
	
	
	<div class="nav">
		<div class='logo'></div>
		<ul class="menu">
		<li class="btMenu">
		<a href="javascript:void(0)">MENU</a></li>
		<li class="menuItem"><a href="#"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
		<li class="menuItem"><a href="news.php"><span class="glyphicon glyphicon-list-alt"></span> News</a></li>
		<li class="menuItem"><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
		<li class="menuItem"><a href="#">&#10030; &#10030;  Top Rated Talent  &#10030;&#10030;</a></li>
			
			
			<!-- <li class="menuItem"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li> -->
			
		<li class="menuItem"><?php include 'logout.php'; ?></li>
			
<!--			<span class="glyphicon glyphicon-log-out"></span>-->
			
<!--
		<li class="menuItem"><a href="http://www.scriptcafe.in">Download</a></li>
		<li class="menuItem"><a href="http://www.scriptcafe.in">Documentation</a></li>
-->
		
		</ul>
		</div>
	
	
	
	
	
	
	<body id="top">
		
		

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
<!--
				<section id="banner" data-video="images/banner">
					<div class="inner">
						<header>


					
-->
<!--
		
							<div id="headz">
								
								<div class="sack"><img src="img/save.jpg"/></div>
								<h3 id="over_text">Shelz The Dancer</h3>
		
		
							</div>
-->
							<div id="header_image"> 
								
								<h4 id="over_text">ffff</h4>
								<img src="images/banner.jpg"/>
		
							</div>
					

							<div id="column">
								
								<div id='title-info'>
									<div class="on"><h23>Rank</h23><br><h22>2</h22></br></div>
									<div class="on"><h23>Fans</h23><br><h21>1291</h21></br></div> 
									<div class="on2"><h20>Judge</h20> <div id="circle"></div> </div>

							</div>
										
								

		
							</div>
								
<!--						
						
							<h1>Full Motion</h1>
							<p>A responsive video gallery template with a functional lightbox<br />
							designed by <a href="https://templated.co/">Templated</a> and released under the Creative Commons License.</p>
-->
<!--
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>
-->

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							
			<!-------------------- VIDEO ------------------------>

							<div class="box">
								<h3>Videos</h3>
								
								<a href="https://youtu.be/YMF-NF8z5kY" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								
								
								<div class="inner">
									
									<p> Watch, Rate and leave comments on Shelz The Dancer's Videos</p>
									<a href="https://youtu.be/YMF-NF8z5kY" class="button style2 fit" data-poptrox="youtube,800x400">View all videos</a>
								</div>
							</div>
							
							<!-----ABOUT ----------------------------------------------------------->
							
							<div class="box">
								
								<h3>About</h3>
								<a class="image fit"><img src="images/pic02.jpg" alt="" /> </a>
								
								<div class="inner">
									
<!--									<p>Contact and Information</p>-->
<!--
									<h7>efvefvverv ervfvfvefvefvfv dfvdfvefvefvefv vevfeeefvefvfvf 
									dcdccdc </h7>
-->
									<a class="button fit" data-poptrox="youtube,800x400">Contact and Information</a>
									
<!--									<a href="#" class="button fit" data-poptrox="youtube,800x400">Click for more</a>-->
								</div>
							</div>
				
							
							
							<!-------------------- FANS  ------------------------>

							<div class="box">
								
								<h3>Fans: &nbsp &nbsp 1291</h3>
								<a class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								
								<div class="inner">
									
<!--									<p>View all of your fans</p>-->
									
									
										<a href="fans.php" class="button style2 fit" data-poptrox="youtube,800x400">View all of your fans</a>
									
<!--									<a class="button style3 fit" data-poptrox="youtube,800x400">View all of your fans</a>-->
								</div>
							</div>
							
							
							<!-------------------- FANS OF  ------------------------>

							<div class="box">
								
								<h3>Fans Of: &nbsp &nbsp 209 </h3>
								<a class="image fit"><img src="images/pic04.jpg" alt="" /></a>
								<div class="inner">
									
<!--									<p>View all talents that your fans of</p>-->
									<a href="fansof.php" class="button style2 fit" data-poptrox="youtube,800x400">View all talents that your fans of</a>
								</div>
							</div>
							
							
							<!-------------------- Groups ------------------------>

							<div class="box">
								<h3>Groups</h3>
								
								<a class="image fit"><img src="images/pic05.jpg" alt="" /></a>
								<div class="inner">
									
<!--									<p>Create, View and Join Groups</p>-->
									<a class="button style3 fit" data-poptrox="youtube,800x400">Create, View and Join Groups</a>
								</div>
							</div>
							
							
							<!-------------------- Top Talent  ------------------------>

							<div class="box">
								
								<h3> &#10030; &#10030; Top Talent Chart &#10030; &#10030;</h3>
								<a class="image fit"><img src="images/pic06.jpg" alt="" /></a>
								<div class="inner">
									
<!--									<p>View all the top talent around the globe</p>-->
									<a class="button fit" data-poptrox="youtube,800x400">View all the top talent around the globe</a>
								</div>
							</div>

						</div>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
<!--						<h2>Etiam veroeros lorem</h2>-->
						

<!--
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
-->
						<p class="copyright">&copy;  &nbsp   TopFlik  &nbsp   2016</p>
					</div>
				</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>