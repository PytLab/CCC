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
		   
		     if(form.author.value==""){
			 
			   alert("请输入作者名称！");
			   form.author.focus();
			   return(false);
			 }
			 
			 if(form.question.value==""){
			 
			   alert("请输入问题！");
			   form.question.focus();
			   return(false);
			 }
			 
			  if(form.answer.value==""){
			 
			   alert("请输入问题答案！");
			   form.answer.focus();
			   return(false);
			 }
			 
		   return(true);
		   
		   }	  	  
	  </script>
<table width="770" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        
		<form name="form1" method="post" action="savecjwt.php" onSubmit="return chkinput(this)">
      <tr>
          <td height="40" colspan="3" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
        </tr>
        <tr>
          <td width="117" height="25" bgcolor="#FFFFFF"><div align="center">作者：</div></td>
          <td width="435" height="25" bgcolor="#FFFFFF">&nbsp;
          <input type="text" name="author" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="140" bgcolor="#FFFFFF"><div align="center">问题：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<textarea name="question" rows="10" cols="70" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="140" bgcolor="#FFFFFF"><div align="center">答案：</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<textarea name="answer" rows="10" cols="70" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" class="login_submit">&nbsp;&nbsp;<input type="reset" value="重写" class="login_reset"></div></td>
        </tr>
		</form>
</table>	 
</body>
</html>
