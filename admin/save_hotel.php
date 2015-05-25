<?php
    header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
    include_once("../conn/conn.php");
    include_once("./chk_upload.php");
    date_default_timezone_set(PRC);
    $name=$_POST[name];
    $addtime=date("Y-m-j H:i:s");

    if($_FILES["photo"]["name"]==true)  //上传图片,判断文件是否存在
    {         
        $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  //获取图片的后缀名并转换为小写
        if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" & $photo_name!=".png")  //判断文件和图片的格式是否符合要求
            echo "<script>alert('上传的图片格式不符合要求!');history.back();</script>";
        else
        {
            $paths1=$name.strstr($_FILES["photo"]["name"],".");  //创建图片名称    
            $photos="../graph/meeting/accommodation/".$paths1;   //创建图片的存储路径
            $photo="graph/meeting/accommodation/".$paths1;       //存入数据库的图片的显示路径
            move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);  //将图片存储到指定的文件夹下
            /*检测文件上传结果*/
            chk_upload($_FILES["photo"]["error"]);
        }
    }

    $query=mysql_query("insert into tb_hotel(name,pic,createtime) values('$name','$photo','$addtime')",$conn);
    if($query==true) 
        echo "<script>alert('Hotel添加成功！');history.back();</script>";
    else
        echo "<script>alert('Hotel添加失败！');history.back();</script>";
?>