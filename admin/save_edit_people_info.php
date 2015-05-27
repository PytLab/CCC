<?php
    header ( "Content-type: text/html; charset=utf8" ); 
    include_once("../conn/conn.php");
    include_once("./chk_upload.php");
    date_default_timezone_set(PRC);
    $name=$_POST[name];
    $info=$_POST[info];
    $truename=$_POST[truename];
    $type=$_POST[type];
    $addtime=date("Y-m-j H:i:s");
    $id=$_POST[peopleid];

    if($_FILES["photo"]["name"]==true){         
        $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  
        if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" & $photo_name!=".png")
            echo "<script>alert('Format is not correct!');history.back();</script>";
        else
        {
            $paths1=$truename.strstr($_FILES["photo"]["name"],".");                               
            $photos="../graph/People/".$paths1;                                                       
            $photo="./graph/People/".$paths1;
            move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);
            /*检测文件上传结果*/
            chk_upload($_FILES["photo"]["error"]);                     
        }
    }
    if($_FILES["photo"]["name"]==true)
    {
        $query=mysql_query("update tb_people set name='$name',truename='$truename',people_type='$type',edittime='$addtime',photo='$photo' where id='".$id."'",$conn);
        if($query==true)
            echo "<script>alert('People_Info修改成功！');history.back();</script>";
        else
            echo "<script>alert('People_Info修改失败！');history.back();</script>";
    }
    else
    {
        $query=mysql_query("update tb_people set name='$name',truename='$truename',people_type='$type',edittime='$addtime' where id='".$id."'",$conn);
        if($query==true)
            echo "<script>alert('People_Info修改成功！');history.back();</script>";
        else
            echo "<script>alert('People_Info修改失败！');history.back();</script>";
    }
?>