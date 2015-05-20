<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" /><style>
	body{
		background:none;
		}
	#login_main{
		width:1000px;
		height:600px;
		margin:0 auto;
		margin-top:0px;
		z-index:0;
		padding-top:10px;
		background-image:url(graph/login_main2.gif);
	}
	#login_top{
		margin:0 auto;
		margin-top:60px;
		width:600px;
		height:80px;
		z-index:3;
		background-image:url(graph/login_top.gif);
		margin-bottom:0px;
	}
	#login_body{
		margin:0 auto;
		width:560px;
		height:340px;
		background-color:#e8e8e8;
		margin-top:0px;
		padding-top:30px;
		
		
	}
	#login_input{
		width:350px;
		margin:0 auto;
		margin-top:50px;
	}
	#login_input li{
		list-style-type:none;
		height:50px;
	}
	#login_input li span.login_info{
		float:left;
		width:100px;
		padding:5px 6px 0px 19px;
		font:14px;
		color:#787878;
	}
	.login_submit,.login_reset{
		width:100px;
		height:30px;
		font:15px "微软雅黑";
		font-weight:bold;
		margin:30px 10px;
		background-color:#84C1FF;
		color:#FFF;
		border:0px;
	}
	.login_submit:hover,.login_reset:hover{
		background-color:#999;
	}
	.login_submit:active,.login_reset:active{
		background-color:#004F75;
	}
	/*对input输入域样式控制*/
	input[type="search"] {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-appearance: textfield;
}

textarea {
    overflow: auto;
    vertical-align: top;
}

input,select,textarea, {
    font-weight: normal;
    
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
select,textarea,option{
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
	color:#999;
	font-family:"微软雅黑";
}

input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"]
input[type="file"]
{
    display: inline-block;
   
    
    
    
    color: #555555;
    vertical-align: middle;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
	color:#999;
	line-height:16px;
	font-family:"微软雅黑";
}




textarea {
    height: auto;
}

textarea,select,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"]
 {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
    -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
    -o-transition: border linear 0.2s, box-shadow linear 0.2s;
    transition: border linear 0.2s, box-shadow linear 0.2s;
}

textarea:focus,
select:focus,
input:focus,
.uneditable-input:focus {
    border-color: rgba(96, 190, 17, 0.80);
    outline: 0;
    outline: thin dotted \9;
    /* IE6-9 */
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(96, 190, 17, 0.60);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(96, 190, 17, 0.60);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(96, 190, 17, 0.60);
}


select,input[type="button"],input[type="submit"] {
    height: 30px;
    /* In IE7, the height of the select element cannot be changed by height, only font-size */

    *margin-top: 4px;
    /* For IE7, add top margin to align select with labels */
 
    vertical-align: middle;
}
</style>
</head>

<body>
	<script language="javascript">
 		function chkinput(form){
   			if(form.username.value==""){
   
      			alert("请输入管理员姓名!");
      			form.username.focus();
      			return(false); 
   			}
    		if(form.userpwd.value==""){
   
      			alert("请输入管理员密码!");
      			form.userpwd.focus();
      			return(false); 
   			}
			if(form.xym.value=="")
			{
     		alert("请输入验证码！");
	 		form.xym.select();
	 		return(false);
    		}
   			return(true);
 
 		}
</script>
	<div id="login_main">
    	<div id="login_top"></div>
        <div id="login_body">
          <div id="login_input">
        	<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
            	<ul>
            	<li>
                	<span class="login_info">用户名：</span>
                    <span class="login_input_info">
                    	<input type="text" name="username" size="18" class="inputcss" />
                    </span>
                </li>
                <li>
                	<span class="login_info">密码：&nbsp;&nbsp;&nbsp;</span>
                    <span class="login_input_info">
                    	<input type="password" name="userpwd" size="18" class="inputcss" />
                    </span>
                </li>
                <li>
                	<span class="login_info">验证码：</span>
                    <span class="login_input_info">
                    	<input type="text" name="xym" size="10" class="inputcss" />
                    </span>
                    <span id="check_image">
                    	<img src="xym1.php">
                    </span>
                </li>
            	<li>
            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="立即登录" class="login_submit"/>
                    <input type="reset" name="reset" value="重填信息" class="login_reset"/>
                </li>
            </ul>
        
            </form>
           
          </div>
        </div>
    </div>
</body>
</html>