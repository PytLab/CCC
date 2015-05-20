<?php 
    date_default_timezone_set(PRC);
	@session_start(); 
	include_once("./conn/conn.php"); 
	include_once("./function.php");
	include_once("./get_language.php"); //识别浏览器语言 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./css/main.css" rel="stylesheet" type="text/css" />
<style>
	#head_bottom_meeting{
		width:100%;
		height:30px;
		background-color:#093f7f;
	}
</style>
</head>

<body >
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
            <div id="head_bottom_meeting">
           	</div>
        </div>
       </div>
    </body>