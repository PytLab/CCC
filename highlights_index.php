<?php date_default_timezone_set(PRC);include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style>
        #highlights{
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
        #highlights img{
            float:none;
            max-width:720px;
            width:auto;
            margin:0 auto;	
            margin-bottom:10px;
        }
        #highlights_title{
            color:#366;
            font-weight:600;
            font-size:18px;
            margin-bottom:10px;
        }
        .more_highlights{
            float:right;
            text-decoration:none;
            color:#376F6F;	
            margin-top:15px;
            font-size:13px;
        }
        .more_highlights a{
            text-decoration:none;
        }
        .more_highlights a:hover{
            color:#0CC;
        }
    </style>
</head>

<body>
	<div id="highlights">
    	<?php
        	$sql_highlights=mysql_query("select * from tb_highlights order by createtime desc limit 1",$conn);
			$info_highlights=mysql_fetch_array($sql_highlights);//获取highlights数据库信息
		?>
    	<div id="highlights_pic">
        	<?php
                $preg = "/<img src=\"(.+?)\".*?>/";
				preg_match_all($preg,$info_highlights[content],$new_content);
				echo $new_content[0][0];//获取第一个图片						
			?>
			
        </div>
		<div id="highlights_title">
        	<?php
            	echo $info_highlights[title];
			?>
        </div>
        <div id="hightligh_content">
			<?php 
				echo preg_replace("/<img.*?>/si","",cut_str($info_highlights[content],850,0,'UTF-8'));
				/*if(strlen($info_highlights[content])>850)
				{
					echo " ......";
				}*/
			?>
            <p class="more_highlights">
               <a href="highlightsdetail">More Details</a>
            </p>
		</div>
    </div>
</body>
</html>