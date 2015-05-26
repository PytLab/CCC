<?php date_default_timezone_set(PRC);  include_once("./conn/conn.php"); include_once("./function.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>

    <body>
        <div id="inside_main">
            <?php
                $sql=mysql_query("select * from tb_meeting order by createtime desc limit 1");
                $info=mysql_fetch_array($sql);
            ?>
            <div id="prog">
                <div id="prog_ttl">
                    <?php echo $info[name]."&nbsp;Program";?>
                </div>
                <div id="prog_contnt">
                    <?php echo $info[program];?>
                </div>
            </div>
        </div>
    </body>
</html>