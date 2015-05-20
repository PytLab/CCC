<?php
header ( "Content-type: text/html; charset=utf8" ); 
include_once("../conn/conn.php");
date_default_timezone_set(PRC);
$num=$_POST[name];
$text=$_POST[info];
$addtime=date("Y-m-j H:i:s");
$id=$_POST[id];

if($_FILES["photo"]["name"]==true){         
  $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  
  if($photo_name!=".jpg"&$photo_name!=".gif"&$photo_name!=".png"){ 
    echo "<script>alert('Oops!Sorry!Format is not correct! Please use .jpg/.png/.gif');history.back();</script>";
  }

  else{
    $paths1=$num.strstr($_FILES["photo"]["name"],".");                               
    $photos="../graph/HomePage/photo_change/".$paths1;                                                       
	$photo="graph/HomePage/photo_change/".$paths1;
    move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);                      
  }
}
if($_FILES["photo"]["name"]==true)
	{
	$query=mysql_query("update tb_homepic set num='$num',text='$text',edittime='$addtime',pic='$photo' where id='".$id."'",$conn);
	 if($query==true){ 
	   echo "<script>alert('Photo edit successfully!');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Failed to edit!');history.back();</script>";
	
	}
}
else
{
	$query=mysql_query("update tb_course set num='$num',text='$text',edittime='$addtime' where id='".$id."'",$conn);
	 if($query==true){ 
	   echo "<script>alert('Photo edit successfully!');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('Failed to edit!');history.back();</script>";
	
	}
}
?>