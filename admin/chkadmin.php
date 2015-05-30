<?php
	header ( "Content-type: text/html; charset=utf8" ); 
	session_start();
	$username=$_POST[username];
	$userpwd=md5(trim($_POST[userpwd]));
	$ip=$_SERVER["REMOTE_ADDR"];
	$xym=trim($_POST[xym]);
	
	if(strval($xym)!=$_SESSION["autonum1"])
	{
		//echo strval($xym)." | ".$_SESSION["autonum1"];
		echo "<script>alert('Wrong Vertification Code!');history.go(-1);</script>";
		exit;
	}
	
	include_once("../conn/conn.php");
	
	$sql=mysql_query("select usernc from tb_user where usernc='".$username."' and pwd='".$userpwd."' and usertype=2", $conn);
	$info=mysql_fetch_array($sql);
	if($info==false)
	{
	  echo "<script>alert('Oops!Wrong Password!');history.back();</script>";
	  exit;
	}
	else
	{
		$lastlogintime=date("Y-m-j H:i:s");
		mysql_query("update tb_user set ip='$ip',lastlogintime='$lastlogintime',logintimes=logintimes+1 where usernc='".$username."'", $conn);
		session_register("admin_nc");
		$_SESSION["admin_nc"]=$username; 
		echo "<script>window.location.href='default.php';</script>";
	}
?>