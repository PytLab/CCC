<?php
	$id=1;
	include_once("../conn/conn.php");
	$sql=mysql_query("select * from tb_people where id='".$id."'",$conn);
	$info=mysql_fetch_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<title>头像修改</title>
<style type="text/css">
<!--
body,td,th {
	font-size:12px;
	font-family:"微软雅黑";
	color:#999999;
}
a { color:#0099FF; }
-->
</style>
<script type="text/javascript" language="javascript">
<!--
function getCookie(name){
  var arr=document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
  if(arr!=null && arr!=false) return decodeURIComponent(arr[2]);
  return false;
}
window.onload=function(){
  var screenshotsImg=getCookie('162100screenshotsImg');
  var screenshotsSrc='<?php echo $info[photo];?>'
  if(document.getElementById('screenshotsShow')!=null){
    document.getElementById('screenshotsShow').innerHTML='<img src="'+screenshotsSrc+'" />';
  }
}
-->
</script>

</head>
<body>
<table width="870" height="70" align="center" background="../graph/BBS/bbs_top.gif" >
	
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="jszc_title">用户头像修改</span></td>
  </tr>
</table>
<table width="870" border="0" cellspacing="20" cellpadding="0" align="center" bgcolor="#F6F6F6">
  <tr>
    <td width="500" height="308" align="center"><iframe src="start.html" width="450" height="300" frameborder="0" scrolling="no"></iframe></td>
    <td width="370" align="left"><div id="screenshotsShow"></div>
    <h3> &nbsp;&nbsp;&nbsp;现使用头像</h3>
    <ul>
    	<li>上传图片格式应为jpeg,png,gif(推荐使用gif)</li>
        <li>头像图片大小不得超过2M</li>
    </ul>
      </td>
  </tr>
</table>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>