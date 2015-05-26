<?php
  include_once("top_meeting.php");
  $sql=mysql_query("select * from tb_meeting order by id  desc limit 1");
  $info=mysql_fetch_array($sql);//get the one's info from db
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Meeting - CCC</title>
    </head>

    <body>
        <table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" id="main_table">
            <tr>
                <td width="170" align="right" valign="top" bgcolor="#888888">
                    <?php include_once("meeting_nav.php");?>
                </td>
                <td width="854" valign="top">
                    <table width="854" border="0" align="center" cellpadding="0" cellspacing="0" id="table_right">
                        <tr>
                            <td width="854" height="50" align="center" valign="middle" bgcolor="#A25151">
                                <strong>
                                    <font color="#FFFFFF" size="+2">
                                        <?php
                                            if($_GET[szj]=="")
                                                echo "SCTCC&nbsp;&nbsp;2014";//$info[name];
                                            else
                                                echo $_GET[szj];
                                        ?>
                                    </font>
                                </strong>
                            </td>
                        </tr>
                         
                        <tr>
                            <td width="854" height="450" align="center" valign="top">
                                <?php include("meeting_right.php");?>
                            </td>            
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                    </table>
                 </td>
            </tr>
        </table>
        <table width="830" align="center" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center"></td>
            </tr>
        </table>
        <div id="foot">
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>