<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Homepage - CCC</title>
    <style>
    	* { margin:0; padding:0; word-wrap: break-word; }		
    </style>
    <link href="./css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	include_once("top_index_ch.php");
?>
<div id="body">
			<!--左侧-->
        	<div id="body_left">
            	
            	<div id="news">
                	
						<?php
                             include("photo_change.php");//include_once("photo_change.php");
                        ?> 
                
                	<!--<h3></h3>-->
                    <div class="area_news">
      					
                        <div id="news_list" style="word-wrap:break-word;">
        					<p>
                            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Cambridge University Centre for Computational Chemistry groups theoretically-minded members of the Cambridge Department of Chemistry in premises on the recently refurbished third floor of the Department. Around 50 members, comprising staff, research fellows, postdoctoral associates, postgraduate students, and visiting scientists from all over the world, work on many aspects of theoretical and computational chemistry.
							</p>
                        </div>	
                </div>
                <div id="forume">
                	<h3></h3>
                    <?php include_once("highlights_index.php");?>
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
                	<?php include_once("show_affiches2.php");?>
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
        
    </div>
    <div id="foot">
        	<?php include_once("footer.php");?>
    </div>
</body>
</html>
