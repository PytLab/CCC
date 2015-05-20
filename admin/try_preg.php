<?php
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
include_once("../conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_highlights where id=".$id."");
$info=mysql_fetch_array($sql);
$preg = "/<img src=\"(.+?)\".*?>/";
preg_match_all($preg,$info[content],$new_content);
$i=0;
while($new_content[1][$i])
{
	//echo $new_content[1][$i]."<br />";
	echo strrchr($new_content[1][$i],"/")."<br />";
	$i++;
}
//print_r($new_content);
?>