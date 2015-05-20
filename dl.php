<?php
date_default_timezone_set(PRC);
header ( "Content-type: text/html; charset=utf8" ); 
session_start();
$xym=trim($_POST[xym]);

class chkuser
{
   
   var $usernc;
   var $userpwd;
   var $xym;
   var $num;
   var $courseid;
  function chkuser($x,$y,$m,$c)
   {
    $this->usernc=$x;
    $this->userpwd=$y;
	$this->xym=$m;
	$this->courseid=$c;
   }
   function chkinput()
   {
   
     if(strval($this->xym)!=$_SESSION["autonum1"])
      {
        echo "<script>alert('Wrong Vertification Code!');history.go(-1);</script>";
        exit;
      }
   
     include_once("./conn/conn.php");
	 $sql=mysql_query("select usernc from tb_user where usernc='".$this->usernc."'",$conn);
	 $info=mysql_fetch_array($sql);
	 if($info==false)
	  {
	    echo "<script>alert('Sorry，This ID dosen't exist!');history.back();</script>";
	    exit;
	  }
	  else
	  { 
	    $sql=mysql_query("select usernc from tb_user where usernc='".$this->usernc."' and pwd='".$this->userpwd."'",$conn);
	    $info=mysql_fetch_array($sql);
	    if($info==false)
		 {
		   echo "<script>alert('Wrong Password!');history.back();</script>";
		   exit;
		 }
		 else
		 {
			 $sql=mysql_query("select usernc from tb_user where usernc='".$this->usernc."' and pwd='".$this->userpwd."' and courseid='".$this->courseid."'",$conn);
	    	$info=mysql_fetch_array($sql);
	    	if($info==false)
			 {
			   echo "<script>alert('Course Permission Denied!');history.back();</script>";
			   exit; 
			 }
			else
			 { 
				 //date_default_timezone_set("Asia/Hong_Kong");
				 $lastlogintime=date("Y-m-j H:i:s");
				 $ip=$_SERVER["REMOTE_ADDR"];
                 mysql_query("update tb_user set ip='".$ip."', lastlogintime='".$lastlogintime."',logintimes=logintimes+1 where usernc='".$this->usernc."'",$conn); 
				 if($_SESSION["unc"]!=""){
				  session_unregister("unc");
				 }   
			  
				 session_register("unc");
				 
				 $_SESSION["unc"]=$this->usernc; 
				 echo "<script>alert('Login Successfully!');history.go(-1);</script>";
			 } 
		 }
	  }
	    
       mysql_close($conn);   
   } 
 }
 $chk=new chkuser($_POST[usernc],md5($_POST[userpwd]),$xym,$_POST[courseid]);
 $chk->chkinput();
?>
