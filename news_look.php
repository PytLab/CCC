<?php include_once("top_index.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title><?php echo $news_list_ttl;?></title>
    <style>
        * { margin:0; padding:0;  word-wrap: break-word; }
        #news_list_title{
            background:url(<?php echo $news_ttl;?>) no-repeat;
        }
    </style>
    </head>
        
    <body>
        <div id="body">
            
            <div id="body_left">
                <div id="news_list_title"></div>
                <div id="news_paper">
                    <?php
                        $id=$_GET[id];
                        $sql_news=mysql_query("select * from tb_news where id='".$id."'",$conn);
                        $info_news=mysql_fetch_array($sql_news);  //获取highlights数据库信息
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
            <!--右侧-->
            <?php include_once("body_right.php");?> 
        </div>
        <div id="foot">
            <?php include_once("footer.php");?>
        </div>   
    </body>
</html>