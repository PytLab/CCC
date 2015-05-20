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
	  $sql=mysql_query("select count(*) as total from tb_publication",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<tr>";
	     echo  "<td height=\"25\" colspan=\"4\" align=\"center\" bgcolor=\"#F7F7F7\">对不起，暂无公告！</td>";
         echo "</tr>";
	    }
	  
	   else
	    {
		  if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
		   {
		     $page=1;
		   }
		   else
		   {
		     $page=intval($_GET[page]);
		   }
		   
		   $pagesize=20;
		   
		   if($total<$pagesize)	
		   {
		     $pagecount=1;
		   }
		   else
		   {
		     if($total%$pagesize==0)
			  {
			    $pagecount=intval($total/$pagesize);
			  }
			  else
			  {
			    $pagecount=intval($total/$pagesize)+1;
			  } 
		   }
      
	  
		  
	 ?>
		<tr>
		  <td height="38" colspan="5" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
  </tr>
		<tr>
          <td width="213" height="25" align="right" bgcolor="#F7F7F7"><div align="center">Name</div></td>
     	  <td width="213" height="25" align="right" bgcolor="#F7F7F7"><div align="center">编辑Info</div></td>
          <td width="217" height="25" align="right" bgcolor="#F7F7F7"><div align="center">编辑Introduction</div></td>
          <td width="217" height="25" align="right" bgcolor="#F7F7F7"><div align="center">编辑Interest</div></td>
          <td width="217" height="25" align="right" bgcolor="#F7F7F7"><div align="center">删除</div></td>
        </tr>
	 <?php
	   $sql=mysql_query("select * from tb_people order by id desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	   while($info=mysql_fetch_array($sql))
	    {  	
	 
	 ?>	
		
        <tr>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="left">&nbsp;<?php 
		  		   echo unhtml($info[name]); 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php
		   echo "<a href='default.php?htgl=编辑Info&peopleid=".$info[id]."'>编辑</a>"; 
		  ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php echo "<a href='./people_intro_editor/blog_edit.php?id=".$info[id]."'>编辑</a>"; ?></div></td>
          <td align="right" bgcolor="#F7F7F7"><div align="center"><?php echo "<a href='./people_editor/blog_edit.php?id=".$info[id]."'>编辑</a>"; ?></div></td>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><a href="javascript:if(window.confirm('您确定删除该People么？')==true){window.location.href='deletepeople.php?id=<?php echo $info[id];?>';}"><img src="graph/delete.gif" width="22" height="22" border="0"></a></div></td>
        </tr>
	 <?php
	      }
	  	}
	  ?>
</table>
	  <?php
if($total!=0)
{
?>
<table width="770" height="40" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#909090">
  <tr>
    <td width="500" height="40" bgcolor="#909090" class="right_title"><div align="left"> 共有People&nbsp;<?php echo $total;?>&nbsp;人&nbsp;每页显示&nbsp;<?php echo $pagesize?>&nbsp;个&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页&nbsp;/共&nbsp;<?php echo $pagecount?>&nbsp;页</div></td>
    <td width="300">
	<div align="right">
	<?php
   if($page>=2)
	{
    ?>

  <a href="default.php?htgl=编辑people&page=1" title="首页"><font face="webdings"> 9 </font></a> 
  <a href="default.php?htgl=编辑people&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="default.php?htgl=编辑people&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="default.php?htgl=编辑people&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="default.php?htgl=编辑people&page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="后一页"><font face="webdings"> 8 </font></a> 
		<a href="default.php?htgl=编辑people&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
  <?php 
          }
		  }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
</body>
</html>
