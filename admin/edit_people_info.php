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
		   
		   if(form.info.value==""){
		     alert("Please input Info");
		     form.content.focus();
			 return(false);
		   }
		   
		   
		 return(true);
		 
		 
		 }
	  
	  
	  </script>
      <?php
	  	$id=$_GET[peopleid];
      	$sql=mysql_query("select * from tb_people where id = ".$id."");
		$info=mysql_fetch_array($sql);								//get the one's info from database
	  ?>
<table width="770" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#D4D4D4">
        
		<form name="form1" method="post" action="save_edit_people_info.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		
		<tr>
		  <td height="40" colspan="2" align="center" class="right_title" bgcolor="#909090"><?php echo $htgl;?></td>
		  </tr>
		<tr>
          <td width="200" height="48" bgcolor="#FFFFFF"><div align="center">Name:</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="name" type="text" class="txt_grey" id="title" size="70" value="<?php echo $info[name]; ?>"></td>
        </tr>
        <tr>
          <td width="200" height="48" bgcolor="#FFFFFF"><div align="center">Truename：</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          <input name="truename" type="text" class="txt_grey" id="title" size="70" value="<?php echo $info[truename];?>"></td>
        </tr>
        <tr>
          <td width="200" height="48" bgcolor="#FFFFFF"><div align="center">Type:</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          	<select name="type" class="search_select">
               <option value="0" <?php if($info[people_type]==0){echo "selected";}?>>Research_Staff</option>
               <option value="1" <?php if($info[people_type]==1){echo "selected";}?>>Graduate_Student</option>
               <option value="2" <?php if($info[people_type]==2){echo "selected";}?>>UndergraduateStudent</option>
            </select>
          </td>
        </tr>
        
     	<tr>
          <td width="200" height="48" bgcolor="#FFFFFF"><div align="center">Photo:</div></td>
          <td width="564" bgcolor="#FFFFFF">&nbsp;
          	<input name="photo" type="file" id="photo" size="24" class="inputcss" style="background-color:#FFFFFF" />
                    (*<2MB,.gif/.jpg,1:1)
          </td>
        </tr>
        
       
        
        <input type="hidden" name="peopleid" value="<?php echo $id;?>">
        <tr>
          <td height="55" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="edit" class="login_submit">&nbsp;&nbsp;<input type="reset" value="reset" class="login_reset"></div></td>
        </tr>
		</form>
      </table>	  

</body>
</html>
