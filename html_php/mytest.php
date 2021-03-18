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
//echo $_SESSION['mid'];
$mid = $_SESSION['mid'];
include("db.php");
$sql = "SELECT * FROM writing where w_m_id='$mid'ORDER BY w_id DESC"; // 指定SQL查詢字串
$result = mysqli_query($db,$sql)or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result))
    {
      if( $row['w_title'] !=NULL){
        ?>
        
        
       
        <?php echo '<input type="button" id="tit_btn" name="id" value=' . $row['w_title'] . ' onclick=location.href="showdetail.php?id=' . $row['w_id'] . '">';
        //做成button傳送值，以GET方式傳送至showdetail.php?>
        <br>
        <div id="con"><?php 
                $wmid=$row['w_m_id'];
                $sql2 = "SELECT m_name FROM member WHERE m_id = '$wmid'";
                $result2 = mysqli_query($db, $sql2); 
                while($rs2=mysqli_fetch_array($result2))
                {
                  echo $rs2['m_name']; }  
                ?> </div>
        <p class="art"><?php echo"$row[w_aritle]";?></p>
        <?php echo '<input type="button" id="btn" name="modify" value='. "修改" . ' onclick=location.href="modify.php?modify=' . $row['w_id'] . '">';?>
        <?php
         echo '<input type="button" name="delete" id="btn" value='. "刪除" . ' onclick=location.href="delete.php?delete=' . $row['w_id'] . '">';
        ?><br>
        

        <hr>
        <?php
      }
      else {
        echo"已刪除";
      }
    }
?>
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

 