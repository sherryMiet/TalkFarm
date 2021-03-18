﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#TayTay</title>
    <link href = "mytest.css" rel="stylesheet" type ="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	
</head>
<h1>會員文章</h1>
<body>
	<a href="pmember.php"><button id="btn">會員頁</button></a><hr>
	<?php 
	error_reporting(0);
		$memberid = $_GET["memberid"];

		//連接到Ddatabase
		$dsn = "mysql:host=localhost;dbname=accounting;charset=utf8";
		$dbh = new PDO($dsn,'root','');
		if(!$dbh){
			echo "unable to connect to database";
		}

		$sql = "SELECT m_id,m_name,w_id,w_title,w_aritle,w_billboard,w_like
		FROM member AS M,writing AS W
		WHERE W.w_m_id = M.m_id AND W.w_m_id = $memberid";
$result = $dbh->query($sql);

while($row = $result->fetch()){
	echo '<input type="button" id="tit_btn" value='.$row[3].' onclick=location.href="showdetail.php?id=' . $row['w_id'] . '">'."<br/>";
	echo " ".$row['m_name']."<br/>";
	echo "<p>".$row['w_aritle']."</p><br/>";
	echo '<input type="button" name="delete" id="btn" value="刪除文章" onclick=location.href="wdelete.php?wid=' . $row['w_id'] . '&mid=' . $row['m_id']  . '">' . "<br/><hr>";
	//='deletefu($row[w_id])';
}

	$dbh = null;
	?>
</body>

</html>