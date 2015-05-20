<?php
	include_once("./conn/conn.php");
	$sql=mysql_query("select * from tb_meeting where id=4");
	$info=mysql_fetch_array($sql);
	$hotel=explode("#",$info[hotel]);
	print_r($hotel);
	foreach($hotel as $key=>$value)
	{
		echo "<br />".$value;
	}
?>