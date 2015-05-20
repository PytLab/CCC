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
        :hover{
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition:  0.5s;
        }
        #course_main{
            margin:0 auto;
            width:950px;
            height:auto;
            margin-top:0px;
            margin-bottom:20px;
            padding-bottom:20px;
            background-color:#FFF;
            -webkit-box-shadow: #999 0px 0px  5px ;
            -moz-box-shadow: #999 0px 0px 5px ;
            box-shadow: #999 0px 0px 5px ;
            display:table;
        }
        #course_title{
            width:900px;
            margin:0 auto;
            height:110px;
            background-image:url(graph/courses/ttl/course_ttl.gif);
        }
        .course_box{
            margin:0 auto;
            width:900px;
            min-height:350px;
            height:auto;
            background-color:#f9f9f9;
            margin-top:20px;
            -webkit-box-shadow: #999 0px 0px  5px ;
            -moz-box-shadow: #999 0px 0px 5px ;
            box-shadow: #999 0px 0px 5px ;
            display:table;
        }
        .course_pic{
            width:220px;
            min-height:320px;
            height:auto;
            background-color:#ffffff;
            margin:10px;
            float:left;
            -webkit-box-shadow: #999 0px 0px  5px ;
            -moz-box-shadow: #999 0px 0px 5px ;
            box-shadow: #999 0px 0px 5px ;
        }
        .course_pic img{
            width:200px;
            height:250px;
            margin:10px 10px 10px 10px;
        }
        .course_teacher{
            width:200px;
            min-height:50px;
            height:auto;
            /*background-color:#966;*/
            margin:0 auto;
            text-align:center;
        }
        .course_teacher a{
            text-decoration:none;
            color:#069;
        }
        .course_teacher a:hover{
            color:#AD5C5C;
        }
        .course_info{
            width:620px;
            min-height:220px;
            height:auto;
            /*background-color:#09F;*/
            float:right;
            margin:10px;
            padding:0px 20px 10px 0px;
        }
        .course_info_ttl{
            width:620px;
            height:40px;
            /*background-color:#963;*/
            background-image:url(graph/courses/ttl/course_info_ttl.gif);
            border-bottom:1px #CCCCCC solid;
        }
        .info_contnt{
            width:600px;
            min-height:200px;
            height:auto;
            /*background-color:#963;*/
            margin:15px 10px;
            color:#666;
            line-height:23px;
        }
        .course_resource{
            width:600px;
            height:30px;
            float:right;
            /*background-color:#990;*/
            margin-right:15px;
            text-align:right;
        }
        .course_resource a{
            text-decoration:none;
            color:#06F;
        }
        .course_resource a:hover{
            color:#AD5C5C;
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
						$sql_teach=mysql_query("select * from tb_people where name='".$info_course[teacher]."'");
						$info_teach=mysql_fetch_array($sql_teach);//get teahcer info
                    	echo "<font color=\"#CCCCCC\">teached by </font><a href='people_details.php?id=".$info_teach[id]."'>".$info_course[teacher]."</a>";
					?>
                </div>
            </div>
            <div class="course_info">
            	<div class="course_info_ttl"></div>
                <div class="info_contnt">
                	<strong>Course Name</strong>&nbsp;:&nbsp;<?php echo $info_course[name];?><br />
                    <br />
                    <strong>Introduction</strong>&nbsp;:&nbsp;<?php echo $info_course[info];?>
                </div>
            </div>
            <div class="course_resource">
            	<a href="course_login?courseid=<?php echo $info_course[id]?>">Course Resources -></a>
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