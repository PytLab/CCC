<?php
	include_once("top_index.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $contact;?></title>
		<style>
			body{
				background-image:url(graph/Blog/grey.jpg);
				background-repeat:repeat;
			}
			#course_title{
				background-image:url(<?php echo $contact_ttl;?>);
			}
		</style>
	</head>

	<body>
		<div id="course_main">
	    	<div id="course_title"></div>
	        <div id="contact_info">
				<?php include_once("contact_in.php");?>
	        </div>
	    </div>
	    <div id="foot">
	        <?php include_once("footer.php");?>
	    </div>
	</body>
</html>