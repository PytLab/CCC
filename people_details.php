<?php include_once("top_index.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title><?php echo $people;?></title>
    <style>
        body{
            background-image:url(graph/Blog/grey.jpg);
            background-repeat:repeat;
        }
        #people_title{
            background-image:url(<?php echo $people_ttl;?>);
        }
        #info_ttl{
            background-image:url(<?php echo $people_info;?>);
        }
        #interest_ttl{
            background-image:url(<?php echo $people_interest;?>);
        }
        #pub_ttl{
            background-image:url(<?php echo $people_pub;?>);
        }
    </style>
    </head>

    <body>
        <?php
            /*获取研究人员数据库信息*/
            $id=$_GET[id];
            $sql=mysql_query("select * from tb_people where id = ".$id."");
            $info=mysql_fetch_array($sql); //get info from database
        ?>
        <div id="people_main">
            <div id="people_title"></div>
            <div id="details_info">
                <div id="info_ttl"></div>
                <?php
                    echo $info[Info];
                ?>
            </div>
            <div id="details_photo">
                <img src="<?php echo $info[photo];?>" alt="<?php echo $info[name];?>"/>
                <div class="box_name">
                    <?php echo $info[name];?>
                </div>
                <div id="details_type">
                    <?php
                        if($info[people_type]==0)
                        {
                            echo $teachers;
                        }
                        else if($info[people_type]==1)
                        {
                            echo $graduates;    
                        }
                        else
                        {
                            echo $graduated;
                        }
                    ?>
                </div>
            </div>
            <?php
                if($info[Interest]!="")
                {
            ?>
            <div id="details_interest">
                <div id="interest_ttl"></div>
                <?php
                    echo $info[Interest];
                ?>
            </div>
            <?php
                }
            ?>
              <?php
                /*获取此人文章发表总数*/
                $sql_num = mysql_query("select count(*) as total from tb_publication 
                                       where author like '%#".$info[truename]."#%' 
                                       order by pub_time desc");
                $info_num = mysql_fetch_array($sql_num);
                $total = $info_num[total];

                $page_size = 10;  //一页最多显示的文章数
                /*设置当前页面页号*/
                if(empty($_GET[page]) || is_numeric($_GET[page]) == False)
                    $page = 1;
                else
                    $page = intval($_GET[page]);
                /*获取总页数*/
                if($total % $page_size == 0)
                    $page_count = intval($total/$page_size);
                else
                    $page_count = intval($total/$page_size) + 1;

                /*获取数据库中此人的文章数据*/
                $sql_pub=mysql_query("select * from tb_publication 
                                     where author like '%#".$info[truename]."#%' 
                                     order by pub_time desc 
                                     limit ".($page-1)*$page_size.",".$page_size);
                $info_pub=mysql_fetch_array($sql_pub);
                if($info_pub != "")
                {
            ?>
            <div id="details_pub">
                <div id="pub_ttl"></div>
                <?php
                    do
                    {
                ?> 
                <li>
                    <?php 
                        if($info_pub[paper] == "")
                        {
                            echo "<strong>".$info_pub[title]."</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$info_pub[details]."[<a href=\"".$info_pub[link]."\" target=\"_blank\">Link</a>]";    
                        }
                        else
                        {
                            echo "<strong>".$info_pub[title]."</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$info_pub[details]."[<a href=\"".$info_pub[paper]."\" target=\"_blank\">PDF</a>]";
                        }
                    ?>
                </li> 
                <br />
                <?php
                    }while($info_pub = mysql_fetch_array($sql_pub));
                ?>
                <!--论文翻页-->
                <?php
                    /*如果所有文章能够一页显示，就不显示翻页内容*/
                    if($total > $page_size)
                    {
                ?>
                        <div id="pub_page_num">
                            <a style="font-weight:lighter; hover:None;"><?php echo $page;?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $page_count;?></a>
                            &nbsp;&nbsp;|
                            <?php 
                                if($page > 2)
                                {
                            ?>
                                    <a href="people_details?id=<?php echo $id;?>&page=1#details_pub" title="First"><font face="webdings"> 9 </font></a> 
                                    <a href="people_details?id=<?php echo $id;?>&page=<?php echo $page-1;?>#details_pub" title="Previous"><font face="webdings"> 7 </font></a>
                            <?php
                                }
                                /*显示页面切换键*/
                                if($page_count <= 4)
                                {
                                    for($i = 1; $i <= $page_count; $i++)
                                    {
                            ?>
                                        <a href="people_details?id=<?php echo $id;?>&page=<?php echo $i;?>#details_pub"><?php echo $i;?></a>
                            <?php
                                    }
                                }
                                else
                                {
                                    for($i = 1; $i <= 4; $i++) //最多显示4个切换键
                                    {
                            ?>
                                        <a href="people_details?id=<?php echo $id;?>&page=<?php echo $i;?>#details_pub"><?php echo $i;?></a>
                            <?php
                                    }
                            ?>
                            ...&nbsp;<a href="people_details?id=<?php echo $id;?>&page=<?php 
                                if($page_count>=$page+1)
                                    echo $page+1;
                                else
                                    echo 1; 
                                 
                                ?>#details_pub" title="Next"> <font face="webdings"> 8 </font></a> 
                                <a href="people_details?id=<?php echo $id;?>&page=<?php echo $page_count;?>#details_pub" title="Last"><font face="webdings"> : </font></a>
                            <?php
                                }
                            ?>
                        </div>
                <?php
                    }
                ?>
            </div>
            <?php
                }
            ?>
        </div>
        <div id="foot">
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>