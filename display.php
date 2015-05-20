显示图片（disimage.php）:
<?php
    mysql_connect("localhost","root","5098");
    mysql_select_db("test");
    //显示最新插入的那张图片
    $result=mysql_query("select image from images where id=(select max(id) from images)");  
    $row=mysql_fetch_object($result);
    header("Content-Type:image/pjpeg");  
    echo $row->image;
    mysql_close();
?>