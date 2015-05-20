<?php
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
session_start();
require_once ('function/set.php');
require_once ('function/filter.php');
server_chk($_POST['content'], $web['list_wordcount']);
$id=filter2($_POST['id']);
$invitation = filter2($_POST['content']);
$name=filter2($_POST['subject']);
include_once("../../conn/conn.php");		//连接数据库
$edittime=date("Y-m-j H:i:s");
if(mysql_query("update tb_meeting set invitation='".$invitation."',name='".$name."',edittime='".$edittime."' where id='".$id."'",$conn))
 {
 echo "<script>alert('修改Invitation成功!');window.history.go(-2);</script>";
 mysql_close($conn);
 }
 else
 {
   echo "<script>alert('修改Invitation失败!');window.history.go(-2);</script>";
   mysql_close($conn);
 }