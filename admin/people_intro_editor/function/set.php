<?php
@ini_set('default_charset', 'utf-8');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(PHP_VERSION < "4.1.0"){
  $_GET = &$HTTP_GET_VARS;
  $_POST = &$HTTP_POST_VARS;
  $_COOKIE = &$HTTP_COOKIE_VARS;
  $_SERVER = &$HTTP_SERVER_VARS;
  $_ENV = &$HTTP_ENV_VARS;
  $_FILES = &$HTTP_POST_FILES;
}

$web_http = 'http://'.(!empty($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST']);
$web['path'] = dirname($web_http.$_SERVER['SCRIPT_NAME']).'/';  //路径
//设置
$web['max_file_size'][15] = 5120;  //限定上传图片尺寸（单位KB）
$web['max_file_size'][16] = 100;  //限定上传动画尺寸（单位KB）
$web['max_file_size'][17] = 100;  //限定上传影音文件尺寸（单位KB）
$web['max_file_size'][18] = 100;  //限定上传其它文件尺寸（单位KB）
$web['_17_type'] = 'wav|wma|wmv|mid|midi|avi|mp3|mpg|mpeg|asf|asx|mov|rm|rmvb|ram|ra';  //设置允许上传的影音文件类型，用|分开写
$web['_18_type'] = 'rar|zip|doc|xls|chm|hlp';  //设置允许上传的其它文件类型，用|分开写
$web['list_wordcount'] = 50000;  //文章限定字符数，建议限制

?>