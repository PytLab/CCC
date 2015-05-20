<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='./index.php';</script>";
  exit;
 }
 $id=$_GET[id];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
	 <script language="javascript">
	 
	   function chkinput(form){
	   
	     if(form.softname.value==""){
		     alert("入资源标题不能为空！");
		     form.softname.focus();
			 return(false);
		 
		 }
		 
		   
	     if(form.content.value==""){
		     alert("资源信息不能为空！");
		     form.content.focus();
			 return(false);
		 
		 }
		   
	     if(form.address.value==""){
		     alert("资源地址不能为空！");
		     form.address.focus();
			 return(false);
		 
		 }
	   
	   return(true);
	   }
	 
	 
	 </script> 
      <?php
        	$sql=mysql_query("select * from tb_coursefile where id=".$id."");
			$info=mysql_fetch_array($sql);//get course info from db
	  ?>
	<table width="770" border="0" align="center" cellpadding="9" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        <form name="form1" method="post" action="save_edit_coursefile.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
        
		<tr>
		  <td height="40" align="center" class="right_title" bgcolor="#909090" colspan="2"><?php echo "添加".$info_course[name]."资源";?></td>
		  </tr>
		<tr>
          <td width="116" height="25" bgcolor="#FFFFFF"><div align="center">课程资源名称：</div></td>
          <td width="436" bgcolor="#FFFFFF">&nbsp;
          <input type="text" name="filename" size="50" class="txt_grey" value="<?php echo $info[title];?>"></td>
        </tr>
        <tr>
          <td height="150" bgcolor="#FFFFFF"><div align="center">课程资源信息：</div></td>
          <td height="150" bgcolor="#FFFFFF">&nbsp;<textarea name="content" rows="10" cols="60" class="textarea"><?php echo $info[content];?></textarea></td>
        </tr>
       
        <input name="id" type="hidden" value="<?php echo $id;?>" >
         <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">资源文件：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="file" size="50" class="txt_grey" value="<?php echo $info[file];?>"></td>
        </tr>
       
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="login_submit">&nbsp;&nbsp;<input type="reset" value="重写" class="login_submit"></div></td>
        </tr>
		</form>
</table>  
	  
	  
</body>
</html>
