<?php
	header ( "Content-type: text/html; charset=utf8" ); 
	include_once("../conn/conn.php");
	$id=$_GET[id];
	$sql=mysql_query("select * from tb_hotel where id=".$id."");
	$info=mysql_fetch_array($sql);
	//below delete the pic of hotel
	if($info[pic]!="")
	{
		$path_pic="../".$info[pic];
		if(unlink($path_pic))
		{
			echo "The hotel photo was deleted successfully!";
		}
		else
		{
			echo "The hotel photo could not be deleted. Please try in the server manually!";	
		}
	}
	//below delete the pic in info
	$preg = "/<img src=\"(.+?)\".*?>/";
	preg_match_all($preg,$info[info],$new_content);
	$i=0;
	while($new_content[1][$i])
	{
		$path_intro="hotel_editor/upload".strrchr($new_content[1][$i],"/");
		if(unlink($path_intro))
		{
			echo strrchr($new_content[1][$i],"/")."&nbsp;&nbsp;in Introduction is deleted successfully!<br />";	
		}
		else
		{
			echo "The photo".strrchr($new_content[1][$i],"/")."in Introduction could not be deleted. Please try in the server manually!<br />";
		}
		$i++;
	}				//loop to delete photos in text
	
	
	if(mysql_query("delete from tb_hotel where id='".$_GET[id]."'",$conn)){
	  echo "<script>alert('Delete Hotel successfully!');history.back();</script>";
	}else{
	   echo "<script>alert('Failed to delete Hotel!');history.back();</script>";
	}
?>