<?php
header ( "Content-type: text/html; charset=utf8" );
session_start();
$id=$_GET["id"];
include_once("./conn/conn.php");
$sql=mysql_query("select * from tb_coursefile where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);//get courseinfo

//judge usertype
$sqlu=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'and courseid=".$info[courseid]."",$conn);
$infou=mysql_fetch_array($sqlu);
if($infou=="")
{
	echo "<div align=\"center\" style=\"margin-top:100px;\">Oops!(;￢д￢)<br /><br />&nbsp;Your account is not matched~<br /><br />눈_눈Please operate correctly!<br />
";
	echo "<script>alert('Ooops!\\nPermission denied!\\n눈_눈Please operate correctly!');history.go(-1);</script>";
}

$path=$info["file"];
if(file_exists($path)==false)
{
 echo "<script>alert('Oops!Sorry, the resource is not available now');history.back();</script>";
 exit;
}else{
mysql_query("update tb_coursefile set downtimes=downtimes+1 where id='".$id."'",$conn);
echo mysql_error();
$filename=basename($path);
$file=fopen($path,"r");
header("Content-type:application/octet-stream");
header("Accept-ranges:bytes");
header("Accept-length:".filesize($path));
header("Content-Disposition:attachment;filename=".$filename);
echo fread($file,filesize($path));
fclose($file);
exit;}
?>