<?php date_default_timezone_set(PRC);  include_once("./conn/conn.php"); include_once("./function.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            
        </style>
    </head>

    <body>
        <div id="inside_main">
            <?php
                $sql_meeting=mysql_query("select * from tb_meeting order by id desc limit 1");
                $info_meeting=mysql_fetch_array($sql_meeting);//get the meeting info
                
                $hotel=explode("#",$info_meeting[hotel]);//alert to array
                foreach($hotel as $key=>$value)
                {
                    $sql_hotel=mysql_query("select * from tb_hotel where name='".$value."'");
                    $info_hotel=mysql_fetch_array($sql_hotel);//get corresponding hotel info
            ?>
            <div class="accom">
                
                
                    <div class="hotel_list">
                        <div class="hotel_pic">
                            <img src="<?php echo $info_hotel[pic];?>" title="<?php echo $info_hotel[name];?>"/>
                        </div>
                        <div class="hotel_info">
                            <?php echo $info_hotel[info];?>
                        </div>
                    </div>
               
             </div>
             <?php
                }
             ?>
        </div>
    </body>
</html>