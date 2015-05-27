<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php date_default_timezone_set(PRC); @session_start(); include_once("../conn/conn.php"); include_once("function.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="renderer" content="webkit" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <link rel="shortcut icon" href="icon.ico" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="main">
            <div id="head">
                <div id="head_top"></div>
                <div id="head_bottom">
                    <div id="head_nav">
                        <div class="state_nav">
                            <a href="logout.php">管理员退出</a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>