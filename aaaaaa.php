<script type="text/javascript"> 
　　var domainroot="http://localhost/CCC/community/"//个人站点域名，替换成你的网站的网址即可 
　　function Gsitesearch(curobj){ 
　　curobj.q.value="site:"+domainroot+" "+curobj.qfront.value 
　　} 
　　</script> 
　　<form action="http://www.Google.com/search" method="get" onSubmit="Gsitesearch(this)"> 
　　<p>站内搜索:<br/> 
　　<input name="q" type="hidden" /> 
　　<input name="qfront" type="text" style="width: 180px" /> <input type="submit" value="开始搜索"> 
　　</p> 
　　</form> 