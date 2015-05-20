<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='../index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
	* {  word-break:break-all; }
</style>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<table width="770" height="81" border="0" align="center" cellpadding="9" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D4D4D4" class="look_cjwt">
	   <?php
	  include_once("../conn/conn.php");
	  include_once("function.php");  
	  $sql=mysql_query("select count(*) as total from tb_homepic",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<tr>";
	     echo  "<td height=\"25\" colspan=\"4\" align=\"center\" bgcolor=\"#F7F7F7\">对不起，暂无图片！</td>";
         echo "</tr>";
	    }
	  
	   else
	    {
		  
	 ?>
		<tr>
		  <td height="38" colspan="5" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
  </tr>
		<tr>
          <td width="100" height="25" align="right" bgcolor="#F7F7F7"><div align="center">Picture_Number</div></td>
     	  <td width="213" height="25" align="right" bgcolor="#F7F7F7"><div align="center">Text</div></td>
          <td width="100" height="25" align="right" bgcolor="#F7F7F7"><div align="center">编辑</div></td>
         
        </tr>
	 <?php
	   $sql=mysql_query("select * from tb_homepic order by id desc ",$conn);
	   while($info=mysql_fetch_array($sql))
	    {  	
	 
	 ?>	
		
        <tr>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center">&nbsp;<?php 
		  		   echo unhtml($info[num]); 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php
		   echo $info[text]; 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php echo "<a href='default.php?htgl=编辑homepic&id=".$info[id]."'>编辑</a>";  ?></div></td>
          
        </tr>
	 <?php
	      }
	  	}
	  ?>
</table>

</body>
</html>
