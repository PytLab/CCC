

/* 162100论坛编辑器 */
/* 162100源码 - 162100.com - download.162100.com */



var path = (typeof(path) != 'undefined') ? path : ''; //路径

if (typeof(uploadPower) != 'undefined') {
  var iuploadPower = (uploadPower == 'yes') ? '' : ' onclick="alert(\'等级分达到'+uploadPower+'才能上传\');return false;"'; //上传权限http://info.162100.com/应用
} else {
  var iuploadPower = ''; //上传权限http://info.162100.com/应用
}

var maxWordCount = (typeof(liMaxCount) != 'undefined' && !isNaN(liMaxCount)) ? liMaxCount : 50000; //最多字符数限制
var eSizeXSize = (typeof(eXSize) != 'undefined' && !isNaN(eXSize)) ? eXSize : 588; //编辑器默认水平宽度
/*
var now= new Date();
var uploadTemp = now.getFullYear().toString()+''+(now.getMonth()+1).toString().replace(/^(\d{1})$/, '0$1')+''+now.getDate().toString().replace(/^(\d{1})$/, '0$1')+''+now.getHours().toString().replace(/^(\d{1})$/, '0$1')+''+now.getMinutes().toString().replace(/^(\d{1})$/, '0$1')+''+now.getSeconds().toString().replace(/^(\d{1})$/, '0$1');
*/

/* 编辑器样式 */
document.writeln('\
<style type="text/css">\
<!--\
#mainform162100 { text-align:left; font-family:Microsoft YaHei;}\
#editor162100_ { position:relative; text-align:center; }\
#editor162100_ table { table-layout:fixed; }\
#editor162100_ img { border:none; vertical-align:middle; }\
#editor162100_ form { margin:0; padding:0; }\
#editor162100_ input, #editor162100_ button, #editor162100_ textarea { margin:0; padding:0; }\
#editor162100_ input, #editor162100_ textarea, #editor162100_ select { border-left:1px #808080 solid; border-top:1px #808080 solid; border-bottom:1px #CCCCCC solid; border-right:1px #CCCCCC solid; }\
#editor162100_ button { border:none; font-family:"Microsoft YaHei"; font-size:12px; margin:0 2px 1px 0; }\
#editor162100_ button { height:20px; vertical-align:middle; overflow:visible; overflow-y:overflow; background-color:#e3e3e3; color:#7b8086; -webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}\
#editor162100_ button:hover{ height:20px; vertical-align:middle; overflow:visible; overflow-y:overflow; background-color:#c4c4c4; color:#7b8086; }\
#editor162100_ button b { display:inline-block !important; display:inline; zoom:1; padding-left:6px; padding-right:6px; height:20px; line-height:20px; font-weight:normal; background:url('+path+'images/tools.gif) 100% -18px no-repeat; white-space:nowrap; cursor:pointer; }\
#editor162100_ button::-moz-focus-inner { border:0; padding:0; margin:0; }\
#editor162100_ button.large { height:28px; background-position:0 -38px; }\
#editor162100_ button.large b { background-position:100% -38px; height:28px; line-height:28px; }\
#editor162100_ input { height:18px; line-height:18px; vertical-align:middle; }\
#editor162100_ input.large { height:26px; line-height:26px; }\
#editor162100_ select { height:20px; line-height:20px; }\
#editor162100_ input.file { height:20px; line-height:20px; }\
#editor162100_ input.radio { border:none; height:auto; display:inline-block !important; display:inline; zoom:1; vertical-align:middle; }\
\
#editor162100_ #editor162100 { margin-bottom:10px; min-width:730px; width:'+eSizeXSize+'px; background-color:#ffffff; border:#999999 0px solid; margin-left:auto; margin-right:auto;  -webkit-box-shadow: #d6dadd 0px 0px 5px;-moz-box-shadow: #d6dadd 0px 0px 5px;box-shadow: #d6dadd 0px 0px 5px;behavior: url(/PIE.htc);-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}\
#editor162100_ #editor162100, #editor162100_ #editor162100 td { text-align:left; font-size:12px; line-height:normal; font-family:Arial; }\
#editor162100_ #c162100, #editor162100_ #f_c162100 { display:block; resize:none; width:100%; height:350px; border:none; border:0; border-top:#e8e8e8 1px solid; border-bottom:#e8e8e8 1px solid; background-color:#FFFFFF; overflow:auto; clear:both; cursor:text; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; }\
#editor162100_ #tool_bar { height:35px; line-height:35px; position:relative;padding-top:16px; margin:4px; clear:both; }\
#editor162100_ #subm_bar { text-align:right; margin:4px; height:25px; line-height:25px; clear:both; overflow:hidden; padding:4px;}\
#editor162100_ .subm_bar { float:left; vertical-align:baseline; }\
#editor162100_ .tool_bg { width:18px; height:18px; background-image:url('+path+'images/tools.gif); background-repeat:no-repeat; }\
#editor162100_ .tool_img { border:1px #ffffff solid; margin-right:5px;}\
#editor162100_ .tool_over { background-color:#FFFFFF; border:1px #e8e8e8 solid; cursor:pointer; margin-right:5px; -webkit-box-shadow: #666 0px 0px 5px;-moz-box-shadow: #666 0px 0px 5px;box-shadow: #666 0px 0px 5px;behavior: url(/PIE.htc);-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}\
#editor162100_ .tool_down { background-color:#FFFFFF; border-top:1px #808080 solid; border-left:1px #808080 solid; border-right:1px #FFFFFF solid; border-bottom:1px #FFFFFF solid; cursor:pointer; margin-right:5px; -webkit-box-shadow: #666 0px 0px 5px;-moz-box-shadow: #666 0px 0px 5px;box-shadow: #666 0px 0px 5px;behavior: url(/PIE.htc);-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}\
#editor162100_ #max_wordcount { float:right; color:#999; }\
#editor162100_ fieldset { padding:4px; margin:4px; clear:both; }\
#editor162100_ .close { color:blue; cursor:pointer; }\
#editor162100_ #color_bar, #editor162100_ #table_bar { position:absolute; z-index:60; top:19px; display:none; background:#EEEEEE; border:#CCCCCC 1px solid; padding:2px 0px 0px 3px; overflow:hidden; }\
#editor162100_ .separated { width:1px; height:20px; background-color:#CDCDCD; border-right:#FFFFFF 1px solid; margin-left:4px; margin-right:4px; }\
#editor162100_ .e_mark { width:20px; height:20px; line-height:18px; background:none; border:1px outset; overflow:hidden; }\
#editor162100_ .color_button { border:none; width:12px; height:12px; float:left; margin:4px 0px 0px 4px; cursor:pointer; overflow:hidden; }\
.editor162100_help { }\
-->\
</style>\
');

