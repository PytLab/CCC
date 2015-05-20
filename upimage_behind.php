<?php 
    //向数据库中插入图片
    $imgfile=$_FILES['imgfile'];
    $submitbtn=$_POST['submitbtn'];
    if($submitbtn=='OK' and is_array($imgfile))
     {
        $name=$imgfile['name'];  //取得图片名称
        $type=$imgfile['type']; //取得图片类型
        $size=$imgfile['size'];  //取得图片长度
        $tmpfile=$imgfile['tmp_name'];  //图片上传上来到临时文件的路径
        if($tmpfile and is_uploaded_file($tmpfile))  //判断上传文件是否为空，文件是不是上传的文件
         {
            //读取图片流
            $file=fopen($tmpfile,"rb");
            $imgdata=bin2hex(fread($file,$size));  //bin2hex()将二进制数据转换成十六进制表示
            fclose($file);
            
            $mysqli=mysql_connect("localhost","root","5098");  //连接数据库函数
            mysql_select_db("db_community");  //选择数据库
             //插入出数据库语句，图片数据前要加上0x，用于表示16进制数
            if(mysql_query("insert into images(name,type,image) values('".$name."','".$type."',0x".$imgdata.")"))
                echo "<center>插入成功！<br><br><a href='disimage.php'>显示图片</a></center>";
            else
                echo "<center>插入失败！</center>";
            mysql_close();
         }
        else 
            echo "<center>请先选择图片！<br><br><a href='image.html'>点此返回</a></center>";
     }    
    else 
        echo "<center>请先选择图片！<br><br><a href='image.html'>点此返回</a></center>";
?>
