<?php
	header ( "Content-type: text/html; charset=utf8" );
	include_once("../conn/conn.php");
	$id=$_GET[id];
	//below delete the resources in this course
	$sql_file=mysql_query("select * from tb_coursefile where id=".$id."");
	$info_file=mysql_fetch_array($sql_file);
	//delete the file
	$path_file=".".$info_file[file];
	if(file_exists($path_file))
	{
		if(unlink($path_file))
		{
			echo "The resource '".$info_file[title]."' is deleted successfully!<br />";	
		}
		else
		{
			echo "The resource '".$info_file[title]."' could not be deleted!Please try in server manually!<br />";	
		}
	}
	
	if(mysql_query("delete from tb_coursefile where id='".$_GET[id]."'",$conn)){
	  echo "<script>alert('Delete coursefile successfully!');history.back();</script>";
	}else{
	   echo "<script>alert('Failed to delete the coursefile!');history.back();</script>";
	}
?>