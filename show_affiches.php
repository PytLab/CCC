<?php include_once("./conn/conn.php");?>
<?php include_once("./function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	* { margin:0; padding:0; word-wrap:break-word;}
</style>
</head>
<body>
<div id="marquees"> <!-- 这些是字幕的内容，你可以任意定义 --> 
	<?php
		$sql=mysql_query("select * from tb_publication order by createtime desc limit 0,10",$conn);
		$info=mysql_fetch_array($sql);
		if($info!=false){	//得到公告信息
		$i=1;
		do{		
	?>
    	<a href="<?php echo $info[link]?>" title="<?php echo $info[title]?>">
        <li>
        	<span class="affices_title">
				<?php 
					echo $info[title];
			        
				?>
            </span>
            <span class="affiches_time">
				<?php echo '-'.$info[pub_time]."<br /><br />";?>
            </span>
        </li>
        </a>
    <?php
		$i++;
		}while($info=mysql_fetch_array($sql));
		}
		else
		{
			echo "No Publications";	
		}
	?>
<!-- 字幕内容结束 -->
</div> 
</body>
<!-- javascript代码 -->
<script language="javascript">
<!--
marqueesHeight=200; //内容区高度
stopscroll=false; 
with(marquees){
noWrap=true; //内容区不自动换行
style.width=215; 
style.height=marqueesHeight;
style.overflowY="hidden"; //滚动条不可见
onmouseover=new Function("stopscroll=true"); //鼠标经过，停止滚动
onmouseout=new Function("stopscroll=false"); //鼠标离开，开始滚动
}

document.write('<div id="templayer" style="position:absolute;z-index:1;visibility:hidden"></div>');
function init(){ //初始化滚动内容
//多次复制原内容到"templayer"，直到"templayer"的高度大于内容区高度：
while(templayer.offsetHeight<marqueesHeight){
templayer.innerHTML+=marquees.innerHTML;
} //把"templayer"的内容的“两倍”复制回原内容区：
marquees.innerHTML=templayer.innerHTML+templayer.innerHTML;
//设置连续超时，调用"scrollUp()"函数驱动滚动条：
setInterval("scrollUp()",40);
}
document.body.onload=init;
preTop=0; 
function scrollUp(){ 
if(stopscroll==true) return;  
preTop=marquees.scrollTop; //记录滚动前的滚动条位置
marquees.scrollTop+=1; //滚动条向下移动一个像素

if(preTop==marquees.scrollTop){
marquees.scrollTop=templayer.offsetHeight-marqueesHeight+1;
}
}
-->
</script>