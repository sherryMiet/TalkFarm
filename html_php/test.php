
<?php
session_start();
include('db.php');
$mid = $_SESSION['mid'];
$wtitle = $_POST['title'];
$waritle =  nl2br($_POST['aritle']);
$wbillboard=$_POST['billboard'];
$tmpname=$_FILES['file']['tmp_name'];
$fp= fopen($tmpname, 'r');
$fileContent=fread($fp,filesize($tmpname));
 
$file_uploads = base64_encode($fileContent);
 

$sql="INSERT INTO `writing`(`w_m_id`,`w_billboard`,`w_title`, `w_aritle`,`pic_1`) VALUES ('$mid','$wbillboard','$wtitle','$waritle','data:image/png;base64,".$file_uploads."')";
$result=$db->query($sql);

if ($result) {
echo mysqli_affected_rows($db). "插入成功";
header("Location: http://localhost/html_php/sort-home.php");
}
else{
echo mysqli_error($db);
}
fclose($fp1);
?>
<a href="test.html"><button type="button">確定</button></a><br>
