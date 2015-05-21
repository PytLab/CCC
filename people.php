<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link rel="shortcut icon" href="icon.ico" />
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <?php include_once("top_index.php");?>
    <title><?php echo $people;?></title>
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
        #people_main{
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
        #people_title{
            width:900px;
            margin:0 auto;
            height:110px;
            background-image:url(<?php echo $people_ttl;?>);
        }
        #people_all{
            margin:0 auto;
            width:810px;
            height:460px;
            margin-top:15px;
            margin-bottom:20px;
            -webkit-box-shadow: #666 0px 0px  5px ;
            -moz-box-shadow: #666 0px 0px 5px ;
            box-shadow: #666 0px 0px 5px ;
        }
        #people_all:hover{
            -webkit-box-shadow: #666 0px 0px  35px ;
            -moz-box-shadow: #666 0px 0px 35px ;
            box-shadow: #666 0px 0px 35px ;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition:  0.5s;
        }
        #people_all img{
            width:800px;
            height:450px;
            margin:5px 5px 5px 5px;
        }
        #research_staff{
            width:950px;
            height:auto;
            margin-bottom:20px;
            /*background-color:#06F;*/
            display:table;
        }
        #research_staff_title{
            width:900px;
            margin:0 auto;
            height:70px;
            background-image:url(<?php echo $stuff_ttl;?>);
        }
        .people_box{
            float:left;
            width:200px;
            height:351px;
            background-color:#f7f7f7;
            margin:10px 0px 10px 30px;
            -webkit-box-shadow: #666 0px 0px  2px ;
            -moz-box-shadow: #666 0px 0px 2px ;
            box-shadow: #666 0px 0px 2px ;
        }
        .people_box:hover{
            -webkit-box-shadow: #666 0px 0px 30px ;
            -moz-box-shadow: #666 0px 0px 30px ;
            box-shadow: #666 0px 0px 30px ;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition:  0.5s;
        }
        .people_box:hover img{
            filter: brightness(85%);
            /*-webkit-filter: brightness(85%);
            -moz-filter: brightness(85%);
            -o-filter: brightness(85%);
            -ms-filter: brightness(85%);*/
            filter: contrast(1.2);
            -webkit-filter: contrast(1.2);
            -moz-filter: contrast(1.2);
            -o-filter: contrast(1.2);
            -ms-filter: contrast(1.2);
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition:  0.5s;
        }
        .box_img{
            width:180px;
            height:261px;
        }
        .people_box img{
            width:180px;
            height:261px;
            margin-left:10px;
            margin-top:10px;
            filter: contrast(1);
            -webkit-filter: contrast(1);
            -moz-filter: contrast(1);
            -o-filter: contrast(1);
            -ms-filter: contrast(1);
        }
        .box_name{
            margin-left:10px;
            width:180px;
            height:45px;
            margin-top:10px;
            /*background-color:#930;*/
            text-align:center;
            vertical-align:central;
        }
        .people_details{
            width:190px;
            height:30px;
            text-align:right;
            /*background-color:#930;*/
        }
        .people_details a{
            text-decoration:none;
            font-size:13px;
            color:#AF6161;
        }
        #graduate{
            width:950px;
            height:auto;
            margin-bottom:20px;
            /*background-color:#06F;*/
            display:table;
        }
        #graduate_title{
            width:900px;
            margin:0 auto;
            height:70px;
            background-image:url(<?php echo $graduate_ttl;?>);
        }
        #graduated{
            width:950px;
            height:auto;
            margin-bottom:20px;
            /*background-color:#06F;*/
            display:table;
        }
        #graduated_title{
            width:900px;
            margin:0 auto;
            height:70px;
            background-image:url(<?php echo $graduated_ttl;?>);
        }
    </style>
    </head>

    <body>
        <div id="people_main">
            <div id="people_title"></div>
            <div id="people_all">
                <img src="graph/People/all_people.jpg" alt="OurFamily"/>
            </div>
            <div id="research_staff">
                
                <?php
                    $sql_staff=mysql_query("select * from tb_people where people_type = 0 order by id");
                    $info_staff=mysql_fetch_array($sql_staff); //get staff info from database
                    if($info_staff!="")
                    {
                ?>
                <div id="research_staff_title"></div>
                <?php
                        do
                        {
                ?>
                <div class="people_box">
                    <a href="people_details.php?id=<?php echo $info_staff[id];?>">
                        <img src="<?php echo $info_staff[photo];?>" alt="<?php echo $info_staff[name];?>"/>
                    </a>
                    <div class="box_name">
                        <?php echo $info_staff[name];?>
                    </div>
                    <div class="people_details">
                        <a href="people_details.php?id=<?php echo $info_staff[id];?>">Details -></a>
                    </div>
                </div>
                <?php
                        }while($info_staff=mysql_fetch_array($sql_staff));
                    }
                ?>
            </div>
            <div id="graduate">
                
                <?php
                    $sql_grad=mysql_query("select * from tb_people where people_type = 1 order by id");
                    $info_grad=mysql_fetch_array($sql_grad); //get staff info from database
                    if($info_grad!="")
                    {
                ?>
                <div id="graduate_title"></div>
                <?php
                        do
                        {
                ?>
                <div class="people_box">
                    <a href="people_details.php?id=<?php echo $info_grad[id];?>">
                        <img src="<?php echo $info_grad[photo];?>" alt="<?php echo $info_grad[name];?>" />
                    </a>
                    <div class="box_name">
                        <?php echo $info_grad[name];?>
                    </div>
                    <div class="people_details">
                        <a href="people_details.php?id=<?php echo $info_grad[id];?>">Details -></a>
                    </div>
                </div>
                <?php
                        }while($info_grad=mysql_fetch_array($sql_grad));
                    }
                ?>
            </div>
            
            <div id="graduated">
                
                <?php
                    $sql_ugrad=mysql_query("select * from tb_people where people_type = 2 order by id");
                    $info_ugrad=mysql_fetch_array($sql_ugrad); //get staff info from database
                    if($info_ugrad!="")
                    {
                ?>
                <div id="graduated_title"></div>
                <?php
                        do
                        {
                ?>
                <div class="people_box">
                    <a href="people_details.php?id=<?php echo $info_ugrad[id];?>">
                        <img src="<?php echo $info_ugrad[photo];?>" alt="<?php echo $info_ugrad[name];?>" />
                    </a>
                    <div class="box_name">
                        <?php echo $info_ugrad[name];?>
                    </div>
                    <div class="people_details">
                        <a href="people_details.php?id=<?php echo $info_ugrad[id];?>">Details -></a>
                    </div>
                </div>
                <?php
                        }while($info_ugrad=mysql_fetch_array($sql_ugrad));
                    }
                ?>
            </div>
        </div>
        <div id="foot">
                <?php include_once("footer.php");?>
        </div>
    </body>
</html>