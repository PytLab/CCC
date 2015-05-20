<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('Permission Denied!');window.location.href='../index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
	  <script language="javascript">
	     function chkinput(form){
		   if(form.name.value==""){
		     alert("Please input Name");
		     form.title.focus();
			 return(false);
		   }
		   if(form.teacher.value==""){
		     alert("Please input Teacher");
		     form.teacher.focus();
			 return(false);
		   }
		   
		 return(true);
		 
		 
		 }
	  
	  
	  </script>
<table width="770" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        
		<form name="form1" method="post" action="save_account.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		
		<tr>
		  <td height="40" colspan="2" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
		  </tr>
		<tr>
          <td width="200" height="79" bgcolor="#FFFFFF"><div align="center">Name:</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="name" type="text" class="txt_grey" id="title" size="70"></td>
        </tr>
        
      <tr>
          <td width="200" height="79" bgcolor="#FFFFFF"><div align="center">Password:</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="pwd" type="text" class="txt_grey" id="pwd" size="70"></td>
        </tr>
        
        <tr>
          <td width="200" height="87" bgcolor="#FFFFFF"><div align="center">Select Course:</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          	<?php
          	$sql_course=mysql_query("select * from tb_course order by id");
			$info_course=mysql_fetch_array($sql_course);
			if($info_course=="")
			{
				echo "No course!";
			}
			else
			{
				do
				{
		  ?>
          &nbsp;
          <input type="radio" name="course" value="<?php echo $info_course[id];?>" checked/><?php echo $info_course[name];?>
          <?php
				}while($info_course=mysql_fetch_array($sql_course));
			}
		  ?>
          </td>
        </tr>
        
        
        
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center">
            
          <input type="submit" value="add" class="login_submit">&nbsp;&nbsp;<input type="reset" value="reset" class="login_reset"></div></td>
        </tr>
		</form>
      </table>	  

</body>
</html>
