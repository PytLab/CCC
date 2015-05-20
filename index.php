<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	include_once("top_index.php");
?>
<head>
	<!--<title>Homepage - CCC</title>-->
    <title><?php echo $title;?></title>
    <style>
    	* { margin:0; padding:0; word-wrap: break-word; }		
    </style>
    <link href="./css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="body">
        <!--左侧-->
        <div id="body_left">
            	
            <div id="news">
				<?php
                     include("photo_change.php");//include_once("photo_change.php");
                ?> 
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
        <!--右侧-->
        <?php include_once("body_right.php");?> 
    </div>
    
    <div id="foot">
        <?php include_once("footer.php");?>
    </div>
</body>
</html>
