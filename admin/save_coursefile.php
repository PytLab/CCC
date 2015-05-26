<?php
    date_default_timezone_set(PRC);
    header ( "Content-type: text/html; charset=utf8" ); //设置文件编码格式
    include_once("../conn/conn.php");
    include_once("./chk_upload.php");
    $filename=$_POST[filename];
    $content=$_POST[content];
    $createtime=date("Y-m-j H:i:s");
    $coursename=$_POST[coursename];
    $courseid=$_POST[courseid];
    if(is_dir("../upfile/coursefile/".$coursename."")==false)
        {
            mkdir("../upfile/coursefile/".$coursename."");
        }
     
    $link=date("YmjHis");
    //$path=$filename.strrchr($_FILES["address"]["name"],".");//rename file
    $suffix=strrchr($_FILES["address"]["name"],".");
    $address="../upfile/coursefile/".$coursename."/".$_FILES["address"]["name"];  //直接以原文件名为上传文件的名称

    move_uploaded_file($_FILES["address"]["tmp_name"],$address);
    /*检测文件上传结果*/
    chk_upload($_FILES["address"]["error"]); 

    $address_in_db="./upfile/coursefile/".$coursename."/".$_FILES["address"]["name"];

    $query=mysql_query("insert into tb_coursefile(title,content,createtime,file,courseid,suffix) values('$filename','$content','$createtime','$address_in_db','$courseid','$suffix')",$conn);

    if($query)
        echo "<script>alert('课程资源添加成功！');history.back();</script>";
    else
        echo "<script>alert('课程资源添加失败！');history.back();</script>";
?>