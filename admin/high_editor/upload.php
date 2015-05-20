<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
﻿<?php
//header("Content-type: text/html; charset=utf-8");
require_once ('function/set.php');

if(!$_REQUEST['in_id'] || $_REQUEST['in_id']<15 || $_REQUEST['in_id']>18)
  die('<script>alert("出现错误！请暂时停止上传。文件类型参数缺失");</script>');
$inis = ini_get_all();
$uploadmax=$inis['upload_max_filesize'];
/*
[global_value] => 2M
[local_value] => 2M
[access] => 6
*/
if(!is_array($_FILES['uploadfile']) || !$_FILES['uploadfile']['size'])
  die('<script>alert("出现错误！请暂时停止上传。\n原因分析：\n1、上传数组参数为空 \n2、文件超过系统最大上传限量'.$uploadmax['global_value'].'（'.$uploadmax['local_value'].'）");</script>');
if(!is_numeric($web['max_file_size'][$_REQUEST['in_id']]))
  $web['max_file_size'][$_REQUEST['in_id']]=100;
if($_FILES['uploadfile']['size']>($web['max_file_size'][$_REQUEST['in_id']]*1000))
  die('<script> alert("对不起，上传的文件请小于'.$web['max_file_size'][$_REQUEST['in_id']].'KB"); </script>');

switch($_REQUEST['in_id']){
  case 15:
    $reg='gif|jpg|png';
    break;
  case 16:
    $reg='swf';
    break;
  case 17:
    if($web['_17_type'])
      $reg=$web['_17_type'];
    else
      $reg='wav|wma|wmv|mid|midi|avi|mp3|mpg|mpeg|asf|asx|mov|rm|rmvb|ram|ra';
    break;
  default:
    if($web['_18_type'])
      $reg=$web['_18_type'];
    else
      $reg='rar|zip|doc|xls|chm|hlp';
    break;
}
  
if(!preg_match('/\.('.$reg.')$/i',$_FILES['uploadfile']['name'],$matches))
  die('<script>alert("提示！请选择一个有效的文件：允许的格式'.$_REQUEST['in_id'].'有（'.$reg.'）");</script>');

//上传路径
$upload_dir='upload/';
//文件命名
$upload_filename=date('YmdHis').$_FILES['uploadfile']['size'].'.'.$matches[1];

if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],''.$upload_dir.$upload_filename)) {
 
 if (preg_match('/<\?php|eval|POST|include|require|\.php|\.asp|\.jsp|base64_decode|base64_encode/i', @file_get_contents($upload_dir.$upload_filename), $m_err)) {
    @unlink($upload_dir.$upload_filename.'.'.$t);
    die('<script>alert("提示！禁止提交。该文件含有禁止的代码'.str_replace('?', '\?', $m_err[0]).'！");</script>。');
  }

  die('
  <script language="javascript" type="text/javascript">
  <!--
  try{
    window.parent.insertFile("'.$web['path'].$upload_dir.$upload_filename.'","'.$_REQUEST['in_id'].'");
    alert("上传成功！");
  }catch(err){
    alert(err);
  }
  -->
  </script>');
}else{
  die('<script> alert("出现错误！请暂时停止上传"); </script>');
}
?>
</body>
</html>
