<?php
    include_once("top_index.php");
    $courseid=$_GET[courseid];
    $sqlu=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'and courseid=".$courseid,$conn);
    $infou=mysql_fetch_array($sqlu);
    if($infou=="")
    {
        echo "<div align=\"center\" style=\"margin-top:100px;\">Oops!(;￢д￢)<br /><br />&nbsp;Your account is not matched~<br /><br />눈_눈Please operate correctly!<br />
";
        echo "<script>alert('Ooops!\\nPermission denied!\\n눈_눈Please operate correctly!');history.go(-1);</script>";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>resource-download</title>
        <style>
            body{
                background-image:url(graph/Blog/grey.jpg);
                background-repeat:repeat;
            }
            #coursefile_ttl{
                background-image:url(<?php echo $res_ttl;?>);
            }
        </style>
    </head>

    <body>
        <?php
            $sql=mysql_query("select count(*) as total from tb_coursefile where courseid=".$courseid."",$conn);
            $info=mysql_fetch_array($sql);
            $total=$info[total];
            if($total==0)
                echo  "Oops,There is no Resource！";
            else
            {
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
                        $pagecount=intval($total/$pagesize) + 1;
                }
            }
        ?>
        <div id="coursefile_main">
            <div id="coursefile_ttl"></div>
            <?php
                $sql_list=mysql_query("select * from tb_coursefile where courseid=".$courseid." order by id desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
                while($info_list=mysql_fetch_array($sql_list))
                {
            ?>
                    <div class="resource_list">
                        <img src="<?php 
                            if($info_list[suffix]==".ppt"||$info_list[suffix]==".pptx")
                            {
                                echo "./graph/courses/pic/icon/ppt.png";
                            }
                            else if($info_list[suffix]==".doc"||$info_list[suffix]==".docx")
                            {
                                echo "./graph/courses/pic/icon/word.png";    
                            }
                            else if($info_list[suffix]==".xls"||$info_list[suffix]==".xlsx")
                            {
                                echo "./graph/courses/pic/icon/excel.png";    
                            }
                            else if($info_list[suffix]==".txt")
                            {
                                echo "./graph/courses/pic/icon/txt.png";        
                            }
                            else if($info_list[suffix]==".zip")
                            {
                                echo "./graph/courses/pic/icon/zip.jpg";        
                            }
                            else if($info_list[suffix]==".rar")
                            {
                                echo "./graph/courses/pic/icon/rar.jpg";        
                            }
                            else if($info_list[suffix]==".jpg"||$info_list[suffix]==".gif"||$info_list[suffix]==".png"||$info_list[suffix]==".GIF"||$info_list[suffix]==".JPG"||$info_list[suffix]==".PNG"||$info_list[suffix]==".JPEG")
                            {
                                echo "./graph/courses/pic/icon/pic.png";        
                            }
                            else if($info_list[suffix]==".pdf")
                            {
                                echo "./graph/courses/pic/icon/pdf.jpg";        
                            }
                            else
                            {
                                echo "./graph/courses/pic/icon/doc.jpg";    
                            }
                        ?>" title="<?php echo $info_list[title];?>" width="25" height="25"/>
            <?php
                 echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='resource_look.php?id=".$info_list[id]."'>".$info_list[title]."</a>&nbsp;-&nbsp;".$info_list[createtime];
            ?>            
                    </div>
            <?php
                }
            ?>
        
            <div id="page_num" style="margin: 10px 90px 2px 90px">
                <a style="font-weight:lighter; hover:None;"><?php echo $page;?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $pagecount;?></a>
                &nbsp;&nbsp;|
            
                <?php
                    if($page>=2)
                    {
                ?>
                        <a href="coursefile.php?courseid=<?php echo $courseid;?>&page=1" title="First"><font face="webdings"> 9 </font></a> 
                        <a href="coursefile.php?courseid=<?php echo $courseid;?>&page=<?php echo $page-1;?>" title="Previous"><font face="webdings"> 7 </font></a>
                <?php
                    }
                    if($pagecount<=4)
                    {
                        for($i=1;$i<=$pagecount;$i++)
                        {
                ?>
                            <a href="coursefile.php?courseid=<?php echo $courseid;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
                <?php
                        }
                    }
                    else
                    {
                        for($i=1;$i<=4;$i++)
                        {     
                ?>
                            <a href="coursefile.php?courseid=<?php echo $courseid;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
                <?php 
                        }
                ?>
                ...&nbsp;<a href="coursefile.php?courseid=<?php echo $courseid;?>&page=<?php 
                    if($pagecount>=$page+1)
                        echo $page+1;
                    else
                        echo 1; 
                 
                    ?>" title="Next"> <font face="webdings"> 8 </font></a> 
                    <a href="coursefile.php?courseid=<?php echo $courseid;?>page=<?php echo $pagecount;?>" title="Last"><font face="webdings"> : </font></a>
                <?php 
                    }
                ?>
                &nbsp;
            </div>
        </div>
        <div id="foot">
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>