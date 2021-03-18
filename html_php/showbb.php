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

				<!-- Page -->
					<div id="page" class="container">

<?php
    $wbillboard=$_GET['id'];
    include("db.php");
    $sql = "SELECT * FROM `writing` Where `w_billboard` ='$wbillboard' ORDER BY w_id DESC"; // 指定SQL查詢字串
    ?><p style="font-size:40px;"><?php  echo $wbillboard."<hr>"; ?>
   </p><?php
    $result = mysqli_query($db, $sql);
    while ($rs = mysqli_fetch_assoc($result)) {
        ?>
    <div id ="con">
                  <?php echo '<input type="button" name="id" id="tit_btn" value=' . $rs['w_title'] . ' onclick=location.href="showdetail.php?id=' . $rs['w_id'] . '">';
                  //<?php echo $rs['w_title'] ?><br>
                  來自:<?php
                    $wmid=$rs['w_m_id'];
                    $sql2 = "SELECT m_name FROM member WHERE m_id = '$wmid'";
                    $result2 = mysqli_query($db, $sql2); 
                    while($rs2=mysqli_fetch_array($result2))
                    {
                      echo $rs2['m_name']; 
                     ?>
                   <?php }  
                  
                      
                  ?> <p class="art"><?php echo$rs['w_aritle'];?></p>
                   <hr>
    </div>
    <?php 
    }
    mysqli_free_result($result);
    mysqli_close($db);  // 關閉資料庫連接
    ?>
    </div>

</body>
</html>