
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<?php
    include_once("top_index.php");
?>
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
            $sql_pub=mysql_query("select * from tb_publication where author like '%#".$info[truename]."#%' order by pub_time desc");
            $info_pub=mysql_fetch_array($sql_pub);
            if($info_pub!="")
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
                    if($info_pub[paper]=="")
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
                }while($info_pub=mysql_fetch_array($sql_pub));
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