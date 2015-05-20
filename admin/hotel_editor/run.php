<?php
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
session_start();
require_once ('function/set.php');
require_once ('function/filter.php');
server_chk($_POST['content'], $web['list_wordcount']);
$news_content = filter2($_POST['content']);
$news_title=filter2($_POST['subject']);
include_once("../../conn/conn.php");		//连接数据库
$author_name=$_SESSION["admin_nc"];
$createtime=date("Y-m-j H:i:s");
if(mysql_query("insert into tb_highlights(content,title,author,createtime) values ('".$news_content."','".$news_title."','".$author_name."','".$createtime."')",$conn))
 {
 echo "<script>alert('发表成功!');window.history.go(-2);</script>";
 mysql_close($conn);
 }
 else
 {
   echo "<script>alert('发表失败!');window.history.go(-2);</script>";
   mysql_close($conn);
 }