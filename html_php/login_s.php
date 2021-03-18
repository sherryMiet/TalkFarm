<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>sort-home</title>
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
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
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
							
						</div>
						<nav id="nav">
							<ul>
								   
									<li class="active"><a href="index.php">主頁</a></li>
									
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
                <!-- Page -->
                <div id="page" class="container">
						<div class="row">
						
							<!-- Content -->
							<div id="content" class="8u skel-cell-important">
								<section>
									<header class="major">
                                    <center><img src="profit.png" style="width: 280px; height:250px;">
									<h2>save money save life</h2></center>
								</section>
							</div>
		
							<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header class="major">
                                        <form action="loginok.php" method="post" enctype="multipart/form-data">
                                        帳號:<input type="email" id="login"  placeholder="Email address" name="m_email"><br>
                                        密碼:<input type="password" id="login" placeholder="Password" name="m_pwd"><br>
                                        <button text="submit" id="login_btn" style="float:center">登入</button>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        &nbsp&nbsp&nbsp&nbsp
										<input type="button"  value="註冊" id="login_btn"  onclick="location.href='registered.html'">
                                        <br>
										<br><br><br>
									
                                         <center><a href="plogin2.html" style="font-size:25px;">Admin Login</a></center>
                                        </form>
                                       
                                        </header>
                                       
                                        
                                    </section>
									</div>
								</section>
                              
						</div>
					</div>
                
                <br>
               
    </form>
</div>
<!-- /Main --> 

</div>

<!-- Footer -->

<!-- /Footer -->

<!-- Copyright -->
<div id="copyright">
<div class="container"> <span class="copyright">Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</span>
<ul class="icons">
    <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
    <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
    <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
</ul>
</div>
</div>

</body>
</html>