<?php
    session_start();
    if($_SESSION["admin_nc"]=="")
    {
        echo "<script>alert('Permission Denied!');window.location.href='../index.php';</script>";
        exit;
    }
    ?>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
        <script language="javascript">
            function chkinput(form)
            {
                if(form.name.value=="")
                {
                    alert("Please input Number");
                    form.title.focus();
                    return(false);
                }

                if(form.info.value=="")
                {
                    alert("Please input Text");
                    form.content.focus();
                    return(false);
                }  
                return(true);
            }
        </script>
        <?php
              $id=$_GET[id];
            $sql=mysql_query("select * from tb_homepic where id=".$id);
            $info=mysql_fetch_array($sql);
        ?>
        <table width="770" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
            
            <form name="form1" method="post" action="save_homepic.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
                <tr>
                    <td height="40" colspan="2" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
                    </tr>
                <tr>
                    <td width="200" height="79" bgcolor="#FFFFFF"><div align="center">Photo_Number:</div></td>
                    <td width="564" bgcolor="#FFFFFF">&nbsp;
                    <input name="name" type="text" class="txt_grey" id="title" size="70" value="<?php echo $info[num];?>"></td>
                </tr>
                
              
                
                <tr>
                    <td width="200" height="87" bgcolor="#FFFFFF"><div align="center">Photo:</div></td>
                    <td width="564" bgcolor="#FFFFFF">&nbsp;
                      <input name="photo" type="file" id="photo" size="24" class="inputcss" style="background-color:#FFFFFF" />
                            (*.gif/.jpg)
                    </td>
                </tr>
                
                <tr>
                    <td width="200" height="106" bgcolor="#FFFFFF"><div align="center">Info：</div></td>
                    <td width="564" bgcolor="#FFFFFF">&nbsp;<textarea name="info" rows="9" cols="70" class="textarea"><?php echo $info[text];?></textarea></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $id;?>" >
                <tr>
                    <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center">
                    
                    <input type="submit" value="add" class="login_submit">&nbsp;&nbsp;<input type="reset" value="reset" class="login_reset"></div></td>
                </tr>
            </form>
        </table>      

    </body>
</html>
