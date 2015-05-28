<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <?php
        date_default_timezone_set(PRC);
        //@session_start(); //session在change_language.php中start
        include_once("./conn/conn.php"); 
        include_once("./function.php");
        include_once("./get_language.php"); //识别浏览器语言
        include_once("./change_language.php");  //通过点击链接切换语言
    ?>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <link href="./css/main.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="icon.ico" />
    </head>

    <body>
        <div id="main">
            <div id="head">
                <div id="head_top">
                    <div id="search">
                        <?php include_once("search_inweb.html");?>
                    </div>
                    <div id="logo"><a href="home"></a></div>
                </div>
                <div id="head_bottom">
                    <div id="head_nav">
                        <ul id="menu">
                            <li><a href="home" ><?php echo $home?></a>
                                <ul class="sub_menu"></ul>
                            </li>
                            <li><a href="people" ><?php echo $people?></a>
                                <ul class="sub_menu">
                                    <li><a href="people#research_staff" ><?php echo $teachers?></a></li>
                                    <li><a href="people#graduate" ><?php echo $graduates?></a></li>
                                    <li><a href="people#graduated" ><?php echo $graduated?></a></li>
                                </ul>
                            </li>
                            <li><a href="news" ><?php echo $news?></a></li>
                            <li><a href="highlights" ><?php echo $highlights?></a>
                                <ul class="sub_menu">
                                    <li><a href="highlights_detail" ><?php echo $latest?></a></li>
                                    <li><a href="highlights" ><?php echo $high_list?></a></li>
                                </ul>
                            </li>
                            <li><a href="publications" ><?php echo $pubs?></a></li>
                            <li><a href="course" ><?php echo $courses?></a>
                                <ul class="sub_menu">
                                    <?php
                                        $sql_acc=mysql_query("select * from tb_user where usernc = '".$_SESSION["unc"]."'");
                                        $info_acc=mysql_fetch_array($sql_acc);
                                        if($info_acc!="")
                                        {
                                    ?>
                                    <li><a href="course" ><?php echo $course_list?></a></li>
                                    <li><a href="course_login_<?php echo $info_acc[courseid];?>" ><?php echo $course_acc?></a></li>   
                                    <?php
                                        }
                                        else
                                        {
                                    ?>
										
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="meeting" ><?php echo $meeting?></a></li>
                            <li><a href="contact" ><?php echo $contact?></a></li>
                            <div id="language_change">
                                <a href="<?php if(empty($_SERVER['QUERY_STRING']))
                                                   echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?lang='.$get_lang;
                                               else
                                                   echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'&lang='.$get_lang;
                                         ?>" target="_self"><?php echo $lan?></a>
                            </div>
                        </ul>
                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
