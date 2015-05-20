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
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
	  <script language="javascript">
	     function chkinput(form){
		   if(form.title.value==""){
		     alert("请输入公告标题");
		     form.title.focus();
			 return(false);
		   }
		   
		   if(form.content.value==""){
		     alert("请输入公告内容");
		     form.content.focus();
			 return(false);
		   }
		   
		 return(true);
		 
		 
		 }
	  
	  
	  </script>
<table width="770" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        
		<form name="form1" method="post" action="savetell.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		
		<tr>
		  <td height="40" colspan="2" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
		  </tr>
		<tr>
          <td width="200" height="48" bgcolor="#FFFFFF"><div align="center">Publication标题：</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="title" type="text" class="txt_grey" id="title" size="70"></td>
        </tr>
        
        <tr>
          <td height="201" bgcolor="#FFFFFF"><div align="center">Author：</div></td>
          <td height="201" bgcolor="#FFFFFF">&nbsp;<textarea name="author" rows="9" cols="70" class="textarea"></textarea></td>
        </tr>
        
        <tr>
          <td height="201" bgcolor="#FFFFFF"><div align="center">Publication链接：</div></td>
          <td height="201" bgcolor="#FFFFFF">&nbsp;<textarea name="link" rows="9" cols="70" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="201" bgcolor="#FFFFFF"><div align="center">Publication信息：</div></td>
          <td height="201" bgcolor="#FFFFFF">&nbsp;<textarea name="details" rows="9" cols="70" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="201" bgcolor="#FFFFFF"><div align="center">发表时间：</div></td>
          <td height="201" bgcolor="#FFFFFF">&nbsp;<input name="pub_time" id="pubtime" type="text" size="70"></td>
        </tr>
        
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">文章：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="file" name="paper" size="38" class="txt_grey"></td>
        </tr>
        
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="login_submit">&nbsp;&nbsp;<input type="reset" value="重写" class="login_reset"></div></td>
        </tr>
		</form>
      </table>	  

</body>
</html>