if (typeof $ != 'function') {
  var $ = function(o) {
    return document.getElementById(o);
  }
}

//加载内容
function getContentsToText() {
  if (typeof(contT) != 'undefined' && contT != '' && contT != 'false') {
    e162100I.document.body.innerHTML = e162100T.value = contT;
  }
}

if (document.all) {
  window.attachEvent('onload', getContentsToText);//对于IE
} else {
  window.addEventListener('load', getContentsToText, false);//对于FireFox
}
document.writeln('<form name="mainform162100" id="mainform162100" method="post" onsubmit="return writeChk();" action="'+((typeof(formU) == 'undefined' || !formU) ? '?' : formU)+'">');
document.writeln(''+((typeof(formT) == 'undefined') ? '' : formT)+'');
document.writeln('<span id="e162100_a" style="display:none">');
document.writeln('<textarea name="content" cols="60" rows="10"></textarea><br /><button type="submit" name="e162100_a" onclick="document.mainform162100.action=formU;document.mainform162100.target=\'_self\';"><b>提交</b></button> 您的浏览器不支持编辑器程序，建议您升级浏览器。字符数限'+maxWordCount+'');
document.writeln('</span></form>');

var e162100I, e162100T, iframeStartSet, nowModeId, colors;
e162100T = document.mainform162100.content;
    
