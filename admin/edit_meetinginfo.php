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
		   if(form.name.value==""){
		     alert("请输入Name");
		     form.title.focus();
			 return(false);
		   }
		   
		   if(form.info.value==""){
		     alert("请输入Date");
		     form.date.focus();
			 return(false);
		   }
		   
		   
		 return(true);
		 
		 
		 }
	  
	  
	  </script>
      <?php
	  	$id=$_GET[id];
      	$sql=mysql_query("select * from tb_meeting where id=".$id."");
		$info=mysql_fetch_array($sql);
	  ?>
<table width="770" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        
		<form name="form1" method="post" action="save_meetinginfo.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		
		<tr>
		  <td height="40" colspan="2" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
		  </tr>
		<tr>
          <td width="200" height="79" bgcolor="#FFFFFF"><div align="center">Name：</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="name" type="text" class="txt_grey" id="title" size="70"  value="<?php echo $info[name];?>"></td>
        </tr>
        
      
        
        <tr>
          <td width="200" height="87" bgcolor="#FFFFFF"><div align="center">Photo：</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="photo" type="file" id="photo" size="24" class="inputcss" style="background-color:#FFFFFF"  value="<?php echo $info[pic];?>"/>
                    (*图片不能超过2MB,格式为.gif/.jpg)
          </td>
        </tr>
        <input name="id" type="hidden" class="txt_grey" id="title" size="70"  value="<?php echo $info[id];?>">
        <tr>
          <td width="200" height="106" bgcolor="#FFFFFF"><div align="center">Date：</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="date" type="text" class="txt_grey" id="date" size="70" value="<?php echo $info[date];?>"></td>
        </tr>
        
        <tr>
          <td width="200" height="106" bgcolor="#FFFFFF"><div align="center">Select Hotel：</div></td>
          <td width="564" bgcolor="#FFFFFF">
          <?php
          	$sql_hotel=mysql_query("select * from tb_hotel order by id");
			$info_hotel=mysql_fetch_array($sql_hotel);
			if($info_hotel=="")
			{
				echo "No Hotel!Please add hotel!";
			}
			else
			{
				do
				{
		  ?>
          &nbsp;
          <input type="checkbox" name="hotel[]" value="<?php echo $info_hotel[name];?>" checked/><?php echo $info_hotel[name];?>
          <?php
				}while($info_hotel=mysql_fetch_array($sql_hotel));
			}
		  ?>
          </td>
        </tr>
        
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="修改" class="login_submit">&nbsp;&nbsp;<input type="reset" value="重写" class="login_reset"></div></td>
        </tr>
		</form>
      </table>	  

</body>
</html>
