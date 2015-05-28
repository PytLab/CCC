<?php date_default_timezone_set(PRC); session_start(); include_once("./conn/conn.php"); include_once("./function.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style>
        * { margin:0; padding:0; word-wrap: break-word; }
        
    </style>
    </head>

    <body>
        <?php
            $sql=mysql_query("select count(*) as total from tb_highlights",$conn);
            $info=mysql_fetch_array($sql);
            $total=$info[total];
            if($total==0)
            {
               echo  "Oops,There is no Highlight！"; 
            }
            else
            {
                if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
                {
                    $page=1;
                }
                else
                {
                    $page=intval($_GET[page]);
                }

                $pagesize=6;
               
                if($total < $pagesize)
                {
                    $pagecount=1;
                }
                else
                {
                    if($total%$pagesize==0)
                    {
                        $pagecount=intval($total/$pagesize);
                    }
                    else
                    {
                        $pagecount=intval($total/$pagesize)+1;
                    } 
                }
            }
            $sql_list=mysql_query("select * from tb_highlights order by id desc limit ".($page-1)*$pagesize.",".$pagesize, $conn);
            while($info_list=mysql_fetch_array($sql_list))
            { 
        ?>
        <div class="highlights_list">
            <div class="highlights_pho">
                <?php
                    $preg = "/<img src=\"(.+?)\".*?>/";
                    preg_match_all($preg, $info_list[content], $new_content);
                    echo $new_content[0][0];    //获取第一个图片路径
                ?>
            </div>
            <div class="highlights_info">
                <div class="highlights_title">
                    <?php
                        echo "<a href='highlights_look_".$info_list[id]."'>".$info_list[title]."</a>";
                    ?>
                </div>
                <div class="highlights_contnt">
                    <?php
                        echo preg_replace("/<img.*?>/si","",cut_str($info_list[content],300,0,'UTF-8'));
                    ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        
        <div id="page_num">
            <a style="font-weight:lighter; hover:None;"><?php echo $page;?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $pagecount;?></a>
            &nbsp;&nbsp;|
            <?php
                if($page>=2)
                {
            ?>

            <a href="highlights_list_1" title="First"><font face="webdings"> 9 </font></a> 
            <a href="highlights_list_<?php echo $page-1;?>" title="Previous"><font face="webdings"> 7 </font></a>
            <?php
                }
                if($pagecount<=4)
                {
                    for($i=1;$i<=$pagecount;$i++)
                    {
            ?>
            <a href="highlights_list_<?php echo $i;?>"><?php echo $i;?></a>
            <?php
                    }
                }
                else
                {
                    for($i=1;$i<=4;$i++)
                    {     
            ?>
            <a href="highlights_list_<?php echo $i;?>"><?php echo $i;?></a>
            <?php 
                    }
            ?>
                ...&nbsp;<a href="highlights_list_<?php 
                if($pagecount>=$page+1)
                    echo $page+1;
                else
                    echo 1; 
                 
                ?>" title="Next"> <font face="webdings"> 8 </font></a> 
                <a href="highlights_list_<?php echo $pagecount;?>" title="Last"><font face="webdings"> : </font></a>
            <?php 
                }
            ?>
            &nbsp;
        </div>
    </body>
</html>