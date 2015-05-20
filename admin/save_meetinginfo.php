<?php
header ( "Content-type: text/html; charset=utf8" );
include_once("../conn/conn.php");
date_default_timezone_set(PRC);
$name=$_POST[name];
$date=$_POST[date];
$addtime=date("Y-m-j H:i:s");
$pic=$_POST[photo];
$id=$_POST[id];
$hotel=implode("#",$_POST[hotel]);

if($_FILES["photo"]["name"]==true){        
  $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" ){ 
    echo "<script>alert('Wrong Format!');history.back();</script>";
  }

  else{
    $paths1=$name."-".$date.strstr($_FILES["photo"]["name"],".");                                  
    $photos="../graph/meeting/".$paths1;                                                       
	$photo="graph/meeting/".$paths1;
    move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);                      
  }
}
if($_FILES["photo"]["name"]==true)
{
	$query=mysql_query("update tb_meeting set name='$name',date='$date',edittime='$addtime',pic='$photo', hotel='$hotel' where id=".$id."",$conn);
	 if($query==true){ 
	   echo "<script>alert('change successfully!');history.back();</script>";
	
		}else{
	   
	   echo "<script>alert('failed to change info!');history.back();</script>";
	
	}

}
else
{
	$query=mysql_query("update tb_meeting set name='$name',date='$date',edittime='$addtime',hotel='$hotel' where id=".$id."",$conn);
	 if($query==true){ 
	   echo "<script>alert('change successfully!');history.back();</script>";
	
	}else{
	   
	   echo "<script>alert('failed to change info!');history.back();</script>";
	
	}	
}
?>