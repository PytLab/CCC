
<style type="text/css">
/* Reset style */
* { margin:0; padding:0; word-wrap:break-word;}
body {
	background:#fff;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
ul, li { list-style:none; }
fieldset, img { border:none; }
legend { display:none; }


html { overflow:-moz-scrollbars-vertical; } /*Always show Firefox scrollbar*/

/* iFocus style */
#ifocus { width:770px; height:445px; margin:0px; border:0px solid #DEDEDE; background:#F8F8F8; -webkit-box-shadow: #999 0px 0px 2px;-moz-box-shadow: #999 0px 0px 2px;box-shadow: #999 0px 0px 2px;}
#ifocus_pic { display:inline; position:relative; float:left; width:660px; height:425px; overflow:hidden; margin:10px 0 0 10px; }
#ifocus_piclist { position:absolute; }
#ifocus_piclist li { width:670px; height:425px; overflow:hidden; }
#ifocus_piclist img { width:670px; height:425px; }
#ifocus_btn { display:inline; float:right; width:91px; margin:9px 9px 0 0; }
#ifocus_btn li { width:91px; height:57px; cursor:pointer; opacity:0.5; -moz-opacity:0.5; filter:alpha(opacity=50); }
#ifocus_btn img { width:75px; height:45px; margin:7px 0 0 11px; }
#ifocus_btn .current { background: url(img/ifocus_btn_bg.gif) no-repeat; opacity:1; -moz-opacity:1; filter:alpha(opacity=100); }
#ifocus_opdiv { position:absolute; left:0; bottom:0; width:665px; height:35px; background:#000; opacity:0.5; -moz-opacity:0.5; filter:alpha(opacity=50); }
#ifocus_tx { position:absolute; left:8px; bottom:8px; color:#FFF; }
#ifocus_tx .normal { display:none; }
</style>

<script type="text/javascript">
function $(id) { return document.getElementById(id); }

function addLoadEvent(func){
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function(){
			oldonload();
			func();
		}
	}
}

function moveElement(elementID,final_x,final_y,interval) {
  if (!document.getElementById) return false;
  if (!document.getElementById(elementID)) return false;
  var elem = document.getElementById(elementID);
  if (elem.movement) {
    clearTimeout(elem.movement);
  }
  if (!elem.style.left) {
    elem.style.left = "0px";
  }
  if (!elem.style.top) {
    elem.style.top = "0px";
  }
  var xpos = parseInt(elem.style.left);
  var ypos = parseInt(elem.style.top);
  if (xpos == final_x && ypos == final_y) {
		return true;
  }
  if (xpos < final_x) {
    var dist = Math.ceil((final_x - xpos)/10);
    xpos = xpos + dist;
  }
  if (xpos > final_x) {
    var dist = Math.ceil((xpos - final_x)/10);
    xpos = xpos - dist;
  }
  if (ypos < final_y) {
    var dist = Math.ceil((final_y - ypos)/10);
    ypos = ypos + dist;
  }
  if (ypos > final_y) {
    var dist = Math.ceil((ypos - final_y)/10);
    ypos = ypos - dist;
  }
  elem.style.left = xpos + "px";
  elem.style.top = ypos + "px";
  var repeat = "moveElement('"+elementID+"',"+final_x+","+final_y+","+interval+")";
  elem.movement = setTimeout(repeat,interval);
}

function classNormal(iFocusBtnID,iFocusTxID){
	var iFocusBtns= $(iFocusBtnID).getElementsByTagName('li');
	var iFocusTxs = $(iFocusTxID).getElementsByTagName('li');
	for(var i=0; i<iFocusBtns.length; i++) {
		iFocusBtns[i].className='normal';
		iFocusTxs[i].className='normal';
	}
}

function classCurrent(iFocusBtnID,iFocusTxID,n){
	var iFocusBtns= $(iFocusBtnID).getElementsByTagName('li');
	var iFocusTxs = $(iFocusTxID).getElementsByTagName('li');
	iFocusBtns[n].className='current';
	iFocusTxs[n].className='current';
}


