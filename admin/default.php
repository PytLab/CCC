<?php
include_once("top_admin.php");
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('Permission Denied!Please Login!');window.location.href='index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
	#main_table{
		-webkit-box-shadow: #999 0px 0px 5px;
		-moz-box-shadow: #999 0px 0px 5px;
		box-shadow: #999 0px 0px 5px;
		margin-bottom:20px;
	}
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
 
<table width="1030" border="0" align="center" cellpadding="0" cellspacing="0" id="main_table">
  <tr>
    <td width="260" align="right" valign="top" bgcolor="#1b1b1b">
		<?php include_once("menu.php");?>
    </td>
    <td width="770" valign="top">
		<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
      		<tr>
        		<td height="60" colspan="3" background="graph/ht_right_location.gif"><table width="625" height="40" border="0" cellpadding="0" cellspacing="0">
        		  <tr>
        		    <td width="130" rowspan="2" style="color:#FFF; font-size:18px; font-weight:bold;"><table width="625" height="40" border="0" cellpadding="0" cellspacing="0">
        		      <tr>
        		        <td width="101" rowspan="2" style="color:#FFF; font-size:18px;
                        font-weight:200; ">&nbsp;&nbsp; 当前位置:</td>
        		        <td width="524" height="37" style="color:#FFF; font-size:18px; font-weight:200;"><?php echo $_GET['htgl'];?></td>
      		        </tr>
      		      </table></td>
        		  </tr>
        		</table></td>
      		</tr>
      		<tr>
        		<td width="770" height="450" align="center" valign="top">
					<?php include("wzdh.php");?>
				</td>
        		
      		</tr>
      		<tr>
        		<td colspan="3"></td>
        	</tr>
    	</table>
     </td>
  </tr>
</table>
<table width="830" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"></td>
  </tr>
</table>

<map name="Map"><area shape="rect" coords="732,114,808,136" href="logout.php">
</map></body>
</html>
