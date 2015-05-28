<?php
	$conn=mysql_connect("localhost", "root", "5098");     //链接数据库服务器
	mysql_select_db("db_community",$conn);               //链接数据库
	mysql_query("set names 'utf8'");                     //对数据库中的编码格式进行转换，避免出现乱码
?>
