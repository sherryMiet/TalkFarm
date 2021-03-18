
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
									if( isset($_SESSION['mid']) ) {
										?><li><a href="login.php"><?php echo  $_SESSION['name']; ?></a></li>
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
<?php

include("db.php");
$mod_id = $_GET['modify'];
$_SESSION['wid']=$mod_id;
$sql = "SELECT w_title , w_m_id ,m_name ,w_aritle,w_billboard FROM writing,member where w_id = '".$mod_id."' and w_m_id = m_id";
$result = mysqli_query($db,$sql)or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
    {
        ?>
        <br>
        <form action="okmodify.php" method="POST" >
            <select name="billboard" class="pretty-select" value="<?php echo"$row[4]";?>">
                    　<option value="閒話家常">閒話家常</option>
                    　<option value="省錢小絕招">省錢小絕招</option>
                    　<option value="動物農場">動物農場</option>
                    　<option value="好康道相報">好康道相報</option>
                </select>
                <br>
                <br>
        <input type="text" id="enter" name="title" value=<?php echo"$row[0]";?>><br>
        
        <hr>
        <br>
        <textarea type="text" cols="45" rows="5" name="aritle"><?php echo "$row[3]";?></textarea><br>
        <br>
        <button text="submit" id="sign">確認修改</button>
        </form>
        <?php
    }

?>
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