function iFocusChange() {
	if(!$('ifocus')) return false;
	$('ifocus').onmouseover = function(){atuokey = true};
	$('ifocus').onmouseout = function(){atuokey = false};
	var iFocusBtns = $('ifocus_btn').getElementsByTagName('li');
	var listLength = iFocusBtns.length;
	iFocusBtns[0].onmouseover = function() {
		moveElement('ifocus_piclist',0,0,10);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',0);
	}
	if (listLength>=2) {
		iFocusBtns[1].onmouseover = function() {
			moveElement('ifocus_piclist',0,-425,10);
			classNormal('ifocus_btn','ifocus_tx');
			classCurrent('ifocus_btn','ifocus_tx',1);
		}
	}
	if (listLength>=3) {
		iFocusBtns[2].onmouseover = function() {
			moveElement('ifocus_piclist',0,-850,10);
			classNormal('ifocus_btn','ifocus_tx');
			classCurrent('ifocus_btn','ifocus_tx',2);
		}
	}
	if (listLength>=4) {
		iFocusBtns[3].onmouseover = function() {
			moveElement('ifocus_piclist',0,-1275,10);
			classNormal('ifocus_btn','ifocus_tx');
			classCurrent('ifocus_btn','ifocus_tx',3);
		}
	}
	if (listLength>=5) {
		iFocusBtns[4].onmouseover = function() {
			moveElement('ifocus_piclist',0,-1700,10);
			classNormal('ifocus_btn','ifocus_tx');
			classCurrent('ifocus_btn','ifocus_tx',4);
		}
	}
	if (listLength>=6) {
		iFocusBtns[5].onmouseover = function() {
			moveElement('ifocus_piclist',0,-2125,10);
			classNormal('ifocus_btn','ifocus_tx');
			classCurrent('ifocus_btn','ifocus_tx',5);
		}
	}
	if (listLength>=7) {
		iFocusBtns[6].onmouseover = function() {
			moveElement('ifocus_piclist',0,-2550,10);
			classNormal('ifocus_btn','ifocus_tx');
			classCurrent('ifocus_btn','ifocus_tx',6);
		}
	}
	
}

setInterval('autoiFocus()',3500);
var atuokey = false;
function autoiFocus() {
	if(!$('ifocus')) return false;
	if(atuokey) return false;
	var focusBtnList = $('ifocus_btn').getElementsByTagName('li');
	var listLength = focusBtnList.length;
	for(var i=0; i<listLength; i++) {
		if (focusBtnList[i].className == 'current') var currentNum = i;
	}
	if (currentNum==0&&listLength!=1 ){
		moveElement('ifocus_piclist',0,-425,30);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',1);
	}
	if (currentNum==1&&listLength!=2 ){
		moveElement('ifocus_piclist',0,-850,30);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',2);
	}
	if (currentNum==2&&listLength!=3 ){
		moveElement('ifocus_piclist',0,-1275,30);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',3);
	}
	if (currentNum==3&&listLength!=4 ){
		moveElement('ifocus_piclist',0,-1700,30);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',4);
	}
	if (currentNum==4&&listLength!=5 ){
		moveElement('ifocus_piclist',0,-2125,30);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',5);
	}
	if (currentNum==5&&listLength!=6 ){
		moveElement('ifocus_piclist',0,-2550,30);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',6);
	}
	
	if (currentNum==6 ){
		moveElement('ifocus_piclist',0,0,5);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',0);
	}
	if (currentNum==1&&listLength==2 ){
		moveElement('ifocus_piclist',0,0,5);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',0);
	}
	if (currentNum==2&&listLength==3 ){
		moveElement('ifocus_piclist',0,0,5);
		classNormal('ifocus_btn','ifocus_tx');
		classCurrent('ifocus_btn','ifocus_tx',0);
	}
	
}
addLoadEvent(iFocusChange);
</script>
</head>


<br />
<div align="center">
<div id="ifocus">
	<div id="ifocus_pic">
		<div id="ifocus_piclist" style="left:0; top:0;">
			<ul>
				<li><img src="graph/HomePage/photo_change/1.jpg"alt="风景" border="0" /></li>
				<li><img src="graph/HomePage/photo_change/2.jpg" alt="落叶" border="0" /></li>
                <li><img src="graph/HomePage/photo_change/3.jpg" alt="嘿嘿" border="0" /></li>
                <li><img src="graph/HomePage/photo_change/4.jpg" alt="嘿嘿" border="0" /></li>
                <li><img src="graph/HomePage/photo_change/5.jpg" alt="嘿嘿" border="0" /></li>
                <li><img src="graph/HomePage/photo_change/6.jpg" alt="嘿嘿" border="0" /></li>
                <li><img src="graph/HomePage/photo_change/7.jpg" alt="嘿嘿" border="0" /></li>
			</ul>
		</div>
		<div id="ifocus_opdiv"></div>
		<div id="ifocus_tx">
			<ul>
				<li class="current">欣赏学校风景1</li>
				<li class="normal">欣赏学校风景2 </li>
				<li class="normal">欣赏学校风景3</li>
				<li class="normal">欣赏学校风景4</li>
                <li class="normal">欣赏学校风景5</li>
				<li class="normal">欣赏学校风景6</li>
                <li class="normal">欣赏学校风景7</li>
			</ul>
		</div>
	</div>
	<div id="ifocus_btn">
		<ul>
			<li class="current"><img src="graph/HomePage/photo_change/1.jpg"alt="" /></li>
			<li class="normal"><img src="graph/HomePage/photo_change/2.jpg" alt="" /></li>
            <li class="normal"><img src="graph/HomePage/photo_change/3.jpg" alt="" /></li>
            <li class="normal"><img src="graph/HomePage/photo_change/4.jpg"alt="" /></li>
            <li class="normal"><img src="graph/HomePage/photo_change/5.jpg" alt="" /></li>
            <li class="normal"><img src="graph/HomePage/photo_change/6.jpg"  alt="" /></li>
            <li class="normal"><img src="graph/HomePage/photo_change/7.jpg" alt="" /></li>
		</ul>
	</div>
</div>
</div>


