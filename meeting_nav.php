<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	
	
	.nav_box{
		background-color:#999;
		/*background-color:#446d93;*/
		display:block;
		width:170px;
		height:35px;
		list-style-type:none;
		text-align:center;
		padding-top:15px;
		border-bottom:1px #FFFFFF solid;
		color:#FFF;
	}
	.nav_box_top{
		background-color:#888888;
		/*background-color:#446d93;*/
		display:block;
		width:170px;
		height:35px;
		list-style-type:none;
		text-align:center;
		padding-top:15px;
		border-bottom:1px #FFFFFF solid;
		color:#FFF;	
	}
	.nav_box:hover{
		/*background-color:#6ba2c1;*/
		background-color:#666;
		-webkit-transition: 0.5s;
		-moz-transition: 0.5s;
		-o-transition: 0.5s;
		transition:  0.5s;
	}
	a{
		text-decoration:none;
	}
</style>
</head>

<body>  
	<div class="nav_box_top"></div>  	
    <a href="meeting.php?szj=Introduction"><div class="nav_box" 
    	<?php
			if(($_GET[szj]=="Introduction"||$_GET[szj]=="")){
		?>
			style="background-color:#666666"			  
		<?php
			}
		?>
    >Introduction</div></a>
    
    <a href="meeting.php?szj=Program"><div class="nav_box"
    	<?php
			if(($_GET[szj]=="Program")){
		?>
			style="background-color:#666666"			  
		<?php
			}
		?>
    >Program</div></a>
    <a href="meeting.php?szj=Accommodation"><div class="nav_box" 
    	<?php
			if(($_GET[szj]=="Accommodation")){
		?>
			style="background-color:#666666"			  
		<?php
			}
		?>
    >Accommodation</div></a> 
    <a href="index.php"><div class="nav_box"><-&nbsp;Homepage</div></a>            
</body>
</html>