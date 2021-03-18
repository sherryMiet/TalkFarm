﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#TayTay</title>
    <link href = "homeandlogin.css" rel="stylesheet" type ="text/css">
   
</head> 
<?php
error_reporting(0);
session_start();
include("db.php");
$pmname=$_SESSION['pmname'];
$ppwd=$_SESSION['ppwd'];
  ?>
  <body>
    
  <center><h2>會員專區</h2><a href="plogout.php"><button>管理員登出</button></a></center>
  <center>
  <form method="post" action="psearchmb.php" name="form1" >
     <input id="searchmb" type="text" name="searchmb" size="60" placeholder="輸入以搜尋會員" >
    <input type="submit" id="sea_btn" value="確定" name="ok"size="10">
</form>
<BR>

<div class="table-wrapper">
	<table class="fl-table" style="text-align:center;">
  <tr>
    <thead>
      <th> 會員編號 </th>
      <th> 會員名稱 </th>
      <th> 會員帳號 </th>
		  <th> 功能 </th>
  <thead>
    </tr>
  <?php $sql = "SELECT * FROM member "; // 指定SQL查詢字串    
  $result = mysqli_query($db, $sql); 
  $data_nums = mysqli_num_rows($result);//統計總比數
  $per = 15; //每頁顯示項目數量
  $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
      $page=1; //則在此設定起始頁數
} else {
  $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
}
  $start = ($page-1)*$per; //每一頁開始的資料序號
  $result = mysqli_query($db,$sql.' LIMIT '.$start.', '.$per) or die("Error");
  ?>
  <?php
    while ($rs = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                <tbody>
                  <td> <?php echo $rs['m_id'] ?> </td>
                  <td> <?php echo $rs['m_name']?> </td>
                  <td> <?php echo $rs['m_email']?> </td>
                  
		  <td>  <?php echo '<input type="button"  id="p_btn" name="delete" value='. "查看" . ' onclick=location.href="allarticle.php?memberid=' . $rs['m_id'] . '">';?>
        <?php echo '<input type="button" id="p_btn"  name="pmemberdelete" value='. "刪除" . ' onclick=location.href="pmemberdelete.php?dmid=' . $rs['m_id'] . '">';?> </td>
     </tr>
    <?php
    }?> </tbody>
    </table>
    <?php
    //分頁頁碼
    echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
    echo "<br /><a href=?page=1>首頁</a> ";
    echo "第 ";
    for( $i=1 ; $i<=$pages ; $i++ ) {
        if ( $page-3 < $i && $i < $page+3 ) {
            echo "<a href=?page=".$i.">".$i."</a> ";
        }
    } 
    echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
?></center>
  </div> 
    <?php  
    mysqli_free_result($result);
    mysqli_close($db);  // 關閉資料庫連接
?>
</body>
</html>
<!--https://ithelp.ithome.com.tw/articles/10156675-->