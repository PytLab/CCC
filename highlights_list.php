<?php
	include_once("top_index.php");
?>
<head>
    <title><?php echo $high_ttl;?></title>
    <style>
        * { margin:0; padding:0;word-wrap: break-word;}
        #highlights_list_title{
            width:770px;
            height: 110px;
            margin: 0px 0 0 0;
            padding: 0px 0 0 0px ;
            background:url(<?php echo $sci_highlight;?>) no-repeat;
            font-weight: bold;
            float: left;
        }
    </style>
</head>

<html>        
    <body>
        <div id="body">
			<!--左侧-->
        	<div id="body_left">
            	<div id="highlights_list_title"></div>
            	<?php include_once("highlights_in_list.php");?>
            </div>
            <!--右侧-->
            <?php include_once("body_right.php");?>
        </div>
        <div id="foot">
        	<?php include_once("footer.php");?>
        </div>
    </body>
</html>