<?php 
    date_default_timezone_set(PRC);
	@session_start(); 
	include_once("./conn/conn.php"); 
	include_once("./function.php");
	include_once("./get_language.php"); //识别浏览器语言 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="<?php echo $charset?>" />

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
                    	<li><a href="index.php" ><?php echo $home?></a>
                        	<ul class="sub_menu">
                            	
                            </ul>
                        </li>
                        <li><a href="people.php" ><?php echo $people?></a>
                        	<ul class="sub_menu">
                                <li><a href="people.php#research_staff" ><?php echo $teachers?></a></li>
                                <li><a href="people.php#graduate" ><?php echo $graduates?></a></li>
                                <li><a href="people.php#undergraduate" ><?php echo $graduated?></a></li>
                            </ul>
                        </li>
                        
                        <li><a href="news_list.php" ><?php echo $news?></a>
                        	
                        </li>
                        <li><a href="highlights_list.php" ><?php echo $highlights?></a>
                        	<ul class="sub_menu">
                            	<li><a href="highlights_detail.php" ><?php echo $latest?></a></li>
                                <li><a href="highlights_list.php" ><?php echo $high_list?></a></li>
                                
                            </ul>
                        </li>
                        <li><a href="publications_list.php" ><?php echo $pubs?></a>
                        	
                        </li>
                        <li><a href="course_list.php" ><?php echo $courses?></a>
                        	<ul class="sub_menu">
                            	<?php
                                	$sql_acc=mysql_query("select * from tb_user where usernc = '".$_SESSION["unc"]."'");
									$info_acc=mysql_fetch_array($sql_acc);
									if($info_acc!="")
									{
								?>
                                <li><a href="course_list.php" ><?php echo $course_list?></a></li>
                            	<li><a href="course_login.php?courseid=<?php echo $info_acc[courseid];?>" ><?php echo $course_acc?></a></li>   
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
                        <li><a href="meeting.php" ><?php echo $meeting?></a>
                        	
                        </li>
                        <li><a href="contact.php" ><?php echo $contact?></a>
                        </li>
                        <div id="language_change">
                        	<a href="#"><?php echo $lan?></a>
                        </div>
                    </ul>
                    
           </div>
        </div>
       </div>
    </body>