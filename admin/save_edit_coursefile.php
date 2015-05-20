<?php
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
include_once("../conn/conn.php");
$filename=$_POST[filename];
$content=$_POST[content];
$createtime=date("Y-m-j H:i:s");
$id=$_POST[id];
$file=$_POST[file];

$query=mysql_query("update tb_coursefile set title='$filename', content='$content',file='$file',edittime='$createtime' where id=".$id."",$conn);

if($query){
 echo "<script>alert('课程资源修改成功！');history.back();</script>";

}else{

 echo "<script>alert('课程资修改加失败！');history.back();</script>";

}


?>