//判断浏览器版本级别
/*
        var Sys = {};
        var ua = navigator.userAgent.toLowerCase();
        var s;
        (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] :
        (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] :
        (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] :
        (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] :
        (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;

        //以下进行测试
        if (Sys.ie) document.writeln('IE: ' + Sys.ie);
        if (Sys.firefox) document.writeln('Firefox: ' + Sys.firefox);
        if (Sys.chrome) document.writeln('Chrome: ' + Sys.chrome);
        if (Sys.opera) document.writeln('Opera: ' + Sys.opera);
        if (Sys.safari) document.writeln('Safari: ' + Sys.safari);
*/
function getBr() {
  var Sys = {};
  var ua = navigator.userAgent.toLowerCase();
  var s;
  (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] :
  (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] :
  (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] :
  (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] :
  (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;

  if (Sys.ie || Sys.firefox) {
    if (parseFloat(navigator.appVersion) >= 4) {
      return true;
    } else {
      return false;
    }
  } else {
    return true;
  }
}

if (getBr() == true) {
  document.writeln('<div id="editor162100_">');
  document.writeln('<div id="editor162100">');
  document.writeln('<div id="tool_bar"><div id="color_bar"></div><a style="float:right;" href="#" title="帮助中心" target="_blank"><img class="tool_bg tool_img" onmouseover="changeToolStyle(this)" style="background-position:-468px 0px;" src="'+path+'images/white.gif" /></a><span id="c162100_tool" style="font-family:Microsoft YaHei; color:#999;">HTML状态下，请填写常用、准确、安全的html代码。如果您对此项不熟，请切换到设计状态填写。</span><span id="f_c162100_tool">'+addTools()+'<img src="'+path+'images/white.gif" class="separated" /></span></div>');
  document.writeln('<textarea id="c162100"></textarea>');
  document.writeln('<span id="add_toolbar"></span>');
  document.writeln('<iframe name="f_c162100" id="f_c162100" marginwidth="3" marginheight="3" frameborder="0" src="about:blank" allowTransparency="true"></iframe>');
  document.writeln('<div id="subm_bar">');
  document.writeln('<span id="max_wordcount"></span>');
  document.writeln('<button id="f_c162100_mode" type="button" class="subm_bar" onclick="toMode(\'f_c162100\',\'c162100\')"><b>设计</b></button>');
  document.writeln('<button id="c162100_mode" type="button" class="subm_bar" onclick="toMode(\'c162100\',\'f_c162100\')"><b>HTML</b></button>');
  document.writeln('<button type="button" id="e_y_a" class="subm_bar" title="纵向增高编辑区" onclick="eSizeY(150)"><b>↓</b></button>');
  document.writeln('<button type="button" id="e_y_d" class="subm_bar" title="纵向减小编辑区" onclick="eSizeY(-150)"><b>↑</b></button>');
  document.writeln('<button type="button" id="e_x" class="subm_bar" title="横向增减编辑区" onclick="eSizeX(this)"><b>→</b></button>');
  document.writeln('<button type="button" class="subm_bar" title="全屏显示编辑器" onclick="eSizeFull(this)" id="fullkey"><b>↗</b></button>');
  //document.writeln('<button type="button" class="subm_bar" onclick="document.mainform162100.action=formU;document.mainform162100.target=\'_self\';runSubmit();"> &nbsp;&nbsp; 提 交 &nbsp;&nbsp; </button>');
  //document.writeln('<button type="button" class="subm_bar" onclick="runReset()"> 重 置 </button> ');
  //document.writeln('提示Shift+Enter小换行 <a href="http://www.162100.com/help/162100editor.html#a8" title="162100editor_3.0" target="_blank">使用帮助</a>');
  document.writeln('</div>');
  document.writeln('</div>');
  document.writeln('<button type="button" class="large" onclick="document.mainform162100.action=formU;document.mainform162100.target=\'_self\';runSubmit();"><b> &nbsp;&nbsp; 发 布 &nbsp;&nbsp; </b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
  document.writeln('<button type="button" class="large" onclick="runReset()"><b>&nbsp;&nbsp; 重 置&nbsp;&nbsp; </b></button> ');
  document.writeln('</div>');
  e162100T = $('c162100');
  //设iframe为可编辑
  e162100I = $('f_c162100').contentWindow;
  e162100I.document.designMode = 'on';
  e162100I.document.contentEditable = true;
  e162100I.document.open();
  e162100I.document.writeln('<html><head><style type="text/css"><!-- body,th,td{font-family:Verdana;font-size:13px;} //--></style></head><body></body></html>');
  e162100I.document.close();
  e162100I.document.body.onblur = function() {
    e162100T.value = e162100I.document.body.innerHTML;
  }
  iframeStartSet = setTimeout("startF()", 0);
  getNowMode('f_c162100', 'c162100');
  runGetWordCount();
} else {
  $('e162100_a').style.display = 'block';

}

//缓存
function startF() {
  if (e162100T.value != '')
    e162100I.document.body.innerHTML = e162100T.value;
  if (iframeStartSet)
    window.clearTimeout(iframeStartSet);
}

//关于字体
function showFlowMenu(obj, id, stype) {
  var menuObj = $(id);
  if (menuObj != null) {
    var inTexts = '';
    switch (stype) {
      case 'ForeColor':
      case 'BackColor':
      case 'thetable_bordercolor':
      case 'thetable_bgcolor':
        menuObj.style.width = '135px';
        menuObj.style.height = '86px';
        var colorBarArr = {"Black": "黑色", "Sienna": "赭色", "DarkOliveGreen": "暗橄榄绿色", "DarkGreen": "暗绿色", "DarkSlateBlue": "暗灰蓝色", "Navy": "海军色", "Indigo": "靛青色", "DarkSlateGray": "墨绿色", "DarkRed": "暗红色", "DarkOrange": "暗桔黄色", "Olive": "橄榄色", "Green": "绿色", "Teal": "水鸭色", "Blue": "蓝色", "SlateGray": "灰石色", "DimGray": "暗灰色", "Red": "红色", "SandyBrown": "沙褐色", "YellowGreen": "黄绿色", "SeaGreen": "海绿色", "MediumTurquoise": "间绿宝石", "RoyalBlue": "皇家蓝", "Purple": "紫色", "Gray": "灰色", "Magenta": "红紫色", "Orange": "橙色", "Yellow": "黄色", "Lime": "酸橙色", "Cyan": "青色", "DeepSkyBlue": "深天蓝色", "DarkOrchid": "暗紫色", "Silver": "银色", "Pink": "粉色", "Wheat": "浅黄色", "LemonChiffon": "柠檬绸色", "PaleGreen": "苍绿色", "PaleTurquoise": "苍宝石绿", "LightBlue": "亮蓝色", "Plum": "洋李色", "White": "白色"};
        if (stype == 'thetable_bgcolor') {
          menuObj.style.left = '50px';
          for (var i in colorBarArr) {
            inTexts += '<button style="background:'+i+';" class="color_button" onclick="$(\'thetable_bgcolor\').value=\''+i+'\';$(\'thetable_bgcolor\').style.backgroundColor=\''+i+'\';$(\'thetable_bgcolor\').style.color=\''+i+'\';" title="'+colorBarArr[i]+'" type="button"></button>';
          }

        } else if (stype == 'thetable_bordercolor') {
          menuObj.style.left = '150px';
          for (var i in colorBarArr) {
            inTexts += '<button style="background:'+i+';" class="color_button" onclick="$(\'thetable_bordercolor\').value=\''+i+'\';$(\'thetable_bordercolor\').style.backgroundColor=\''+i+'\';$(\'thetable_bordercolor\').style.color=\''+i+'\';" title="'+colorBarArr[i]+'" type="button"></button>';
          }
        } else {
          if (stype == 'ForeColor') {
            menuObj.style.left = '40px';
          } else if (stype == 'BackColor') {
            menuObj.style.left = '60px';
            if (!document.all) {
              stype = 'hiliteColor';
            }
          }
          for (var i in colorBarArr) {
            inTexts += '<button style="background:'+i+';" class="color_button" onclick="toolClick(\''+stype+'\',\''+i+'\')" title="'+colorBarArr[i]+'" type="button"></button>';
          }
        }
      break;
      case 'FontSize':
        menuObj.style.width = '55px';
        menuObj.style.height = 'auto';
        menuObj.style.left = '20px';
        for (var j=1; j<=7; j++) {
          inTexts += '<button style="border:none; width:55px; text-align:left; padding:0px 3px; background:none; border-bottom:#DDDDDD 1px solid; font-size:'+(4+5*j)+'px; height:'+(4+5*j+2)+'px; line-height:'+(4+5*j+2)+'px; cursor:pointer;" onclick="toolClick(\''+stype+'\',\''+j+'\')" title="'+j+'" type="button">'+j+'</button>';
        }
      break;
      case 'FontName':
        var fontBarArr = {"Microsoft YaHei": "微软雅黑", "SimSun": "宋体", "SimHei": "黑体",  "FangSong_GB2312": "仿宋_GB2312", "KaiTi_GB2312": "楷体_GB2312", "MingLiU": "明柳", "Arial": "Arial", "Comic Sans MS": "Comic Sans MS", "Courier New": "Courier New", "Tahoma": "Tahoma", "Times New Roman": "Times New Roman", "Verdana": "Verdana"};
        menuObj.style.width = '115px';
        menuObj.style.height = 'auto';
        menuObj.style.left = '0px';
        for (var k in fontBarArr) {
          inTexts += '<button style="border:none; width:115px; text-align:left; padding:0px 3px; background:none; border-bottom:#DDDDDD 1px solid; font-family:'+k+'; height:19px; line-height:19px; cursor:pointer;" onclick="toolClick(\''+stype+'\',\''+k+'\')" title="'+fontBarArr[k]+'" type="button">'+fontBarArr[k]+'</button>';
        }
      break;
    }
    menuObj.innerHTML = inTexts;
    menuObj.style.display = 'block';
    menuObj.onmouseover = function() {
      menuObj.style.display = 'block';
    }
    obj.onmouseout = menuObj.onmouseout = function() {
      menuObj.style.display = 'none';
    }
  }
}

function changeToolStyle(obj) {
  obj.className = 'tool_bg tool_over';
  obj.onmouseout = function() {
    this.className = 'tool_bg tool_img';
  }
  obj.onmousedown = function() {
    this.className = 'tool_bg tool_down';
  }
  obj.onmouseup = function() {
    this.className = 'tool_bg tool_over';
  }
}

//工具图标
function addTools() {
  var tools = '';
  //字体样式
  tools += '<img title="字体" class="tool_bg tool_img" onmouseover="showFlowMenu(this,\'color_bar\',\'FontName\')" onclick="showFlowMenu(\'color_bar\',\'FontName\')" style="background-position:0px 0px;" src="'+path+'images/white.gif" />';
  //字体大小
  tools += '<img title="字体大小" class="tool_bg tool_img" onmouseover="showFlowMenu(this,\'color_bar\',\'FontSize\')" onclick="showFlowMenu(\'color_bar\',\'FontSize\')" style="background-position:-18px 0px;" src="'+path+'images/white.gif" />';
  //字体颜色
  tools += '<img title="字体颜色" class="tool_bg tool_img" onmouseover="showFlowMenu(this,\'color_bar\',\'ForeColor\')" onclick="showFlowMenu(\'color_bar\',\'ForeColor\')" style="background-position:-36px 0px;" src="'+path+'images/white.gif" />';
  //背景颜色
  tools += '<img title="背景颜色" class="tool_bg tool_img" onmouseover="showFlowMenu(this,\'color_bar\',\'BackColor\')" onclick="showFlowMenu(\'color_bar\',\'BackColor\')" style="background-position:-54px 0px;" src="'+path+'images/white.gif" />';
  //常用样式
  toolBarArr = {"Bold": "粗体字", "Italic": "斜体字", "Underline": "下划线", "StrikeThrough": "中划线", "insertorderedlist": "数字编号", "insertunorderedlist": "项目符号", "Indent": "增加缩进量", "Outdent": "减小缩进量", "JustifyCenter": "中对齐", "JustifyFull": "两端对齐", "JustifyLeft": "左对齐", "JustifyRight": "右对齐", "15_": "插入图片/动画/影音文件", "18_": "插入其它文件", "19_": "插入表情", "20_": "插入特殊符号", "21_": "插入表格", "InsertHorizontalRule": "插入水平线", "CreateLink": "给所选内容添加链接", "UnLink": "取消链接", "RemoveFormat": "删除格式", "Undo": "返回上一步（Ctrl+Z）"};
  //"Copy", "Cut", "Paste", "Delete", "Subscript", "Superscript", "16", "17", "InsertMarquee",
  //"复制所选", "剪切所选", "粘帖", "删除", "下标", "上标", "插入动画", "插入影音文件", "插入滚动字幕",
  step = 0;
  for (var i in toolBarArr) {
    var separated = (step + 5) % 8 == 0 ? '<img src="'+path+'images/white.gif" class="separated" />' : '';
    tools += '<img title="'+toolBarArr[i]+'" class="tool_bg tool_img" onmouseover="changeToolStyle(this)" onclick="toolClick(\''+i+'\')" style="background-position:'+(-4 * 18 - step * 18)+'px 0px;" src="'+path+'images/white.gif" />'+separated;
    step++;
  }
  return tools;
}

//处理模式
function getNowMode(showModeId, hideModeId) {
  $(showModeId+'_tool').style.display = $(showModeId).style.display = '';
  $(hideModeId+'_tool').style.display = $(hideModeId).style.display = 'none';
  $(showModeId+'_mode').disabled = true;
  $(hideModeId+'_mode').disabled = false;
  nowModeId = showModeId;
}

//转变编辑状态
function toMode(showModeId, hideModeId) {
  if (showModeId == 'f_c162100') {
    e162100I.document.body.innerHTML = getNowValue();
    $('add_toolbar').style.display = '';
  } else {
    e162100T.value = getNowValue();
    $('add_toolbar').style.display = 'none';
  }
  getNowMode(showModeId, hideModeId);
}

//取值
function getNowValue() {
  if (nowModeId == 'f_c162100') {
    return e162100I.document.body.innerHTML;
  } else {
    return e162100T.value;
  }
}

//表单提交时将iframe值传给textarea
function runSubmit() {
  document.mainform162100.content.value = getNowValue();
  if (writeChk() != false) {
    document.mainform162100.submit();
  }
}

//重置
function runReset() {
  e162100T.value = '';
  e162100I.document.body.innerHTML = '';
}

//计算最多字符数
function runGetWordCount() {
  var calcCountTimer;
  var nowCount = getNowValue().length;
/*
  if(nowCount>maxWordCount){
    nowCount='已超！';
    e162100I.document.body.innerHTML=e162100T.value=e162100I.document.body.innerHTML.substring(0,maxWordCount);
  }
*/
  $('max_wordcount').innerHTML = '<b>'+nowCount+'</b>/<b>'+maxWordCount+'</b>';
  if (calcCountTimer) {
    window.clearTimeout(calcCountTimer);
  }
  calcCountTimer = setTimeout('runGetWordCount()', 1000);
}

//改变垂直编辑区尺寸
function eSizeY(size) {
  var eObj = $(nowModeId);
  var areaHeight = parseInt(eObj.offsetHeight);
  if (areaHeight + size >= 150) {
    eObj.style.height = (areaHeight + size)+'px';
  }
}

//改变水平编辑区尺寸
function eSizeX(obj) {
  var eObj = $('editor162100');
  try {
    if (eObj.style.width != '99%'){
      eObj.style.width = '99%';
      eObj.style.clear = 'both';
      obj.innerHTML = '<b>←</b>';
    } else {
      eObj.style.width = eSizeXSize+'px';
      eObj.style.clear = 'none';
      obj.innerHTML = '<b>→</b>';
    }
  } catch (err) {
  }
}
/*

        var getRuntimeStyle = function(obj) {
            var v = null;
            if (obj.currentStyle) v = obj.currentStyle['overflow'];
            else v = window.getComputedStyle(obj, null).overflow;
            return v;
        }*/


//全屏显示
function eSizeFull(obj) {
  //pArr = new Array();
  var eObj = $('editor162100');
  if (obj.innerHTML.replace(/<[^>]*>/g, '') == '关闭全屏显示') {
    eObj.style.position = 'static';
    eObj.style.top = 'auto';
    eObj.style.left = 'auto';
    eObj.style.width = ''+eSizeXSize+'px';
    eObj.style.height = 'auto';
    $('c162100').style.height = $('f_c162100').style.height = '150px'
    $('e_y_a').disabled = $('e_y_d').disabled = $('e_x').disabled = false;
    obj.innerHTML = '<b>↗</b>';
    //obj.style.background = 'none';
    try { $('body').style.overflow = 'hidden'; } catch (err) {}
    try { $('left').style.overflow = 'hidden'; } catch (err) {}

/*
    if (typeof(pArr) != 'undefined' && pArr.length > 0) {
      for (var i in pArr) {
        pArr[i].style.overflow = 'hidden';
      }
    }
*/
    return;
  }
  var wObj = eObj;
  var pObj, w, h;
  var t = 0;
  var l = 0;
  if (wObj != null) {
    var step = 0;
    while ((wObj = wObj.offsetParent)) {
      step++;
      t += wObj.offsetTop;
      l += wObj.offsetLeft;
/*
      if (getRuntimeStyle(wObj) == 'hidden') {
        wObj.style.overflow = 'auto';
        //pArr[wObj.id] = wObj;
        pArr[step] = wObj;
      }
*/
    }
    w = document.documentElement.clientWidth - 2;
    h = document.documentElement.clientHeight - 2;
    eObj.style.position = 'absolute';
    eObj.style.top = ''+(-t)+'px';
    eObj.style.left = ''+(-l)+'px';
    eObj.style.width = ''+w+'px';
    eObj.style.height = ''+h+'px';
    eObj.style.zIndex = '99';
    try { $('body').style.overflow = 'inherit'; } catch (err) {}
    try { $('left').style.overflow = 'inherit'; } catch (err) {}
    $('c162100').style.height = $('f_c162100').style.height = (h - 58)+'px'
    $('e_y_a').disabled = $('e_y_d').disabled = $('e_x').disabled = true;
    //obj.style.background = '#FFCC33';
    obj.innerHTML = '<b>关闭全屏显示</b>';
  }
  window.scrollTo(0, 0);
}

//命令处理
function toolClick(inId, val) {
  e162100I.focus();
  if (inId == 'CreateLink') {
    if (Url = prompt('为选择的文本添加链接——URL地址：', 'http://'))
      e162100I.document.execCommand('CreateLink', false, encodeURI(Url));
  //15：图片、16：动画、17：视频、18：其它文件、19：表情、20：符号、21：表格
  } else if (inId == 'InsertMarquee') {
    if (txt = prompt('添加滚动字幕——文本：', ''))
      insertFile('<marquee style="border:1px #808080 solid;">'+txt+'</marquee>', '21_');
  } else if (inId.match(/^\d+_$/)) {
    var addToolbar = $('add_toolbar');
    var theToolbar = $('tool_'+inId);
    var theToolbarText = '';
    var resetObjSize = '';

    if (inId == '15_' || inId == '16_' || inId == '17_' || inId == '21_') {
      resetObjSize = '<font color=gray style="font-family:Microsoft YaHei;">（控件大小可在编辑器中更改）</font>';
    }
    if (inId == '21_') {
      theToolbarText = '表格宽度：<select name="thetable_width" id="thetable_width" style="width:50px"><option value="">默认</option><option value=" width=100%">100%</option><option value=" width=90%">90%</option><option value=" width=80%">80%</option><option value=" width=70%">70%</option><option value=" width=60%">60%</option><option value=" width=50%">50%</option></select> ';
      theToolbarText += '表格行数：<input name="thetable_rows" id="thetable_rows" type="text" value="2" style="width:48px" maxlength="2" onKeyUp="isDigit(this,1)"> ';
      theToolbarText += '表格列数：<input name="thetable_cols" id="thetable_cols" type="text" value="2" style="width:48px" maxlength="2" onKeyUp="isDigit(this,1)"><br /> ';
      theToolbarText += '对齐方式：<select name="thetable_align" id="thetable_align" style="width:50px"><option value="">默认</option><option value=" align=left">居左</option><option value=" align=center">居中</option><option value=" align=right">居右</option></select> ';
      theToolbarText += '单元边距：<input name="thetable_spacing" id="thetable_spacing" type="text" value="0" style="width:48px" maxlength="2" onKeyUp="isDigit(this,0,1)"> ';
      theToolbarText += '单元间距：<input name="thetable_padding" id="thetable_padding" type="text" value="3" style="width:48px" maxlength="2" onKeyUp="isDigit(this,0,1)"><br /> ';
      theToolbarText += '<div style="position:relative;height:20px;">背影颜色：<input name="thetable_bgcolor" id="thetable_bgcolor" type="text" style="width:48px" onclick="showFlowMenu(this,\'table_bar\',\'thetable_bgcolor\')" /> ';
      theToolbarText += '边框颜色：<input name="thetable_bordercolor" id="thetable_bordercolor" type="text" style="width:48px" onclick="showFlowMenu(this,\'table_bar\',\'thetable_bordercolor\')" /> 边框宽度：默认1px ';
      theToolbarText += '<button type="button" onclick="insertFile(insertTableVal(),\''+inId+'\')"><b>确定</b></button><div id="table_bar"></div></div>';
    } else if (inId == '20_') {
      var marks = new Array("※", "§", "〃", "№", "〓", "○", "●", "△", "▲", "◎", "☆", "★", "◇", "◆", "□", "■", "▽", "▼", "㊣", "♀", "♂", "⊕", "⊙", "↑", "↓", "←", "→", "↖", "↗", "↙", "↘", "【", "】", "『", "』", "≈", "≠", "＝", "≤", "≥", "＜", "＞", "≮", "≯", "∷", "±", "＋", "－", "×", "÷", "／", "∫", "∮", "∝", "∞", "∧", "∨", "∑", "∏", "∪", "∩", "∈", "∵", "∴", "⊥", "∥", "∠", "⌒", "⊙", "≌", "∽", "√", "≦", "≧", "≒", "≡", "～", "∟", "⊿", "㏒", "㏑", "°", "′", "″", "＄", "￥", "〒", "￠", "￡", "％", "＠", "℃", "℉", "﹩", "﹪", "‰", "﹫", "㏕", "㎜", "㎝", "㎞", "㏎", "㎡", "㎎", "㎏", "㏄", "°", "○", "¤", "Ⅰ", "Ⅱ", "Ⅲ", "Ⅳ", "Ⅴ", "Ⅵ", "Ⅶ", "Ⅷ", "Ⅸ", "Ⅹ", "€", "￥", "￡", "?", "?", "?", "…");
      for (var i = 0; i < marks.length; i++)
        theToolbarText += '<button type="button" class="e_mark" onclick="insertFile(\''+marks[i]+'\',\''+inId+'\')">'+marks[i]+'</button>';
    } else if (inId == '19_') {
      for (var i=1; i<=50; i++)
        theToolbarText += '<img src="'+path+'images/smiley/'+i+'.gif" onclick="toolClick(\'InsertImage\',this.src)">';
    } else {

      theToolbarText = '<iframe name="uploadFrame" id="uploadFrame" style="display:none"></iframe><form name="uploadform'+inId+'" enctype="multipart/form-data" action="'+path+'upload.php?pathUrl='+path+'" method="post" target="uploadFrame" onsubmit="if(this.uploadfile.value==\'\'){alert(\'上传文件不能为空！\');return false;}">';
      theToolbarText += '<div style="font-family:Microsoft YaHei; color:#999;">链接：</div><input name="linkfile" type="text" size="40" style="margin-bottom:10px; margin-top:5px;"> <button type="button" onclick="insertFile(this.form.linkfile.value,\''+inId+'\')" ><b>确定</b></button><br />';
      theToolbarText += '<div style="font-family:Microsoft YaHei; color:#999;">上传：</div><input name="uploadfile" type="file" class="file"'+iuploadPower+'> <button type="submit"'+iuploadPower+'><b>确定</b></button> '+(inId == '15_' || inId == '16_' || inId == '17_' ? '<input name="in_id" type="radio" class="radio" value="15"'+iuploadPower+' checked />图片 <input name="in_id" type="radio" class="radio" value="16"'+iuploadPower+' />动画 <input name="in_id" type="radio" class="radio" value="17"'+iuploadPower+' />影音文件' : '<input name="in_id" type="hidden" value="'+inId.replace(/_+$/,'')+'" />')+'';
      theToolbarText += '</form>';
    }
    if (theToolbar == null) {
      addToolbar.innerHTML += '<fieldset id="tool_'+inId+'"><legend style="font-family:Microsoft YaHei;color:#999;"><b>'+toolBarArr[inId]+'</b>/插入之前请用光标定好位置'+resetObjSize+'</legend>'+theToolbarText+'</fieldset>';
    } else {
      addToolbar.removeChild(theToolbar);
    }
  } else {
    try {
      e162100I.document.execCommand(inId, false, val);
    } catch(err) {
      e162100T.document.execCommand(inId, false, val);
    }
  }
  e162100I.focus();
}

//插入文件
function insertFile(val, inId) {
  e162100I.focus();
  var newVal, theObj, reg;
  if (val == '')
    return;
  var now = new Date(); 
  var regId = now.getYear()+''+now.getMonth()+''+now.getDate()+''+now.getHours()+''+now.getMinutes()+''+now.getSeconds()+''+now.getMilliseconds();
  inId = inId.toString().replace(/_+$/,'')+'_';
  switch (inId) {
    case '15_':
      //e162100I.document.execCommand('InsertImage', false,encodeURI(val));
      //return;
      theObj = '<img src="'+val+'" border="0" />'; //encodeURI(val)
      newVal = 'insertImg:'+regId;
      break;
    case '16_':
    case '17_':
	  theObj = '<div style="width:400px;height:auto !important;height:64px;font-size:12px;background-color:black;color:white;">浏览器不兼容会导致播放器不显示？可<a href="'+val+'" target="_blank">用客户端播放</a><br>'+getVideo(val)+' &nbsp;</div><br>\n\n'; //encodeURI(val)
      newVal = 'insertFilm:'+regId;
      break;
    case '18_':
      theObj = '<img src="'+path+'images/picenc.gif" title="附件"><a href="'+val+'" target="_blank">'+val+'</a><br />'; //encodeURI(val)
      newVal = 'insertOtherFile:'+regId;
      break;
    case '20_':


      theObj = val;
      newVal = 'insertMark:'+regId;
      break;
    case '21_':
      theObj = val;
      newVal = 'insertOther:'+regId;
      break;
    default:
      return;
  }
  e162100I.document.execCommand('InsertImage', false, newVal);
  reg = new RegExp('<img [^>]*src="'+newVal+'"[^>]*>', 'ig');
  e162100I.document.body.innerHTML = e162100I.document.body.innerHTML.replace(reg, theObj);

/*
  if (document.all) {
    var r = e162100I.document.body.document.selection.createRange();
    r.moveStart('character', e162100I.document.body.innerHTML.length);
    r.moveEnd('character', 0);
    r.select();
  }
*/
}

//插入表格值
function insertTableVal() {
  var tableVal;
  var tableWidth = $('thetable_width').value;
  var tableAlign = $('thetable_align').value;
  var tableRows = $('thetable_rows').value;
  var tableCols = $('thetable_cols').value;
  var tableCellspacing = $('thetable_spacing').value;
  var tableCellpadding = $('thetable_padding').value;
  var tableBgcolor = $('thetable_bgcolor').value;
  var tableBordercolor = $('thetable_bordercolor').value;
  if (isNaN(tableRows || tableCols) || tableRows<1 || tableCols<1) {
    alert("无效的行数或列数！至少填数字1");
    return false;
  }
  tableVal = '<table'+tableWidth+tableAlign+' border="1" cellspacing="'+tableCellspacing+'" cellpadding="'+tableCellpadding+'" bgcolor="'+tableBgcolor+'" bordercolor="'+tableBordercolor+'">';
  for (var i = 1; i <= tableRows; i++) {
    tableVal += '<tr>';
    for (j = 1; j <= tableCols; j++)
      tableVal += '<td>&nbsp;</td>';
    tableVal += '</tr>';
  }
  tableVal += '</table>';
  return tableVal;
}

// 只允许输入数字
var isDigit = function(obj, starVal, s, t) {
  var ye = false;
  if (typeof(s) != 'undefined') {
    if (s == 0) {
    } else {
      ye = true;
      if (obj.value == '0' || obj.value == '') {
        obj.value = '0';
        return;
      }
    }
  }
  var d = ye == false ? '大于0的' : '';
  if (typeof(t) != 'undefined' && t == '.') {
    var t = 'obj.value == \'\' || isNaN(obj.value)';
    var b = ''+d+'货币类型数值';
  } else {
    var t = '!/^([1-9]|[1-9][0-9]+)$/.test(obj.value)';
    var b = ''+d+'整数';
  }
  if (eval(t)) {
    alert('你输入的值不对，只允许输入'+b+'！');
    obj.value = starVal;
  }
}

/* 表单检查 */
function writeChk() {
  //主题检查
  var s = document.mainform162100.subject;
  if (s != null) {
    if (s.value == '') {
      alert('请填写标题！！！');
      s.focus();
      return false;
    }
  }
  //验证码检查
  var i = document.mainform162100.imcode;
  if (i != null) {
    var imC = getCookie('regimcode');
    if (i.value != imC) {
      alert('请准确填写验证码！');
      if (i.type != 'hidden') i.focus();
      return false;
    }
  }
  //内容检查
  var c = document.mainform162100.content;
  if (c != null) {
    var yesT = c.value.replace(/\s|&nbsp;|\r?\n|<br(\s+\/)?>/ig, '');
    while (yM = yesT.match(/<[a-z]+[^>]*>([^><]*)<\/[a-z]+>/i)){
      yesT = yesT.replace(/<[a-z]+[^>]*>([^><]*)<\/[a-z]+>/ig, '$1');
    }
    if (yesT == '') {
      alert('提交被拒绝！问题分析：1、你没添写 2、您并未输入有效的文本内容，如：你只输入了空格、空html标签等');
      try {
        e162100I.focus();//编辑器定位
      } catch (err) {
      }
      try {
        e162100T.focus();
      } catch (err) {
      }
      return false;
    }
    //最多允许字符数检查
    if (c.value.length > maxWordCount) {
      alert('所写内容已超出允许字符数'+maxWordCount+'！请删减');
      return false;
    }
  }
  if(typeof addSubmitSafe == 'function') {
    addSubmitSafe();
  }
  return true;
}



//取视频播放器代码
function getVideo(val){
  var sufFix=val.substring(val.lastIndexOf(".")+1,val.length).toLowerCase();
  if(sufFix.indexOf("#")) sufFix=sufFix.split("#")[0];
  if(sufFix.indexOf("?")) sufFix=sufFix.split("?")[0];
  switch(sufFix){
    case 'wma': case 'wmv': case 'wav': case 'mid': case 'midi': case 'mp3': case 'asf': case 'asx': case 'mov': case 'mpg': case 'mpeg': case 'avi':
    return '<object id="mediaplayer" width="480" height="'+((sufFix=='mp3'||sufFix=='wma'||sufFix=='mid'||sufFix=='midi')?64:424)+'" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" align="center" border="0" type="application/x-oleobject" standby="Loading Windows Media Player components..." style="background-color:black">\
<param name="url" value="'+encodeURI(val)+'">\
<param name="AutoStart" value="0">\
<param name="Balance" value="0">\
<param name="enabled" value="-1">\
<param name="EnableContextMenu" value="0">\
<param name="PlayCount" value="1">\
<param name="rate" value="1">\
<param name="currentPosition" value="0">\
<param name="currentMarker" value="0">\
<param name="defaultFrame" value="">\
<param name="invokeURLs" value="-1">\
<param name="baseURL" value="">\
<param name="stretchToFit" value="0">\
<param name="volume" value="100">\
<param name="mute" value="0">\
<param name="uiMode" value="full">\
<param name="windowlessVideo" value="0">\
<param name="fullScreen" value="0">\
<param name="enableErrorDialogs" value="0">\
<param name="SAMIStyle" value="">\
<param name="SAMILang" value="">\
<param name="SAMIFilename" value="">\
<param name="captioningID" value="">\
</object>';
    break;
    case 'rm': case 'rmvb': case 'ram': case 'ra':
      return '<object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="400" height="300"  id="amourReal" style="background-color:black">\
<param name="src" value="'+encodeURI(val)+'">\
<param name="autostart" value="false">\
<param name="controls" value="imagewindow">\
<param name="console" value="clip1">\
<embed src="'+encodeURI(val)+'" width="400" height="300" type="audio/x-pn-realaudio-plugin" autostart="false" controls="imagewindow" console="video">\
</embed>\
</object>\
<br>\
<object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="400" height="50" id="amourReal">\
<param name="src" value="'+encodeURI(val)+'">\
<param name="autostart" value="false">\
<param name="controls" value="all">\
<param name="console" value="clip1">\
<embed type="audio/x-pn-realaudio-plugin" src="'+encodeURI(val)+'" width="400" height="50" autostart="true" controls="all" console="video">\
</embed>\
</object>';
    break;
    default :
      return '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="600" height="480" style="background-color:black">\
<param name="movie" value="'+encodeURI(val)+'">\
<param name="quality" value="high">\
<embed src="'+encodeURI(val)+'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" height="330"></embed>\
</object>';

  }
}




document.onkeydown=function(){
  keydown(event);
}
e162100I.document.onkeydown=function(){
  keydown(e162100I.event);
}
        function keydown(e){
           var e=e||event;
           var currKey=e.keyCode||e.which||e.charCode;
           if(currKey==27){
                eSizeFull($('fullkey'));
           }
        }




















