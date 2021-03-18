<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Accounting</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel2.css" />
			<link rel="stylesheet" href="css/style2.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
				<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.php">accounting</a></h1>
							<span class="tag">index</span>
		
						</div>
						<nav id="nav">
							<ul>
							<li class="active"><form action="search.php" target="One" method="post" enctype="multipart/form-data" >
    							<input type="text" id ='search' name="search" size="70" >
    							<button text="submit" id='search_btn' >搜尋</button>
    							</form></li>
								<li><a href="index.php">主頁</a></li>
									
									<?php session_start(); 
									if( isset($_SESSION['name']) ) {
										?><li><a href="login.php"><?php echo  $_SESSION['name']; ?></a></li>
										<li><a href="test_p.php">我要發文</a></li>
										<?php
									}else{?>
											<li><a href="login_s.php"><?php echo  "登入"; ?></a></li>
									<?php
									}
									?>
									
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Banner -->
					<div id="banner" class="container">
						<section>
							<h1 style="font-size: 50px">Connect With Everyone</h1>
							<br>
							<br>
							<br>
							<br>
							<a href="sort-home.php" class="button medium">Let's Start!</a>
						</section>
					</div>

				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
									<div class="box">
										<h1 style="font-size:40px;" >閒話家常</h1>
										<br>
										<?php echo '<input type="button" name="id" class="button" value="Read More" onclick=location.href="showbb.php?id=閒話家常">';?>
								</section>
								<section class="4u"> 
									<div class="box" style="visibility:hidden">
										</div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
									<div class="box">
										<h1 style="font-size:40px;">省錢小絕招</h1>
										<br>
										<?php echo '<input type="button" name="id" class="button" value="Read More" onclick=location.href="showbb.php?id=省錢小絕招">';?>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
									<div class="box">
										<h1 style="font-size:40px;">動物農場</h1>
										<br>
										<?php echo '<input type="button" name="id" class="button" value="Read More" onclick=location.href="showbb.php?id=動物農場">';?>
								</section>
								<section class="4u"> <a href="#" class="image featured"></a>
									<div class="box" style="visibility:hidden">
										 </div>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/pic04.jpg" alt=""></a>
									<div class="box">
										<h1 style="font-size:40px;">好康道相報</h1>
										<br>
										<?php echo '<input type="button" name="id" class="button" value="Read More" onclick=location.href="showbb.php?id=好康道相報">';?>
								</section>
							</div>
						</div>
					</div>

				
	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>