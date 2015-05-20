<?php
	include_once("top_index.php");
?>
<head>
<title>Homepage - CCC</title>
<style>
	* { margin:0; padding:0;word-wrap: break-word;}
	#highlights_list_title{
		width:770px;
  		height: 110px;
  		margin: 0px 0 0 0;
  		padding: 0px 0 0 0px ;
  		background:url(./graph/HomePage/ttl_h3_forume.gif) no-repeat;
  		 
		font-weight: bold;
  		float: left;
	}
</style>
</head>
        
<body>

<div id="body">
			<!--左侧-->
        	<div id="body_left">
            	<div id="highlights_list_title"></div>
            	<?php
                	include_once("highlights_in_list.php");
				?>
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
</body>
</html>