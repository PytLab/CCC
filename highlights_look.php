<?php
    include_once("top_index.php");
?>
<head>
    <title><?php echo $highlights;?></title>
    <style>
        * { margin:0; padding:0; word-wrap: break-word; }
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
            <!--右侧-->
            <?php include_once("body_right.php");?> 
        </div>
        <div id="foot">
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>