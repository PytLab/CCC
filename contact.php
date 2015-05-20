<?php
	include_once("top_index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us - CCC</title>
<style>
	body{
		background-image:url(graph/Blog/grey.jpg);
		background-repeat:repeat;
	}
	:hover{
		-webkit-transition: 0.5s;
		-moz-transition: 0.5s;
		-o-transition: 0.5s;
		transition:  0.5s;
	}
	#course_main{
		margin:0 auto;
		width:950px;
		height:auto;
		margin-top:0px;
		margin-bottom:20px;
		padding-bottom:20px;
		background-color:#FFF;
		-webkit-box-shadow: #999 0px 0px  5px ;
		-moz-box-shadow: #999 0px 0px 5px ;
		box-shadow: #999 0px 0px 5px ;
		display:table;
		text-align:center;
	}
	#course_title{
		width:900px;
		margin:0 auto;
		height:110px;
		background-image:url(<?php echo $contact_ttl;?>);
	}
	#contact_info{
		width:880px;
		height:auto;
		padding:10px;
		margin:0 auto;
		margin-top:20px;
		background-color:#E9E9D1;
		-webkit-box-shadow: #999 0px 0px  15px ;
		-moz-box-shadow: #999 0px 0px 15px ;
		box-shadow: #999 0px 0px 15px ;
	}
</style>
</head>

<body>
	<div id="course_main">
    	<div id="course_title"></div>
        <div id="contact_info">
			<?php
                include_once("contact_in.php");
            ?>
        </div>
    </div>
    <div id="foot">
        	<?php include_once("footer.php");?>
    </div>
</body>
</html>