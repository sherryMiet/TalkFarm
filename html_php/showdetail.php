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
                  
                    include("db.php");
                    $id = $_GET['id'];//接收sort-home.php傳送過來的wid
                    $_SESSION['com_w_id'] = $id;//wid只能用session送過去 如果用button的話會與textarea產生資料傳送問題 下面的按鈕我換成了一般的了
                    $sql = "SELECT w_title , w_m_id ,m_name ,w_aritle,w_billboard,pic_1,m_image FROM writing Natural join member where w_id = '".$id."' and w_m_id = m_id";
                    $result = mysqli_query($db,$sql)or die(mysqli_error($db));
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                        <div id = "title"><?php echo"$row[0]";?><br></div>
                        <?php if($row[6]==""){
                        ?> <img id="image" src="user.png" />
                        <?php }
        
                    else {?>
        <div id = "user"> <img id="image" src="<?php echo"$row[6]" ; ?>" /><?php } ?>
        <?php echo"$row[2]";?>
        ＃<?php echo"$row[4]";?><br>
        <hr>
        <div id ="con"><br><br><?php echo nl2br(" $row[3]");?></div>
        <img src="<?php echo"$row[5]" ; ?>" /><br/>
        
		<br><br>
		
		
		<hr>
		<form method="post" action="message.php" >
        <input type="text" colspan="100" name="message" placeholder="留言...." class="input_c" >
        <button type="submit" class="button">留言</button>
        </form>
        <hr>
        <div id ="comment">
        <?php 
         $i = 0;
            $sql2 = "SELECT * FROM (SELECT * FROM writing ,member where w_id = '".$id."' and w_m_id = m_id) As A,`comment` As C where C.com_w_id = '".$id."'  ";
            $result2 = mysqli_query($db, $sql2); 
                while($rs2=mysqli_fetch_array($result2))
                { $i =$i+1; ?>
                     <div id ="com_b"><?php echo "B".$i ."<br/>";?> </div>
                     <div id ="com_user"><?php echo $rs2['com_name'];?> <br></div>
                     <div id ="com_txt"><?php echo nl2br($rs2['com_text']);?> <br></div>
                    <hr>
                <?php 
                }  
        
       
    }

?>

    
</div>
<center><a href="sort-home.php"  target="One"><img src="home.png" width="15px" ="15px">回首頁</a></center><br>
</body>
</html>