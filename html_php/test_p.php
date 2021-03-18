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
    <h1>新增文章</h1>
    <form action="test.php" method="post" enctype="multipart/form-data" >
    <table>
        <tr>
            <td>留言刊版：</td>
            <td>
                <select name="billboard" class="pretty-select">
                    　<option value="閒話家常">閒話家常</option>
                    　<option value="省錢小絕招">省錢小絕招</option>
                    　<option value="動物農場">動物農場</option>
                    　<option value="好康道相報">好康道相報</option>
                     
                </select>
            </td>
        </tr>
        <br>
        <tr>
            <td>標題</td>
            <td>
                <input type="text" id="enter" name="title">
            </td>
        </tr>
        <tr>
            <td>內容</td>
            <td>
                <textarea name="aritle" cols="45" rows="5"></textarea><br>
                
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type='file' id="file" name="file" />
            </td>
        </tr>
        
        <tr>
       
            <td>
                <br>
                <br>
                <input type="submit" id = "sign" value="提交">
            </td>
           
        </tr>
    </table>
    </form>

</div>
<!-- /Main --> 

</div>


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