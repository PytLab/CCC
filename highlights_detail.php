<?php
    include_once("top_index.php");
?>
<head>
    <title><?php echo $high_ttl;?></title>
    <style>
        * { margin:0; padding:0; word-wrap:break-word; }
        #highlights_content h3{
            background:url(<?php echo $sci_highlight;?>) no-repeat;
        }
    </style>
</head>
        

<html>
    <body>
        <div id="body">
            <!--左侧-->
            <div id="body_left">
                <div id="highlights_content">
                    <h3></h3>
                    <?php
                        include_once("highlights_paper.php");
                    ?>
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