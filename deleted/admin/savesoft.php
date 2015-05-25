<?php
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
include_once("../conn/conn.php");
$softname=$_POST[softname];
$content=$_POST[content];
$createtime=date("Y-m-j H:i:s");


if(is_dir("./soft_image")==false)
 {
    mkdir("./soft_image");
 }
if(is_dir("./soft")==false)
 {
    mkdir("./soft");
 }
 
$link=date("YmjHis");
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["address"]["name"],".");
$path_photo=$link.mt_rand(1000000,9999999).strstr($_FILES["photo"]["name"],".");
$address="./soft/".$path;
$photo="./soft_image/".$path_photo;
move_uploaded_file($_FILES["address"]["tmp_name"],$address);
move_uploaded_file($_FILES["photo"]["tmp_name"],$photo);
$address="../admin/soft/".$path;
$photo="../admin/soft_image/".$path_photo;
$query=mysql_query("insert into tb_soft(softname,content,addtime,address,photo,click) values('$softname','$content','$createtime','$address','$photo','0')",$conn);

if($query){
 echo "<script>alert('试用软件添加成功！');history.back();</script>";

}else{

 echo "<script>alert('试用软件添加失败！');history.back();</script>";

}


?>