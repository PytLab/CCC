<?php 
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf-8" ); 
include_once("../conn/conn.php");
include_once("../function.php"); 
$name=$_POST[name];
$pwd=md5($_POST[pwd]);
$truepwd=$_POST[pwd];
$courseid=$_POST[course];
$addtime=date("Y-m-j H:i:s");
$type=0;
if(mysql_query("insert into tb_user(usernc,pwd,courseid,usertype,truepwd,regtime) values ('$name','$pwd','$courseid','$type','$truepwd','$addtime')",$conn))
{
	 echo "<script language='javascript'>alert('Add account successfully!');history.back();</script>"; 	
}
else
{
	 echo "<script language='javascript'>alert('Failed to add account!');history.back();</script>"; 	
}