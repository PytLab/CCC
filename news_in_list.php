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
            $sql=mysql_query("select count(*) as total from tb_news",$conn);
            $info=mysql_fetch_array($sql);
            $total=$info[total];  //新闻总数
         if($total==0)
            {
                echo  "Oops,There is no News！";
            }
            else
            {
                if(empty($_GET[page]) == True || is_numeric($_GET[page]) == False)
                {
                    $page=1;
                }
                else
                {
                    $page=intval($_GET[page]);
                }
               
                $pagesize=16;  //最多一页显示的新闻数
                
                /*获取总页数*/
                if($total < $pagesize)    
                {
                    $pagecount=1;
                }
                else
                {
                    if($total % $pagesize == 0)
                    {
                        $pagecount = intval($total/$pagesize);
                    }
                    else
                    {
                        $pagecount = intval($total/$pagesize) + 1;
                    } 
                }
            }
            
            
            $sql_list=mysql_query("select * from tb_news order by id desc limit ".($page-1)*$pagesize.",".$pagesize, $conn);
            while($info_list = mysql_fetch_array($sql_list))
            { 
        ?>
        <div class="news_list">
            <?php
                echo "<a href='newsdetails".$info_list[id]."'>".$info_list[title]."</a>&nbsp;-&nbsp;".$info_list[createtime];
            ?>            
        </div>
        <?php
            }
        ?>
        
        <div id="page_num">
            <a style="font-weight:lighter; hover:None;"><font style="color: #CD5C5C;"><?php echo $page;?></font>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $pagecount;?></a>
            &nbsp;&nbsp;|
            <?php
                if($page >= 2)
                {
            ?>
            <a href="news1" title="First"><font face="webdings"> 9 </font></a> 
            <a href="news<?php echo $page-1;?>" title="Previous"><font face="webdings"> 7 </font></a>
            <?php
                }
                if($pagecount<=5)
                {
                    for($i=1; $i<=$pagecount; $i++)
                    {
            ?>
            <a href="news<?php echo $i;?>"><?php echo $i;?></a>
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
            <a href="news<?php echo $i;?>"><?php echo $i;?></a>
            <?php 
                    }
            ?>
            <a href="news<?php 
                if($pagecount>=$page+1)
                    echo $page+1;
                else
                    echo 1; 
                ?>" title="Next"> <font face="webdings"> 8 </font></a>
            <a href="news<?php echo $pagecount;?>" title="Last"><font face="webdings"> : </font></a>
            <?php 
                }
            ?>
            &nbsp;
        </div>
    </body>
</html>