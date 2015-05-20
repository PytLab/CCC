<?php
	header ( "Content-type: text/html; charset=utf8" ); 
	include_once("../conn/conn.php");
	$id=$_GET[id];
	$sql=mysql_query("select * from tb_course where id=".$id."");
	$info=mysql_fetch_array($sql);
	//below delete the pic of course
	if($info[pic]!="")
	{
		$path_pic="../".$info[pic];
		if(unlink($path_pic))
		{
			echo "The course photo was deleted successfully!";
		}
		else
		{
			echo "The course photo could not be deleted. Please try in the server manually!";	
		}
	}
	//below delete the resources in this course
	$sql_file=mysql_query("select * from tb_coursefile where courseid=".$id."");
	while($info_file=mysql_fetch_array($sql_file))
	{
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
		//below delete the data of coursefile in db
		if(mysql_query("delete from tb_coursefile where id=".$info_file[id].""))
		{
			echo "The data in database is deleted successfully!<br />";
		}
		else
		{
			echo "Failed to delete the data in database!<br />";	
		}
	}
	//delete the dir of this course
	$dir_path="../upfile/coursefile/".$info[name];		//the dir of this course
	if(is_dir($dir_path))
	{
		if(rmdir($dir_path))
		{
			echo "Delete the".$dir_path."successfully!<br />";
		}
		else
		{
			echo "Failed to delete".$dir_path."!Please try manually in server!<br />";	
		}
	}
	//remove the data of the course in database
	if(mysql_query("delete from tb_course where id='".$_GET[id]."'",$conn)){
	  echo "<script>alert('Delete course successfully!');history.back();</script>";
	}else{
	   echo "<script>alert('Failed to delete course!');history.back();</script>";
	}
?>