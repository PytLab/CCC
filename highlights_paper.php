<?php date_default_timezone_set(PRC); session_start(); include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
	#highlights_paper{
		background-color:#F9F9F9;
		width:720px;
		float:left;
		margin-top:20px;
		margin-left:0px;
		padding:10px 25px 10px 25px;
		line-height:20px;
		-webkit-box-shadow: #999 0px 0px 2px;
		-moz-box-shadow: #999 0px 0px 2px;
		box-shadow: #999 0px 0px 2px;
		color:#444;
	}	
	#highlights_paper img{
		max-width:720px;
		width:auto;
		margin:0 auto;	
		margin-bottom:10px;
		margin-top:10px;
	}
	#highlights_title{
		color:#366;
		font-weight:600;
		font-size:18px;
		margin-bottom:10px;
	}
</style>
</head>

<body>
	<div id="highlights_paper">
    	<?php
        	$sql_highlights=mysql_query("select * from tb_highlights order by createtime desc limit 1",$conn);
			$info_highlights=mysql_fetch_array($sql_highlights);//获取highlights数据库信息
		?>
		<div id="highlights_title">
        	<?php
            	echo $info_highlights[title];
			?>
        </div>
        <div id="hightligh_content">
			<?php 
				echo $info_highlights[content];
			?>
            
		</div>
    </div>
</body>
</html>