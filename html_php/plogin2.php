<?php
session_start();
$username  = $_POST['username'];
$pwd = $_POST['pwd'];
if($username == 'system02' && $pwd == '123456' )
{
  $_SESSION['pmname2']=$username;
  $_SESSION['ppwd2']=$pwd;
  header("Location: http://localhost/html_php/paritle.php" );
}
else{
  header("Location: http://localhost/html_php/plogin2.html" );
}
?>