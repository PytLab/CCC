<?php
	include_once("top_index.php");
?>
<head>
    <title><?php echo $news_ttl;?></title>
    <style>
        * { margin:0; padding:0; word-break:break-all; }
        #news_list_title{
            width:770px;
            height: 110px;
            margin: 0px 0 10px 0;
            padding: 0px 0 0 0px ;
            background:url(<?php echo $news_ttl;?>) no-repeat;
             
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
                <div id="news_list_title"></div>
                    <?php
                        include_once("news_in_list.php");
                    ?>
                </div>
                <!--右侧-->
                <?php include_once("body_right.php");?>
            </div>
            <div id="foot">
                <?php include_once("footer.php");?>
            </div>
        </div>
</body>
</html>