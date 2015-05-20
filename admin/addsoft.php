<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('禁止非法登录!');window.location.href='./index.php';</script>";
  exit;
 }
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
		     alert("请输入软件主题！");
		     form.softname.focus();
			 return(false);
		 
		 }
		 
		   
	     if(form.content.value==""){
		     alert("请输入软件简介！");
		     form.content.focus();
			 return(false);
		 
		 }
		   
	     if(form.address.value==""){
		     alert("请选择软件地址！");
		     form.address.focus();
			 return(false);
		 
		 }
	   
	   return(true);
	   }
	 
	 
	 </script> 
	<table width="770" border="0" align="center" cellpadding="9" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        <form name="form1" method="post" action="savesoft.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
        
		<tr>
		  <td height="40" align="center" class="right_title" bgcolor="#909090" colspan="2"><?php echo $htgl;?></td>
		  </tr>
		<tr>
          <td width="116" height="25" bgcolor="#FFFFFF"><div align="center">软件名称：</div></td>
          <td width="436" bgcolor="#FFFFFF">&nbsp;
          <input type="text" name="softname" size="50" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="150" bgcolor="#FFFFFF"><div align="center">内容简介：</div></td>
          <td height="150" bgcolor="#FFFFFF">&nbsp;<textarea name="content" rows="10" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">软件地址：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="file" name="address" size="38" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">软件图片：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="file" name="photo" size="38" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="login_submit">&nbsp;&nbsp;<input type="reset" value="重写" class="login_submit"></div></td>
        </tr>
		</form>
</table>  
	  
	  
</body>
</html>
