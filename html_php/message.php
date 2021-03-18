
<?php
session_start();
include("db.php");
$com_text=$_POST['message'];
$com_w_id=$_SESSION['com_w_id'];
$m_name=$_SESSION['name'];
$m_id=$_SESSION['mid'];
if($m_id==""){echo"請先登入!!";}
else{
    $sql2 = "SELECT w_id FROM `writing` Where `w_id` = '$com_w_id'";
    $result2 = $db->query($sql2);
    while($rs2=mysqli_fetch_array($result2))
        {
         echo  $rs2[0];
            $sql="INSERT INTO `comment`( `com_w_id`,`com_user`, `com_text`,`com_name`) VALUES ('$com_w_id','$m_id','$com_text','$m_name')";
            $result=$db->query($sql);
            if ($result) {
                echo mysqli_affected_rows($db). "插入成功";
                header("Location: http://localhost/html_php/sort-home.php");
                unset($_SESSION['com_w_id']);//清除session傳送過來的wid資料 以免發生資料碰撞
             }
             else{
            echo mysqli_error($db)."留言失敗";
            }
    } 
}
?>




