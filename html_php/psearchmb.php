<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#TayTay</title>
    <link href = "homeandlogin.css" rel="stylesheet" type ="text/css">
   
</head> 
<h1>收尋結果</h1>
<center><a href="pmember.php">返回</a></center>
<body>
<BR>
<div class="table-wrapper">
	<table class="fl-table" style="text-align:center;">
  <tr>
    <thead>
      <th> 會員編號 </th>
      <th> 會員名稱 </th>
      <th> 會員帳號 </th>
		  <th> 會員文章 </th>
  <thead>
    </tr>
  <?php 
  $searchmb=$_POST["searchmb"];
  include("db.php");
  $sql = "SELECT * FROM member Where m_id like '%$searchmb%' OR m_email like '%$searchmb%' ORDER BY m_id DESC"; // 指定SQL查詢字串    
  $result = mysqli_query($db, $sql); 
    while ($rs = mysqli_fetch_array($result)) {
        ?>
                <tr>
                <tbody>
                  <td> <?php echo $rs['m_id'] ?> </td>
                  <td> <?php echo $rs['m_name']?> </td>
                  <td> <?php echo $rs['m_email']?> </td>
                  
          <td>  <?php echo '<input type="button" target="Five" id="p_btn" name="delete" value='. "查看" . ' onclick=location.href="allarticle.php?memberid=' . $rs['m_id'] . '">';?>
        <?php echo '<input type="button" id="p_btn"  name="pmemberdelete" value='. "刪除" . ' onclick=location.href="pmemberdelete.php?dmid=' . $rs['m_id'] . '">';?> </td>
     </tr>
       
    <?php
    }?> </tbody>
    </table>
  </div> 
    <?php  
    mysqli_free_result($result);
    mysqli_close($db);  // 關閉資料庫連接
?>
</body>
</html>