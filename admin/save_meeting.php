<?php
header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
include_once("../conn/conn.php");
date_default_timezone_set(PRC);
$name=$_POST[name];
$date=$_POST[date];
$addtime=date("Y-m-j H:i:s");
$hotel=implode($_POST[hotel]);
if($_FILES["photo"]["name"]==true){         //上传图片,判断文件是否存在
  $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  //获取图片的后缀名并转换为小写
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" ){ //判断文件和图片的格式是否符合要求
    echo "<script>alert('上传的图片格式不符合要求!');history.back();</script>";
  }

  else{
    $paths1=$name."-".$date.strstr($_FILES["photo"]["name"],".");                                //创建图片名称    
    $photos="../graph/meeting/".$paths1;                                                       //创建图片的存储路径
	$photo="graph/meeting/".$paths1;//存入数据库的图片的显示路径
    move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);                      //将图片存储到指定的文件夹下
  }
}
$query=mysql_query("insert into tb_meeting(name,date,pic,hotel,createtime) values('$name','$date','$photo','$hotel','$addtime')",$conn);
 if($query==true){ 
   echo "<script>alert('Meeting添加成功！');history.back();</script>";

}else{
   
   echo "<script>alert('Meeting添加失败！');history.back();</script>";

}


?>