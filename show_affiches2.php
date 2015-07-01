<?php date_default_timezone_set(PRC);include_once("./conn/conn.php"); include_once("./function.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            * { margin:0; padding:0; word-wrap: break-word; }
            #show_news{
                width:220px;
                margin-left:15px;
                margin-top:15px;
            }
            #show_news a{
                text-decoration:none;
                font-weight:800;
                color:#000070;
            }
            #show_news a:hover{
                color:#408080;
            }
            li{
                list-style-type:none;
            }
        </style>
    </head>

    <body>
        <div id="show_news">
            <?php
                $sql=mysql_query("select * from tb_publication order by pub_time desc limit 0,4",$conn);
                $info=mysql_fetch_array($sql);
                if($info!=false){    //get pub info
                $i=1;
                do
                {        
        ?>
            
            <a href="<?php 
                if($info[paper]=="")
                {
                    echo $info[link];
                }
                else
                {
                    echo $info[paper];    
                }
                    ?>" title="<?php echo $info[title]?>" target="_blank">
            <li>
                <span class="affices_title">
                    <?php 
                        echo msubstr($info[title],0,70);
                        if(strlen($info[title])>70)
                        {
                           echo " ...";
                        }   
                    ?>
                </span>
                </a>
                <span class="affiches_time">
                    <?php echo '-['.$info[pub_time]."]";?>
                </span>
            </li>
            
          
            <br />
        <?php
                    $i++;
                }while($info=mysql_fetch_array($sql));
            }
            else
            {
                echo "No Publication!";    
            }
        ?>
        </div>
    </body>
</html>