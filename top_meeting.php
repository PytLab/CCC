<?php 
    date_default_timezone_set(PRC);
	@session_start(); 
	include_once("./conn/conn.php"); 
	include_once("./function.php");
	include_once("./get_language.php"); //识别浏览器语言 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="renderer" content="webkit" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
        <link href="./css/meeting.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="icon.ico" />
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
                    <div id="logo"><a href="home"></a></div>
                </div>
                <div id="head_bottom_meeting">
               	</div>
            </div>
        </div>
    </body>
<html/>