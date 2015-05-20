<?php
session_start();
include_once("../../conn/conn.php");
include_once("../../function.php"); 
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='../../index.php';</script>";
  exit;
 }
 
 	$id=$_GET[id];
 	$sql=mysql_query("select * from tb_meeting where id='".$id."'",$conn);
    $info=mysql_fetch_array($sql);//获取该博客的信息
	$name=$info[name];
	$invitation=$info[invitation];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<meta name="generator" content="" />
<meta name="author" content="" />
<style>
	body{
		margin:0;
		background-image:url(../graph/grey.jpg);
		font:16px "微软雅黑";
		color:#000;
		padding-bottom:20px;
	}
	#news_title{
		margin-left:35px;
		color:#999;
		font:15px "微软雅黑";
		margin-top:30px;
		
	}
	#subject{
		border-width:0px;
		height:40px;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;		
		border-radius: 4px;
		-webkit-box-shadow: #d6dadd 0px 0px 5px;
		-moz-box-shadow: #d6dadd 0px 0px 5px;
		box-shadow: #d6dadd 0px 0px 5px;
		behavior: url(/PIE.htc);
		margin-bottom:30px;
		width:730px;
		margin-top:0px;
	}
	#news_top{
		width:800px;
		height:200px;
		margin:0 auto;
		margin-bottom:20px;
		background-color:#666;
		-webkit-box-shadow: #999 0px 0px 5px;
		-moz-box-shadow: #999 0px 0px 5px;
		box-shadow: #999 0px 0px 5px;
		behavior: url(/PIE.htc);
	}
	#news_body{
		margin-top:20px;
		margin-bottom:20px;
		width:800px;
		height:850px;
		background-color:#F7F7F7;
		margin:0 auto;
		-webkit-box-shadow: #999 0px 0px 5px;
		-moz-box-shadow: #999 0px 0px 5px;
		box-shadow: #999 0px 0px 5px;
		behavior: url(/PIE.htc);
		display:table;
	}
	#right_top{
	width:196px;
	height:40px;
	bottom:0px;
	left:0px;
	position:fixed;
	_position:absolute;
	line-height:30px;
	text-align:center;
	cursor:pointer;
	/*background-color:#FFF;*/
	}
	#return_index{
		float:right;
		display:block;
		width:120px;
		height:33px;
		background:url(../../graph/Blog/return_blog_index2.gif);
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		font-size:14px;
		color:#999;
		filter: 		progid:DXImageTransform.Microsoft.Shadow(color=#CACACA,direction=135,strength=4) alpha(opacity=45); -moz-opacity: 0.30; opacity: 0.3; -khtml-opacity: 0.30;
	}
	#return_index:hover{
		filter: 		progid:DXImageTransform.Microsoft.Shadow(color=#CACACA,direction=135,strength=4) alpha(opacity=85); -moz-opacity: 0.80; opacity: 0.8; -khtml-opacity: 0.85;
	}
	select{
		color:#999;
		font-family:Microsoft YaHei; 
		border:1px #e8e8e8 solid;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		height:40px;
		padding-top:10px;
		padding-bottom:5px;
		width:150px;
		-webkit-box-shadow: #d6dadd 0px 0px 5px;
		-moz-box-shadow: #d6dadd 0px 0px 5px;
		box-shadow: #d6dadd 0px 0px 5px;
	}
</style>


</head>
<body>
   <div id="news_top"></div>
   <div id="news_body">
   		<div id="editor">
        	<p>&nbsp;</p>
            <center><h2></h2></center>
<script language="javaScript" type="text/javascript">
<!--
var maxWord = 50000;    //限定字数
var eXSize = 700;       //编辑器宽度，最小宽度限588px
var formU = 'save_edit.php';  //表单执行文件
var contT = '<?php echo addslashes($invitation); ?>';         //待编辑文本
var formT='<div id="news_title"><p style="color:#999;">Meeting Name</p><input name="subject" id="subject" value="<?php echo addslashes($name); ?>" type="text"  maxlength="180"/><input type="hidden" name="id" value="<?php echo $id;?>" /><p style="color:#999;">Invitaion</p></div>';
var path = '';          //相对路径
document.write('<'+'sc'+'ript language="javascript" src="js/editor.js?'+new Date().getTime()+'" type="text/javascript"></'+'sc'+'ript>');
-->
</script>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
</center>
        </div>
        </div>
    </div>
    <div id="right_top">
    	<span><a id="return_index" title="返回管理员首页" href="../default.php"></a></span>
    </div>
    <script type="text/javascript">
			var get_Div=document.getElementById('right_top');
			function get_WinSize(){
			var win_Height=window.innerHeight,win_Width=window.innerWidth;
			if(document.documentElement.clientHeight){
			win_Height=document.documentElement.clientHeight;
			win_Width=document.documentElement.clientWidth;
			}else{
			win_Height=document.body.clientHeight;
			win_Width=document.body.clientWidth;
			}
			var height2=win_Height-50;
			var width2=win_Width-337;
			get_Div.style.bottom=height2+"px";
			get_Div.style.left=width2+"px";
			}
			get_WinSize();
			window.onresize=get_WinSize;
	  </script>
</body>
</html>