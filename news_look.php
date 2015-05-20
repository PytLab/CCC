<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>Homepage - CCC</title>
<style>
	* { margin:0; padding:0;  word-wrap: break-word; }
	#news_list_title{
		width:770px;
  		height: 110px;
		
  		margin: 0px 0 10px 0;
  		padding: 0px 0 0 0px ;
  		background:url(graph/HomePage/ttl_h3_news.gif) no-repeat;
  		 
		font-weight: bold;
  		float: left;
	}
	#news_content{
		width: 720px;
  		float: left;
		line-height:25px;
	}
	#news_paper{
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
	#news_date{
		color:#5E5E5E;
		font-size:14px;
		margin-bottom:10px;
	}
	#news_paper img{
		max-width:720px;
		width:auto;
		margin:0 auto;	
		margin-bottom:10px;
		margin-top:10px;
	}
	#news_title{
		color:#366;
		font-weight:600;
		font-size:18px;
		margin-bottom:10px;
	}
</style>
</head>
        

<body>
<?php
				include_once("top_index.php");
			?>
<div id="body">
			
        	<div id="body_left">
            	<div id="news_list_title"></div>
            	<div id="news_paper">
						<?php
							$id=$_GET[id];
                            $sql_news=mysql_query("select * from tb_news where id='".$id."'",$conn);
                            $info_news=mysql_fetch_array($sql_news);//获取highlights数据库信息
                        ?>
                        <div id="news_title">
                            <?php
                                echo $info_news[title];
                            ?>
                        </div>
                        <div id="news_date">
                        	<?php
                            	echo "Date&nbsp;:&nbsp;".$info_news[createtime];
							?>
                        </div>
                        <div id="news_content">
                            <?php 
                                echo $info_news[content];
                            ?>
                            
                        </div>
                    </div>
            </div>
            <div id="body_right">
              <h3>Scientific Highlights</h3>
                <?php include_once("show_highlights.php");?>
                <p class="more">
                	<a href="highlights_list.php">More Hightlights</a>
                </p>
                <h3>News Items</h3>
                <?php include_once("show_news2.php");?>
                <p class="more">
                	<a href="news_list.php">More Details</a>
                </p>
                
                <h3>Publications</h3>
                <p class="text">
                	<?php include_once("show_affiches.php");?>
                </p>
                
                <p class="more">
                	<a href="publications_list.php">More Publications</a>
                </p>
                
                <h3>Contact Us</h3>
                <p class="text"></p>
                <p class="more">
                	<a href="#">Contact Details</a>
                </p>
            </div>
        </div>
        <div id="foot">
        	<?php include_once("footer.php");?>
    </div>
    </div>
    
</body>
</html>