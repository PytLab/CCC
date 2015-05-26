<?php
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
session_start();
require_once ('function/set.php');
require_once ('function/filter.php');
server_chk($_POST['content'], $web['list_wordcount']);
$blog_id=filter2($_POST['blog_id']);
$blog_content = filter2($_POST['content']);
$blog_title=filter2($_POST['subject']);
include_once("../../conn/conn.php");		//连接数据库
$author_name=$_SESSION["unc"];
$edittime=date("Y-m-j H:i:s");
if(mysql_query("update tb_news set content='".$blog_content."',title='".$blog_title."',author='".$author_name."' where id='".$blog_id."'",$conn))
 {
 echo "<script>alert('修改成功!');window.history.go(-2);</script>";
 mysql_close($conn);
 }
 else
 {
   echo "<script>alert('修改失败!');window.history.go(-2);</script>";
   mysql_close($conn);
 }