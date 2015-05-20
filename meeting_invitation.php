<?php date_default_timezone_set(PRC);  include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	#inside_main{
		width:835px;
		
	}
	#meeting_pic{
		margin:0 auto;
		width:830px;
		height:460px;
		margin-top:15px;
		margin-bottom:10px;
		-webkit-box-shadow: #666 0px 0px  5px ;
		-moz-box-shadow: #666 0px 0px 5px ;
		box-shadow: #666 0px 0px 5px ;
		
	}
	#meeting_pic img{
		width:820px;
		height:450px;
		margin:5px 5px 5px 5px;
	}
	#invit{
		width:825px;
		min-height:200px;
		height:auto;
		background-color:#E3E3C8;
		float:left;
		margin:15px 10px 10px 5px ;
		-webkit-box-shadow: #666 0px 0px  5px ;
		-moz-box-shadow: #666 0px 0px 5px ;
		box-shadow: #666 0px 0px 5px ;
	}
	#invit_ttl{
		width:790px;
		min-height:20px;
		height:auto;
		padding:20px 0px 10px 0px;
		/*background-color:#CCC;*/
		text-align:center;
		color:#AB5656;
		font-size:24px;
		margin:0 auto;
		border-bottom:1px #ACACAC solid;
		
	}
	#invit_contnt{
		margin:0 auto;
		width:790px;
		min-height:150px;
		height:auto;
		padding:20px 30px 40px 30px;
		text-align:left;
		color:#002C57;
		/*background-color:#09C;*/
	}
</style>
</head>

<body>
	<div id="inside_main">
    	<?php
        	$sql=mysql_query("select * from tb_meeting order by createtime desc limit 1");
			$info=mysql_fetch_array($sql);
			if($info[pic]!="")
			{
		?>
        <div id="meeting_pic">
        	<img src="<?php echo $info[pic];?>" />
        </div>
        <?php
			}
		?>
        <div id="invit">
        	<div id="invit_ttl">
            	<?php echo $info[name];?>
            </div>
            <div id="invit_contnt">
            	<?php echo $info[invitation];?>
            </div>
        </div>
    </div>
</body>
</html>