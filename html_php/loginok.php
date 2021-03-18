<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>showdetail</title>
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

<?php


include('db.php');
   $_SESSION['account']=$_POST['m_email'];
   $_SESSION['pwd']=$_POST ['m_pwd'];
   $account = $_SESSION['account'];
   $password =$_SESSION['pwd'];
   $sql = "SELECT m_id,m_name,m_image FROM member WHERE m_email='$account' AND m_pwd='$password'" ;

   $result = mysqli_query($db,$sql)or die(mysqli_error($db));
   while($row = mysqli_fetch_array($result)){
      ?><a href="mytest.php" target="One"><center><?php if($row[2]==""){
         ?> <img style="width: 300px;
		 height:300px;
		 border-radius: 50%;
		 margin-top:30px;
		 margin-right: 10px;
		 border: 0px ;" src="user.png" />
   <?php }
   
   else {?>
   <div id = "user"> <img style="width: 300px;
		height:300px;
		border-radius: 50%;
		margin-top:30px;
		margin-right: 10px;
		border: 0px ;" src="<?php echo"$row[2]" ; ?>" /><?php } ?></center><br/></a>
	
	  <?php
      }
   $sql2 = $db->query($sql);
       if (mysqli_num_rows($sql2) == "") {
          header("Location: http://localhost/html_php/login_s.php");
          ?><script language="javascript">
          alert('帳號密碼輸入錯誤!');</script>
       <?php} 
       else {
          ?>
          <center>
          
          <br>
          <div id ="user">
          
          <?php 
          echo "$account";
          while($data=mysqli_fetch_array($sql2)){
          $_SESSION['mid']=$data['m_id'];
          $_SESSION['name']=$data['m_name'];
		  }
           $mid= $_SESSION['mid'];
         
		  ?>
         
       
         
</body>
</html>
<?php
       }
      
 $db->close();//close $conn
?>
</div>
<script>
       location.href= ('http://localhost/html_php/login.php');
     </script>
</body>
</html>
 