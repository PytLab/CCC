<?php
    header ( "Content-type: text/html; charset=utf8" ); 
    include_once("../conn/conn.php");
    include_once("./chk_upload.php");
    date_default_timezone_set(PRC);
    $name=$_POST["name"];
    $info=$_POST["info"];
    $type=$_POST["type"];
    $truename=$_POST["truename"];
    $addtime=date("Y-m-j H:i:s");

    if($_FILES["photo"]["name"]==true)
    {         
        $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  
        if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" & $photo_name!=".png" )
    	{ 
            echo "<script>alert('Format is not correct!!');history.back();</script>";
        }

        else
    	{
            $paths1=$name.strstr($_FILES["photo"]["name"],".");                                
            $photos="../graph/People/".$paths1;  //相对此文件的路径                                                
    	    $photo="graph/People/".$paths1;  //存到数据库的路径(显示路径)
            move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);
            /*检测文件上传结果*/
            chk_upload($_FILES["photo"]["error"]);                
        }
    }

    $query=mysql_query("insert into tb_people(name,truename,Info,people_type,photo,createtime) values('$name','$truename','$info','$type','$photo','$addtime')",$conn);
    if($query==true)
    { 
        echo $_FILES['photo']['error']."<script>alert('People add succesfully!');history.back();</script>";
    }
    else
    {  
        echo "<script>alert('Failed to add people!');history.back();</script>";
    }
?>