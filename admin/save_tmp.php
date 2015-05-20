
<?php

if($_FILES["photo"]["name"]==true){         //上传图片,判断文件是否存在
	echo "$_FILES[photo][name]".$_FILES["photo"]["name"]."<br />";
	echo  	"$_FILES[photo][tmp_name]".$_FILES["photo"]["tmp_name"]."<br />";	
  $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  //获取图片的后缀名并转换为小写
  
    //$paths1=$name.strstr($_FILES["photo"]["name"],".");                                //创建图片名称    
    $photos="../graph/People/".$_FILES["photo"]["name"];
	                                                       //创建图片的存储路径
	echo $photos."<br />";
    move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);                      //将图片存储到指定的文件夹下
	echo $_FILES['photo']['error'];
  }
?>