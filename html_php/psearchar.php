<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋結果</title>
    <link href = "homeandlogin.css" rel="stylesheet" type ="text/css">
   
</head> 
<h1>搜尋結果</h1>
<center><a href="paritle.php">返回</a></center>
<body>
<BR>
<div class="table-wrapper">
	<table class="fl-table" style="text-align:center;">
  <tr>
    <thead>
    <th> 會員帳號 </th>
      <th> 文章編號 </th>
      <th> 文章名稱 </th>
      <th> 文章標題 </th>
		  <th> 功能 </th>
  <thead>
    </tr>
  <?php 
  $searchar=$_POST["searchar"];
  include("db.php");
  $sql = "SELECT m_email,w_id,w_billboard,w_title 
          FROM writing ,member 
          Where  w_title like '%$searchar%' and w_m_id=m_id OR w_aritle like '%$searchar' and w_m_id=m_id OR w_id like '%$searchar' and w_m_id=m_id
          ORDER BY w_id  DESC"; // 指定SQL查詢字串    
  $result = mysqli_query($db, $sql);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
  }
    while ($rs = mysqli_fetch_array($result)) {
        ?>
                <tr>
                <tbody>
                  <td> <?php echo $rs['m_email'] ?> </td>
                  <td> <?php echo $rs['w_id'] ?> </td> 
                  <td> <?php echo $rs['w_billboard']?> </td>
                  <td> <?php echo $rs['w_title']?> </td>
                  
                 
                  
		  <td>  <?php echo '<input type="button"  id="p_btn" name="delete" value='. "查看文章" . ' onclick=location.href="paritlew.php?memberid=' . $rs['w_id'] . '">';?></td>
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