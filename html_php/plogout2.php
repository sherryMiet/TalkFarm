<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
session_destroy();
echo '登出中......';
header("Location: http://localhost/html_php/plogin2.html");
?>
