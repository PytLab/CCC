<?php
	include_once("top_index.php");
?><head>
<title><?php echo $highlights;?></title>
<style>
	* { margin:0; padding:0; word-wrap: break-word; }
	#highlights_content{
		width: 770px;
  		float: left;
	}
	#highlights_content h3{
		width:770px;
  		height: 110px;
  		margin: 0px 0 0 0;
  		padding: 0px 0 0 0px ;
  		background:url(<?php echo $sci_highlight;?>) no-repeat;
		font-weight: bold;
  		float: left;
	}
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
        


<div id="body">
			<!--左侧-->
        	<div id="body_left">
            	<div id="highlights_content">
                	<h3></h3>
                    <div id="highlights_paper">
						<?php
							$id=$_GET[id];
                            $sql_highlights=mysql_query("select * from tb_highlights where id='".$id."'",$conn);
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