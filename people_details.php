
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
        padding:0px 0px 20px 0px;
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
    /*photo*/
    #details_photo{
        float:right;
        width:200px;
        height:351px;
        background-color:#ffffff;
        margin:20px 20px 10px 10px;
        -webkit-box-shadow: #888 0px 0px  5px ;
        -moz-box-shadow: #888 0px 0px 5px ;
        box-shadow: #888 0px 0px 5px ;
    }
    #details_photo img{
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
    #details_type{
        width:200px;
        height:30px;
        text-align:center;
        /*background-color:#930;*/
        color:#B16363;
    }
    /*Info*/
    #details_info{
        float:left;
        width:650px;
        min-height:331px;
        height:auto;
        background-color:#f9f9f9;
        margin:20px 10px 10px 20px;
        padding:10px 20px 10px 20px;
        text-align:left;
        font-size:14px;
        color:#999;
        line-height:22px;
        -webkit-box-shadow: #888 0px 0px  5px ;
        -moz-box-shadow: #888 0px 0px 5px ;
        box-shadow: #888 0px 0px 5px ;
    }
    #info_ttl{
        width:670px;
        height:40px;
        /*background-color:#0FF;*/
        background-image:url(graph/People/ttl/info_ttl.gif);
        margin-bottom:10px;
    }
    /*Interest*/
    #details_interest{
        width:870px;
        min-height:150px;
        height:auto;
        /*background-color:#09F;*/
        float:left;
        margin:15px 10px 10px 20px;
        padding:10px 20px 10px 20px;
        font-size:14px;
        color:#999;
        line-height:22px;
        background-color:#f9f9f9;
        -webkit-box-shadow: #888 0px 0px  5px ;
        -moz-box-shadow: #888 0px 0px 5px ;
        box-shadow: #888 0px 0px 5px ;
    }
    #interest_ttl{
        width:670px;
        height:40px;
        /*background-color:#0FF;*/
        background-image:url(graph/People/ttl/interest_ttl.gif);
        margin-bottom:10px;
    }
    /*Pub*/
    #details_pub{
        width:870px;
        min-height:150px;
        height:auto;
        /*background-color:#09F;*/
        float:left;
        margin:15px 10px 10px 20px;
        padding:10px 20px 20px 20px;
        font-size:14px;
        color:#999;
        line-height:22px;
        background-color:#f9f9f9;
        -webkit-box-shadow: #888 0px 0px  5px ;
        -moz-box-shadow: #888 0px 0px 5px ;
        box-shadow: #888 0px 0px 5px ;
    }
    #pub_ttl{
        width:670px;
        height:40px;
        /*background-color:#0FF;*/
        background-image:url(graph/People/ttl/pub_ttl.gif);
        margin-bottom:10px;
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
                        echo "Research Staff";
                    }
                    else if($info[people_type]==1)
                    {
                        echo "Graduate Student";    
                    }
                    else
                    {
                        echo "Undergraduate Student";
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