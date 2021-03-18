<?php
include("db.php");
$del_id=$_GET['delete'];
$sql2="DELETE FOEM `comment` WHERE `com_w_id` = $del_id";
if(mysqli_query($db,$sql2)){
    echo "删除操作执行成功";
}
else { 
    echo "删除操作执行失败";
    echo "ERROR comment " . $db->errno . ":" . $db->error;
}
 $sql = "DELETE FROM `writing` WHERE `w_id` = $del_id";
 if(mysqli_query($db,$sql)){
    	 echo "删除操作执行成功"; 
  	 header("Location: http://localhost/html_php/login.php");
	}
    else{
	 echo "删除操作执行失败";
	 echo "ERROR  writing " . $db->errno . ":" . $db->error;
	}
mysqli_close($db);
?>

