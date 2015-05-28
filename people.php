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
        #people_title{
            background-image:url(<?php echo $people_ttl;?>);
        }
        #research_staff_title{
            background-image:url(<?php echo $stuff_ttl;?>);
        }
        #graduate_title{
            background-image:url(<?php echo $graduate_ttl;?>);
        }
        #graduated_title{
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
                    <a href="people_details_<?php echo $info_staff[id];?>">
                        <img src="<?php echo $info_staff[photo];?>" alt="<?php echo $info_staff[name];?>"/>
                    </a>
                    <div class="box_name">
                        <?php echo $info_staff[name];?>
                    </div>
                    <div class="people_details">
                        <a href="people_details_<?php echo $info_staff[id];?>">Details →</a>
                    </div>
                </div>
                <?php
                        }while($info_staff=mysql_fetch_array($sql_staff));
                    }
                ?>
            </div>
            <div id="graduate">
                
                <?php
                    $sql_grad=mysql_query("select * from tb_people where people_type = 1 order by truename");
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
                    <a href="people_details_<?php echo $info_grad[id];?>">
                        <img src="<?php echo $info_grad[photo];?>" alt="<?php echo $info_grad[name];?>" />
                    </a>
                    <div class="box_name">
                        <?php echo $info_grad[name];?>
                    </div>
                    <div class="people_details">
                        <a href="people_details_<?php echo $info_grad[id];?>">Details →</a>
                    </div>
                </div>
                <?php
                        }while($info_grad=mysql_fetch_array($sql_grad));
                    }
                ?>
            </div>
            
            <div id="graduated">
                
                <?php
                    $sql_ugrad=mysql_query("select * from tb_people where people_type = 2 order by truename");
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
                    <a href="people_details_<?php echo $info_ugrad[id];?>">
                        <img src="<?php echo $info_ugrad[photo];?>" alt="<?php echo $info_ugrad[name];?>" />
                    </a>
                    <div class="box_name">
                        <?php echo $info_ugrad[name];?>
                    </div>
                    <div class="people_details">
                        <a href="people_details_<?php echo $info_ugrad[id];?>">Details →</a>
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