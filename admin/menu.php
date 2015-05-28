<script language="javascript">
 function change(x,y)
  {
    if(x.style.display=="none")
	 {
	   x.style.display="";
	 }
	 else if(x.style.display=="")
	  {
	   x.style.display="none";
	   y.background="images/bg_16_11.jpg";
	  }
  
  }
</script>
<table width="260" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60" background="graph/ht_function.gif">&nbsp;</td>
  </tr>
</table>
<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(s111,img_gggg)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_affiches.gif" id="img_gggg" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="s111" id="s111" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 

 <?php
	if(!($_GET[htgl]=="添加Publication" ||$_GET[htgl]=="编辑Publication" )){
?>
			  style="display:none"
			  <?php
			  }
			  ?>

>
  <tr> 
    <td width="260" height="35" bgcolor="#909090"><div align="left" class="sub_sub"><a href="default.php?htgl=添加Publication">添加Publication</a></div></td>
  </tr>
  <tr> 
    <td width="260" height="35" bgcolor="#909090"><div align="left" class="sub_sub"><a href="default.php?htgl=编辑Publication">编辑Publication</a></div></td>
  </tr>
</table>






<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(gg,img_gg)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_news.gif" id="img_gg" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="gg" id="gg" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 
 <?php
	if(!($_GET[htgl]=="添加Highlights" ||$_GET[htgl]=="编辑Highlights")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="news_editor/index.php">添加Highlights</a></div></td>
  </tr>
  <tr> 
    <td height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=编辑Highlights">编辑Highlights</a></div></td>
  </tr> 
</table>



<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(gggg,img_gggg)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_blog.gif" id="img_gggg" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="gggg" id="gggg" width="260"border="0" align="center" cellpadding="0" cellspacing="0"

 <?php
	if(!($_GET[htgl]=="编辑新闻")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>
>
   <tr> 
    <td width="260" height="35" background="images/bg_16_16.jpg"><div align="left" class="sub_sub"><a href="high_editor/index.php">添加新闻</a></div></td>
  </tr>
  <tr> 
    <td height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=编辑新闻">编辑新闻</a></div></td>
  </tr>
</table>



<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(s132,img_s132)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_people.gif" id="img_s132" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="s132" id="s132" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 
  <?php
	if(!($_GET[htgl]=="添加people" ||$_GET[htgl]=="编辑people"||$_GET[htgl]=="编辑Info")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    
    <td width="260" height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=添加people">添加people</a></div></td>
  </tr>
  <tr> 
   
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="default.php?htgl=编辑people">编辑people</a></div></td>
  </tr>
  
</table>


<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(s133,img_s133)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_meeting.gif" id="img_s133" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="s132" id="s133" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 
  <?php
	if(!($_GET[htgl]=="添加meeting" ||$_GET[htgl]=="编辑meeting"||$_GET[htgl]=="添加hotel"||$_GET[htgl]=="编辑hotel"||$_GET[htgl]=="编辑meetinginfo"||$_GET[htgl]=="编辑hotelinfo")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    
    <td width="260" height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=添加meeting">添加meeting</a></div></td>
  </tr>
  <tr> 
   
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="default.php?htgl=编辑meeting">编辑meeting</a></div></td>
  </tr>
  
  <tr> 
   
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="default.php?htgl=添加hotel">添加hotel</a></div></td>
  </tr>
  <tr> 
   
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="default.php?htgl=编辑hotel">编辑hotel</a></div></td>
  </tr>
  
</table>

<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(s134,img_s134)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_courses.gif" id="img_s134" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="s134" id="s134" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 
  <?php
	if(!($_GET[htgl]=="添加course" ||$_GET[htgl]=="编辑course"||$_GET[htgl]=="编辑course_detail"||$_GET[htgl]=="添加account")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    
    <td width="260" height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=添加course">添加Course</a></div></td>
  </tr>
  <tr> 
   
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="default.php?htgl=编辑course">编辑Course</a></div></td>
  </tr>
  <tr> 
   
    <td width="260" height="35"><div align="left" class="sub_sub"><a href="default.php?htgl=添加account">添加课程账号</a></div></td>
  </tr>
  
</table>

<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(s135,img_s135)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_coursefile.gif" id="img_s135" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="s135" id="s135" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 
  <?php
	if(!($_GET[htgl]=="编辑coursefile"||$_GET[htgl]=="添加coursefile_detail"||$_GET[htgl]=="编辑coursefile_detail")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    
    <td width="260" height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=编辑coursefile">编辑coursefile</a></div></td>
  </tr> 
</table>


<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" onclick="change(s136,img_s136)" style="cursor:hand">
  <tr> 
    <td background="graph/ht_function_sub_pic.gif" id="img_s136" class="ht_function_sub" style="background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
<table name="s136" id="s136" width="260" border="0" align="center" cellpadding="0" cellspacing="0" 
  <?php
	if(!($_GET[htgl]=="编辑pic" || $_GET[htgl]=="编辑homepic")){
?>
			  style="display:none"
			  <?php
			  }
			  ?>


>
  <tr> 
    
    <td width="260" height="35" ><div align="left" class="sub_sub"><a href="default.php?htgl=编辑pic">编辑picture</a></div></td>
  </tr> 
</table>



<table width="260" height="40" border="0" align="center" cellpadding="0" cellspacing="0" background="graph/ht_function_sub_below.gif">
  <tr>
    <td align="center"></td>
  </tr>
</table>
