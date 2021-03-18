<?php
session_start();
$username  = $_POST['username'];
$pwd = $_POST['pwd'];
if($username == 'system01' && $pwd == '123456' )
{
  $_SESSION['pmname']=$username;
  $_SESSION['ppwd']=$pwd;
  header("Location: http://localhost/pmember.php" );
}
else{
  header("Location: http://localhost/plogin.html" );
}
?>