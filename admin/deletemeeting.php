<?php
	header ( "Content-type: text/html; charset=utf8" ); 
	include_once("../conn/conn.php");
	$id=$_GET[id];
	$sql=mysql_query("select * from tb_meeting where id=".$id."");
	$info=mysql_fetch_array($sql);
	//below delete the pic of meeting
	if($info[pic]!="")
	{
		$path_pic="../".$info[pic];
		if(unlink($path_pic))
		{
			echo "The meeting photo was deleted successfully!";
		}
		else
		{
			echo "The meeting photo could not be deleted. Please try in the server manually!";	
		}
	}
	//below delete the pic in invitation
	$preg = "/<img src=\"(.+?)\".*?>/";
	preg_match_all($preg,$info[invitation],$new_content);
	$i=0;
	while($new_content[1][$i])
	{
		$path_invit="meeting_invit_editor/upload".strrchr($new_content[1][$i],"/");
		if(unlink($path_invit))
		{
			echo strrchr($new_content[1][$i],"/")."&nbsp;&nbsp;in Introduction is deleted successfully!<br />";	
		}
		else
		{
			echo "The photo".strrchr($new_content[1][$i],"/")."in Introduction could not be deleted. Please try in the server manually!<br />";
		}
		$i++;
	}				//loop to delete photos in text
	
	//below delete the pic in program
	preg_match_all($preg,$info[program],$new_prog);
	$i=0;
	while($new_prog[1][$i])
	{
		$path_prog="meeting_editor/upload".strrchr($new_content[1][$i],"/");
		if(unlink($path_prog))
		{
			echo strrchr($new_prog[1][$i],"/")."&nbsp;&nbsp;in Program is deleted successfully!<br />";	
		}
		else
		{
			echo "The photo".strrchr($new_content[1][$i],"/")."in Program could not be deleted. Please try in the server manually!<br />";
		}
		$i++;
	}				//loop to delete photos in text
	
	
	if(mysql_query("delete from tb_meeting where id='".$_GET[id]."'",$conn)){
	  echo "<script>alert('Delete Meeting successfully!');history.back();</script>";
	}else{
	   echo "<script>alert('Failed to delete meeting!');history.back();</script>";
	}
?>