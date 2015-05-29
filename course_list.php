<?php
    include_once("top_index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $course_ttl;?></title>
        <style>
            body{
                background-image:url(graph/Blog/grey.jpg);
                background-repeat:repeat;
            }
            #course_title{
                background-image:url(<?php echo $courses_ttl;?>);
            }
            .course_info_ttl{
                background-image:url(<?php echo $course_info_ttl;?>);
            }
        </style>
    </head>

    <body>
        <div id="course_main">
            <div id="course_title"></div>
            <?php
                $sql_course=mysql_query("select * from tb_course");
                $info_course=mysql_fetch_array($sql_course);
                if ($info_course!="")
                {
                    do
                    {
            ?>
            <div class="course_box">
                <div class="course_pic">
                    <img src="<?php echo $info_course[pic]?>" />
                    <div class="course_teacher">
                        <?php
                            $sql_teach=mysql_query("select * from tb_people where truename='".$info_course[teacher]."'");
                            $info_teach=mysql_fetch_array($sql_teach);//get teahcer info
                            echo "<font color=\"#CCCCCC\">teached by </font><a href='people".$info_teach[id]."'>".$info_teach[name]."</a>";
                        ?>
                    </div>
                </div>
                <div class="course_info">
                    <div class="course_info_ttl"></div>
                    <div class="info_contnt">
                        <strong><?php echo $course_name;?></strong>&nbsp;:&nbsp;<?php echo $info_course[name];?><br />
                        <br />
                        <strong><?php echo $course_intro;?></strong>&nbsp;:&nbsp;<?php echo $info_course[info];?>
                    </div>
                </div>
                <div class="course_resource">
                    <a href="courselogin<?php echo $info_course[id]?>"><?php echo $get_res;?> →</a>
                </div>
            </div>
            <?php
                    }while($info_course=mysql_fetch_array($sql_course));
                }
                else
                {
                    echo "No Course!";    
                }
            ?>
        </div>
        <div id="foot">
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>