<?php
    header ( "Content-type: text/html; charset=utf8" ); 
    include_once("../conn/conn.php");
    include_once("./chk_upload.php");
    date_default_timezone_set(PRC);
    $name=$_POST[name];
    $pic=$_POST[photo];
    $id=$_POST[id];
    $addtime=date("Y-m-j H:i:s");

    if($_FILES["photo"]["name"]==true)
    {         
        $photo_name=strtolower(stristr($_FILES["photo"]["name"],"."));                  
        if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" & $photo_name!=".png")
        { 
            echo "<script>alert('Format is not correct!');history.back();</script>";
        }
        else
        {
            $paths1=$name.strstr($_FILES["photo"]["name"],".");                               
            $photos="../graph/meeting/accommodation/".$paths1;                                                       
            $photo="graph/meeting/accommodation/".$paths1;
            move_uploaded_file($_FILES["photo"]["tmp_name"],$photos);
            /*检测文件上传结果*/
            chk_upload($_FILES["photo"]["error"]);                       
        }
    }
    if($_FILES["photo"]["name"]==true)
    {
        $query=mysql_query("update tb_hotel set name='$name',pic='$photo' where id=".$id."",$conn);
        if($query==true)
            echo "<script>alert('Hotel change successfully!');history.back();</script>";
        else
            echo "<script>alert('Failed!');history.back();</script>";
    }
    else
    {
        $query=mysql_query("update tb_hotel set name='$name' where id=".$id."",$conn);
        if($query==true)
           echo "<script>alert('Hotel change successfully!');history.back();</script>";
        else 
           echo "<script>alert('Failed!');history.back();</script>";    
    }


?>