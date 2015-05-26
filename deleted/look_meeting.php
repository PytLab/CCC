<?php
	include_once("top_index.php");
	$id=$_GET[id];
	$sql=mysql_query("select * from tb_meeting where id =".$id."");
	$info=mysql_fetch_array($sql);//get the one's info from db
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $info[name]."-CCC";?></title>
<style>
	body{
		background-image:url(graph/Blog/grey.jpg);
		background-repeat:repeat;
	}
	:hover{
		-webkit-transition: 0.5s;
		-moz-transition: 0.5s;
		-o-transition: 0.5s;
		transition:  0.5s;
	}
	#meeting_main{
		margin:0 auto;
		width:950px;
		height:auto;
		margin-top:0px;
		margin-bottom:20px;
		padding-bottom:20px;
		background-color:#FFF;
		-webkit-box-shadow: #999 0px 0px  5px ;
		-moz-box-shadow: #999 0px 0px 5px ;
		box-shadow: #999 0px 0px 5px ;
		display:table;
	}
	#meeting_title{
		width:900px;
		margin:0 auto;
		height:110px;
		background-image:url(graph/meeting/ttl/meeting_ttl.gif);
	}
	#meeting_pic{
		margin:0 auto;
		width:910px;
		height:560px;
		margin-top:15px;
		margin-bottom:20px;
		-webkit-box-shadow: #666 0px 0px  5px ;
		-moz-box-shadow: #666 0px 0px 5px ;
		box-shadow: #666 0px 0px 5px ;
	}
	#meeting_pic img{
		width:900px;
		height:550px;
		margin:5px 5px 5px 5px;
	}
	#program{
		width:600px;
		min-height:400px;
		height:auto;
		background-color:#f9f9f9;
		float:left;
		margin:0px 10px 10px 20px ;
		-webkit-box-shadow: #666 0px 0px  5px ;
		-moz-box-shadow: #666 0px 0px 5px ;
		box-shadow: #666 0px 0px 5px ;
	}
	#prog_ttl{
		width:560px;
		min-height:20px;
		height:auto;
		padding:20px 0px 10px 0px;
		/*background-color:#CCC;*/
		text-align:center;
		color:#AB5656;
		font-size:24px;
		margin:0 auto;
		border-bottom:1px #CCC solid;
		
	}
	#prog_contnt{
		margin:0 auto;
		width:500px;
		min-height:350px;
		height:auto;
		padding:20px 30px 40px 30px;
		text-align:left;
		color:#002C57;
		/*background-color:#09C;*/
	}
	#future{
		width:290px;
		min-height:400px;
		height:auto;
		background-color:#DBDBB7;
		float:right;
		margin:0px 20px 10px 10px;
		-webkit-box-shadow: #000 0px 0px  5px ;
		-moz-box-shadow: #000 0px 0px 5px ;
		box-shadow: #000 0px 0px 5px ;
	}
	#fu_ttl{
		width:270px;
		margin:0 auto;
		height:20px;
		text-align:center;
		padding:20px 0px 10px 0px;
		border-bottom:1px #8A4500 solid;
		color:#643200;
	}
	#fu_contnt{
		width:240px;
		margin:0px 20px 30px 35px;
		height:auto;
		text-align:left;
		padding:20px 0px 10px 0px;
		color:#643200;
		line-height:25px;
		/*background-color:#099;*/
	}
	#fu_contnt a{
		text-decoration:none;
	}
	#fu_contnt a:hover{
		color:#630;
	}
	#contact{
		width:290px;
		height:50px;
		float:right;
		
		margin:10px 20px 10px 10px;
		
	}
	#contact a{
		display:block;
		width:290px;
		height:30px;
		color:#ffffff;
		font-size:24px;
		font-weight:700;
		text-align:center;
		padding:20px 0px;
		text-decoration:none;
		background-color:#06F;
		-webkit-box-shadow: #666 0px 0px  5px ;
		-moz-box-shadow: #6660px 0px 5px ;
		box-shadow: #666 0px 0px 5px ;
	}
	#contact a:hover{
		-webkit-box-shadow: #000 0px 0px  15px ;
		-moz-box-shadow: #000 0px 0px 15px ;
		box-shadow: #000 0px 0px 15px ;
		background-color:#0CF;
	}
</style>
</head>

<body>
	<div id="meeting_main">
    	<div id="meeting_title"></div>
        <div id="meeting_pic">
        	<img src="<?php echo $info[pic];?>" />
        </div>
        <div id="program">
        	<div id="prog_ttl">
            	<?php echo $info[name];?>
            </div>
            <div id="prog_contnt">
            	<?php echo $info[program];?>
            </div>
        </div>
        <div id="future">
        	<div id="fu_ttl">
            	Meeting Date & Info
            </div>
            <div id="fu_contnt">
            	<ul>
                	<?php
                    	$sql_fu=mysql_query("select * from tb_meeting order by createtime limit 6");
						$info_fu=mysql_fetch_array($sql_fu);
						if ($info_fu!="")
						{
							do
							{
					?>
                    <li>
                    	<?php echo "<strong>".$info_fu[name]."</strong>---".$info_fu[date]."<a href='look_meeting.php?id=".$info_fu[id]."'>&nbsp;--></a>";?>
                    </li>
                    <?php
							}while($info_fu=mysql_fetch_array($sql_fu));
						}
						else
						{
							echo "No Meeting!";
						}
					?>
                </ul>
            </div>
        </div>
        <div id="contact">
        	<a href="#">
            	Contact Us->
            </a>
        </div>
</body>
</html>