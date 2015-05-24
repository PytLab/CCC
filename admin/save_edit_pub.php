<?php
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
include_once("../conn/conn.php");
$gg_title=$_POST[title];
$gg_link=$_POST[link];
$details=$_POST[details];
$pub_time=$_POST[pub_time];
$author=$_POST[author];
$addtime=date("Y-m-j H:i:s");
$id=$_POST[id];

if($_FILES["paper"]["name"] == true)
{
	//$path=$link.strstr($_FILES["paper"]["name"],".");//rename file
	$path = $_FILES["paper"]["name"];
	$address="../upfile/pub/".$path;
	
	move_uploaded_file($_FILES["paper"]["tmp_name"],$address);
	
	$address_in_db="./upfile/pub/".$path;
}
if($_FILES["paper"]["name"]==true)
{
	$query=mysql_query("update tb_publication set title='$gg_title',details='$details',author='$author',pub_time='$pub_time',link='$gg_link',paper='$address_in_db' where id=".$id."",$conn);
	if($query==true)
	    echo $_FILES['paper']['error'].$_FILES['paper']['name']."<script>alert('Publication修改成功！');history.back();</script>";
	else
	    echo "<script>alert('Publication修改失败！');history.back();</script>";
}
else
{
	$query=mysql_query("update tb_publication set title='$gg_title',details='$details',author='$author',pub_time='$pub_time',link='$gg_link' where id=".$id."",$conn);
	 if($query==true){ 
	   echo $_FILES['paper']['error']."<script>alert('Publication修改成功！');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Publication修改失败！');history.back();</script>";
	
	}	
}
?>