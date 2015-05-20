<?php date_default_timezone_set(PRC);@session_start(); include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<script type=text/javascript>
	function menuFix() 
	{
		var sfEls = document.getElementById("menu").getElementsByTagName("li");
		for (var i=0; i<sfEls.length; i++) 
		{
    		sfEls[i].onmouseover=function() 
			{
    			this.className+=(this.className.length>0? " ": "") + "sfhover";
   	 		}
   			sfEls[i].onMouseDown=function() 
			{
    			this.className+=(this.className.length>0? " ": "") + "sfhover";
    		}
    		sfEls[i].onMouseUp=function() 
			{
    			this.className+=(this.className.length>0? " ": "") + "sfhover";
    		}
    		sfEls[i].onmouseout=function() 
			{
    			this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"),"");
    		}
		}
	}
window.onload=menuFix;

</script>-->
<link href="./css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="main">
    	<div id="head">
        	<div id="head_top">
            	<div id="search">
					<?php
                        include_once("search_inweb.html");
                    ?>
                </div>
                <div id="logo"><a href="index.php"></a></div>
            </div>
            <div id="head_bottom">
            	<div id="head_nav">
                	<ul id="menu">
                    	<li><a href="index.php" >Home</a>
                        	<ul class="sub_menu">
                            	
                            </ul>
                        </li>
                        <li><a href="people.php" >People</a>
                        	<ul class="sub_menu">
                            	
                                <li><a href="people.php#research_staff" >Research Staff</a></li>
                                <li><a href="people.php#graduate" >Graduate Students</a></li>
                                <li><a href="people.php#undergraduate" >Undergraduate Students</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="news_list.php" >News</a>
                        	
                        </li>
                        <li><a href="highlights_list.php" >Highlights</a>
                        	<ul class="sub_menu">
                            	<li><a href="highlights_detail.php" >Latest</a></li>
                                <li><a href="highlights_list.php" >Highlights List</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="publications_list.php" >Publications</a>
                        	
                        </li>
                        <li><a href="course_list.php" >Courses</a>
                        	<ul class="sub_menu">
                            	<?php
                                	$sql_acc=mysql_query("select * from tb_user where usernc = '".$_SESSION["unc"]."'");
									$info_acc=mysql_fetch_array($sql_acc);
									if($info_acc!="")
									{
								?>
                                <li><a href="course_list.php" >Course List</a></li>
                            	<li><a href="course_login.php?courseid=<?php echo $info_acc[courseid];?>" >Your Account</a></li>   
                                <?php
									}
									else
									{
								?>
										
                                <?php
									}
								?>
                            </ul>
                        </li>
                        <li><a href="meeting.php" >Meeting</a>
                        	
                        </li>
                        <li><a href="contact.php" >Contact</a>
                        </li>
                        <div id="language_change">
                        	<a href="#">Chinese</a>
                        </div>
                    </ul>
                    
           </div>
        </div>
       </div>
    </body>