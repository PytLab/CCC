<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>list</title>

</head>

<body>
	<div id="news_2">
    
        <ul>
        <?php
    		include_once("./conn/conn.php");
			$sql=mysql_query("select * from tb_news order by createtime desc limit 6",$conn);
			$info=mysql_fetch_array($sql);//获取新闻表中的所有新闻信息
			if($info!=false){
			do{
		?>
        	<li>
            	<span class="news_type">
                	<?php
                    	if($info[type]==0)
						{
							echo '<a href="#">[学术新闻]</a>';	
						}
						else if($info[type]==1)
						{
							echo '<a href="#">[小组新闻]</a>';	
						}
						else if($info[type]==2)
						{
							echo '<a href="#">[生活新闻]</a>';	
						}
					?>
                 </span>
                 <span class="news_title">
                	<a href="<?php echo $info[link];?>" >
						<?php echo $info[title];?>
					</a>
                    
                </span>
                <span class="news_creatime">[<?php echo $info[createtime];?>]</span>
            </li>
        <?php
			}while($info=mysql_fetch_array($sql));
			}
			else
			{
				echo "暂无新闻";	
			}
		?>
        </ul>
    </div>
</body>
</html>
