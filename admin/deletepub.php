<?php
	header ( "Content-type: text/html; charset=utf8" );
	include_once("../conn/conn.php");
	$id=$_GET[id];
	//below delete the paper file in server
	$sql_file=mysql_query("select * from tb_publication where id=".$id."");
	$info_file=mysql_fetch_array($sql_file);
	//delete the paper file
	$path_file=".".$info_file[paper];
	if($info_file[paper] && file_exists($path_file))  //若数据库中存在paper且文件存在
	{
		if(unlink($path_file))
		{
			echo "The publication '".$info_file[title]."' is deleted successfully!<br />";	
		}
		else
		{
			echo "The publication '".$info_file[title]."' could not be deleted!Please try in server manually!<br />";	
		}
	}
	
	if(mysql_query("delete from tb_publication where id='".$_GET[id]."'",$conn)){
	  echo "<script>alert('Delete publication successfully!');history.back();</script>";
	}else{
	   echo "<script>alert('Failed to delete the publication!');history.back();</script>";
	}
?>