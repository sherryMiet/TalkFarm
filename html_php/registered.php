<?php
include("db.php");
$username = $_POST['name'];
$password = $_POST['pwd'];
$email = $_POST['email'];
$tmpname=$_FILES['file']['tmp_name'];
$fp= fopen($tmpname, 'r');
$fileContent=fread($fp,filesize($tmpname));
 
$file_uploads = base64_encode($fileContent);
$a = 0;


$sql = "SELECT * FROM member where  m_email='".$email."'";
$result = mysqli_query($db,$sql)or die("<br>SQL error!<br/>");
if($data = mysqli_fetch_array($result)){
    echo "此email已被註冊";
    }else{	
$query = "INSERT INTO `member` (`m_email`,`m_name`,`m_pwd`,`m_followers`,`m_time`,`m_aniqty`,`m_feedqty`,`m_budget`,`m_image`) VALUES ('".$email."','".$username."','".$password."','0','00:00:00','0','0','0','data:image/png;base64,".$file_uploads."')";
$result = mysqli_query($db,$query)or die("<br>SQL error!<br/>");
}
if ($result) {
    echo"註冊成功!";
    header("Location: http://localhost/html_php/sort-home.php");
} else {
    echo"註冊失敗!請重新註冊";
    header("Location: http://localhost/html_php/registered.html");
}
?>