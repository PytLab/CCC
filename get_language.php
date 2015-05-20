<?php
    /*进行浏览器语言判断*/
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
	if (preg_match("/zh-c/i", $lang))  //简体中文
	    include("./language/ch/global.ln");
	else if (preg_match("/en/i", $lang))   //英文
	    include("./language/en/global.ln");
?>