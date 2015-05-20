<?php
header ( "Content-type: text/html; charset=utf8" ); 
include_once("../conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_people where id=".$id."");
$info=mysql_fetch_array($sql);
$path="../".$info[photo];
if(unlink($path))
{
	echo "The people photo was deleted successfully!";
}
else
{
	echo "The photo could not be deleted. Please try in the server manually!";	
}
if(mysql_query("delete from tb_people where id='".$_GET[id]."'",$conn)){
  echo "<script>alert('Delete People successfully');history.back();</script>";
}else{
   echo "<script>alert('Failed to delete People!');history.back();</script>";
}
?>