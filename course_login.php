<?php
    include_once("top_index.php");
    $courseid=$_GET[courseid];
    $sql_c=mysql_query("select * from tb_course where id=".$courseid."");
    $info_c=mysql_fetch_array($sql_c);//get course info 
?>
<head>
    <title><?php echo $course_ttl;?></title>
</head>
<html>
    <body>
        <div align="center" id="login_state2">
            <div id="little_box">                       
                <?php 
                    if($_SESSION["unc"]==""){
                ?>
                <script language="JavaScript" type="text/javascript">
                    function submitu(form){
                        if(form.usernc.value=="")
                        {
                            alert("Please input your ID");
                            form.usernc.select();
                            return(false);
                        }
                        if(form.userpwd.value=="")
                        {
                            alert("Please input your passwords！");
                            form.userpwd.select();
                            return(false);
                        }
                        if(form.xym.value=="")
                        {
                            alert("Please enter the verification code！");
                            form.xym.select();
                            return(false);
                        }
                        return(true);     
                    }
                </script>
                <script language="JavaScript" type="text/javascript">
                    function openfindpwd()
                    {
                        window.open("openfindpwd.php","newframe","left=200,top=200,width=500,height=150,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
                    }
                </script>
                <form action="dl.php" method="post" name="form1" id="form1" onSubmit="return submitu(this)">
                    <ul>
                        <li>
                            <span>Please log in to get resources of &nbsp;<strong><font color="#AD5C5C"><?php echo $info_c[name];?></font></strong>&nbsp;!</span>
                        </li>
                        <li>
                            <span class="login_info">ID&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp：&nbsp;&nbsp;&nbsp</span>
                            <span class="login_input_info">
                                <input type="text" name="usernc" size="18" class="inputcss" />
                            </span>
                        </li>
                        <li>
                            <span class="login_info">Passwords：&nbsp;&nbsp;&nbsp;</span>
                            <span class="login_input_info">
                                <input type="password" name="userpwd" size="18" class="inputcss" />
                            </span>
                        </li>
                        <input type="hidden" name="courseid" value="<?php echo $courseid;?>" />
                        <li>
                            <span class="login_info">Vertification Code：</span>
                            <span class="login_input_info">
                                <input type="text" name="xym" size="10" class="inputcss" />
                            </span>
                            <span id="check_image">
                                <img src="xym1.php">
                            </span>
                        </li>
                        <li>
                            <input type="submit" name="submit" value="Login" class="login_submit" style="width:100px"/>
                        </li>
                        <li></li>       
                    </ul>
                </form>
                
                <?php
                    }
                    else
                    {
                        $sqlu=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'and courseid=".$courseid,$conn);
                        $infou=mysql_fetch_array($sqlu);
                        if($infou=="")
                        {
                            echo "<div align=\"center\" style=\"margin-top:100px;\">Oops!(;￢д￢)<br /><br />&nbsp;Your account is not matched~<br /><br />눈_눈Please use correct account!</div>
        ";
                            echo "<script>alert('Ooops!\\n\\nPermission denied!\\n\\n눈_눈Please operate correctly!');history.go(-1);</script>";
                        }
                        else
                        {
                ?>
                <ul>
                   <li>
                        <span class="zhuce">Welcome&nbsp;&nbsp;<?php echo $infou["usernc"];?>!&nbsp;&nbsp;&nbsp;You have loged in!</span>
                   </li>
                   <li>
                        <span class="zhuce">Date：<?php echo date("Y-m-d");?></span>
                   </li>
                   <li>
                        <span class="zhuce">Log Time:</span>
                   </li>
                   <li>
                        <span class="zhuce">
                             <?php echo $infou[lastlogintime];?>
                        </span>
                   </li>
                   <div class="button_change_quit">
                        <li>
                            <span><a href="logout" class="logout">Logout</a></span>
                        </li>
                        <li>
                            <span>&nbsp;</span>
                        </li>
                   </div>
                </ul>
                <div id="btn_go">
                    <a href="coursefile<?php echo $courseid;?>">
                        Resources->
                    </a>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>

        <div id="foot">
            <?php include_once("footer.php");?>
        </div>
    </body>
</html>                       
        