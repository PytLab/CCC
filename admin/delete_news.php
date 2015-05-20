<?php
	header ( "Content-type: text/html; charset=utf8" ); 
	include_once("../conn/conn.php");
	$id=$_GET[id];
	$sql=mysql_query("select * from tb_news where id=".$id."");
	$info=mysql_fetch_array($sql);
	$preg = "/<img src=\"(.+?)\".*?>/";
	preg_match_all($preg,$info[content],$new_content);
	$i=0;
	while($new_content[1][$i])
	{
		$path="high_editor/upload".strrchr($new_content[1][$i],"/");
		if(unlink($path))
		{
			echo strrchr($new_content[1][$i],"/")."&nbsp;&nbsp;delete successfully!<br />";	
		}
		else
		{
			echo "The photo".strrchr($new_content[1][$i],"/")." could not be deleted. Please try in the server manually!";
		}
		$i++;
	}				//loop to delete photos in text
	if(mysql_query("delete from tb_news where id='".$_GET[id]."'",$conn)){
	  echo "<script>alert('Delete News successfully!');history.back();</script>";
	}else{
	   echo "<script>alert('Failed to delete news!');history.back();</script>";
	}
?>