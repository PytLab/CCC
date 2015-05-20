<?php
header ( "Content-type: text/html; charset=utf8" ); 
include_once("../conn/conn.php");
date_default_timezone_set(PRC);
$name=$_POST[name];
$info=$_POST[info];
$teacher=$_POST[teacher];
$addtime=date("Y-m-j H:i:s");
$id=$_POST[id];

if($_FILES["photo"]["name"]==true){         
  $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" & $photo_name!=".png"){ 
    echo "<script>alert('Format is not correct!');history.back();</script>";
  }

  else{
    $paths1=$name.strstr($_FILES["photo"]["name"],".");                               
    $photos="../graph/courses/pic/".$paths1;                                                       
	$photo="graph/courses/pic/".$paths1;
    move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);                      
  }
}
if($_FILES["photo"]["name"]==true)
	{
	$query=mysql_query("update tb_course set name='$name',info='$info',teacher='$teacher',edittime='$addtime',pic='$photo' where id='".$id."'",$conn);
	 if($query==true){ 
	   echo "<script>alert('Course edit successfully!');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Failed to edit!');history.back();</script>";
	
	}
}
else
{
	$query=mysql_query("update tb_course set name='$name',info='$info',teacher='$teacher',edittime='$addtime' where id='".$id."'",$conn);
	 if($query==true){ 
	   echo "<script>alert('Course edit successfully!');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Failed to edit!');history.back();</script>";
	
	}
}
?>