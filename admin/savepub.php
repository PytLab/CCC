<?php
header ( "Content-type: text/html; charset=utf8" ); 
include_once("../conn/conn.php");
$gg_title=$_POST[title];
$gg_link=$_POST[link];
$details=$_POST[details];
$pub_time=$_POST[pub_time];
$author=$_POST[author];
$addtime=date("Y-m-j H:i:s");

$link=date("YmjHis");
if($_FILES["paper"]["name"]==true)
{
	$path=$link.strstr($_FILES["paper"]["name"],".");//rename file
	$address="../upfile/pub/".$path;
	
	move_uploaded_file($_FILES["paper"]["tmp_name"],$address);
	
	$address_in_db="./upfile/pub/".$path;
}
if($_FILES["paper"]["name"]==true)
{
	$query=mysql_query("insert into tb_publication(title,link,pub_time,createtime,details,author,paper) values('$gg_title','$gg_link','$pub_time','$addtime','$details','$author','$address_in_db')",$conn);
	 if($query==true){ 
	   echo $_FILES['paper']['error']."<script>alert('Publication添加成功！');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Publication添加失败！');history.back();</script>";
	
	}
}
else
{
	$query=mysql_query("insert into tb_publication(title,link,pub_time,createtime,details,author) values('$gg_title','$gg_link','$pub_time','$addtime','$details','$author')",$conn);
	 if($query==true){ 
	   echo $_FILES['paper']['error']."<script>alert('Publication添加成功！');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Publication添加失败！');history.back();</script>";
	
	}	
}
?>