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
            $searchword = $_GET[pub_title];
            $sql=mysql_query("select count(*) as total from tb_publication where title REGEXP '".$searchword."'", $conn);
            $info=mysql_fetch_array($sql);
            $total=$info[total];
            if($total==0)
            {
                echo  "<ul align=\"center\", style='color: #AAAAAA'>Oops! No publication found about <strong>'".$searchword."'
                      </strong>&nbsp;&nbsp;&nbsp;&nbsp;_:(´ཀ`」 ∠):_</ul>";
            }
            else
            {
                echo "<ul align=\"center\", style='color: #AAAAAA'>---------- ● Found&nbsp;".$total."&nbsp;publications ● ----------</ul><br>";
                if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
                    $page=1;
                else
                    $page=intval($_GET[page]);
               
                $pagesize=16;
               
                if($total<$pagesize)
                    $pagecount=1;
                else
                {
                    if($total%$pagesize==0)
                        $pagecount=intval($total/$pagesize);
                    else
                        $pagecount=intval($total/$pagesize)+1;
                }
                $sql_list=mysql_query("select * from tb_publication
                                  where title REGEXP '".$searchword."'
                                  order by pub_time desc 
                                  limit ".($page-1)*$pagesize.",".$pagesize, $conn);
                while($info_list=mysql_fetch_array($sql_list))
                { 
        ?>
        <div class="pub_list">
            <?php
                if($info_list[paper]!="")
                    echo "<a href='".$info_list[paper]."' target='_blank'>".$info_list[title]."</a>&nbsp;-&nbsp;".$info_list[pub_time];
                else
                    echo "<a href='".$info_list[link]."' target='_blank'>".$info_list[title]."</a>&nbsp;-&nbsp;".$info_list[pub_time];
            ?>            
        </div>
        <?php
                }
            
        ?>
        <div id="page_num">
        
            <a style="font-weight:lighter; hover:None;"><font style="color: #CD5C5C;"><?php echo $page;?></font>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $pagecount;?></a>
            &nbsp;&nbsp;|
            <?php
                if($page>=2)
                {
            ?>
            <a href="publications1" title="First"><font face="webdings"> 9 </font></a> 
            <a href="publications<?php echo $page-1;?>" title="Previous"><font face="webdings"> 7 </font></a>
            <?php
                }
                if($pagecount <= 5)
                {
                    for($i = 1; $i <= $pagecount; $i++)
                    {
            ?>
                <a href="publications<?php echo $i;?>"><?php echo $i;?></a>
            <?php
                    }
                }
                else
                {
                    if($page >= $pagecount-4)  //最后五页
                    {
                        $start = $pagecount-4;
                        $end = $pagecount;
                    }
                    else if($page <= 5)
                    {
                        $start = 1;
                        $end = 5;
                    }
                    else
                    {
                        $start = $page - 2;
                        $end = $page + 2;
                    }
                    for($i=$start; $i <= $end; $i++)
                    {     
            ?>
            <a href="publications<?php echo $i;?>"><?php echo $i;?></a>
            <?php 
                    }
            ?>
                <a href="publications<?php 
                    if($pagecount>=$page+1)
                        echo $page+1;
                    else
                        echo 1; 
                 
                ?>" title="Next"> <font face="webdings"> 8 </font></a> 
                <a href="publications<?php echo $pagecount;?>" title="Last"><font face="webdings"> : </font></a>
            <?php 
                }
            ?>
            &nbsp;
        </div>
        <?php
            }
        ?>
    </body>
</html>