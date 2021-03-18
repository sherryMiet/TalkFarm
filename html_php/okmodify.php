<?php
session_start();
include("db.php");
$modwid=$_SESSION['wid'];
$modtitle = $_POST['title'];
$modaritle = nl2br( $_POST['aritle']);
$modbillboard=$_POST['billboard'];

$sql = "UPDATE `writing` SET `w_title` = ?, `w_billboard` = ?, `w_aritle` = ? WHERE `w_id` = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('sssi',$modtitle,$modbillboard,$modaritle,$modwid);
header("Location: http://localhost/html_php/mytest.php");
$stmt->execute();