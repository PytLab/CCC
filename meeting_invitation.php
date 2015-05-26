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
                $sql=mysql_query("select * from tb_meeting order by createtime desc limit 1");
                $info=mysql_fetch_array($sql);
                if($info[pic]!="")
                {
            ?>
            <div id="meeting_pic">
                <img src="<?php echo $info[pic];?>" />
            </div>
            <?php
                }
            ?>
            <div id="invit">
                <div id="invit_ttl">
                    <?php echo $info[name];?>
                </div>
                <div id="invit_contnt">
                    <?php echo $info[invitation];?>
                </div>
            </div>
        </div>
    </body>
</html>