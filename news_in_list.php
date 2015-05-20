<?php date_default_timezone_set(PRC); session_start(); include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
	* { margin:0; padding:0; word-wrap: break-word; }
	.highlights_list{
		background-color:#F9F9F9;
		width:720px;
		min-height:25px;
		height:auto;
		float:left;
		margin-top:1px;
		margin-left:0px;
		margin-bottom:2px;
		padding:10px 25px 8px 25px;
		line-height:20px;
		-webkit-box-shadow: #999 0px 0px  2px ;
		-moz-box-shadow: #999 0px 0px 2px ;
		box-shadow: #999 0px 0px 2px ;
		color:#444;
		opacity: .8;  
		-ms-filter: "alpha(opacity=80)"; 
		filter: alpha(opacity=80);   
		-khtml-opacity: .8;  
		-moz-opacity: .8; 
	}
	.highlights_list:hover{
		/*opacity: .5;  
		-ms-filter: "alpha(opacity=50)"; 
		filter: alpha(opacity=50);   
		-khtml-opacity: .5;  
		-moz-opacity: .5; */
		-webkit-box-shadow: #666 0px 0px  12px ;
		-moz-box-shadow: #666 0px 0px 12px ;
		box-shadow: #666 0px 0px 12px ;
		-webkit-transition: 0.5s;
		-moz-transition: 0.5s;
		-o-transition: 0.5s;
		transition:  0.5s;
	}
	.highlights_list a{
		text-decoration:none;
		color:#295454;
		font-weight:600;
		font-size:16px;
	}
	
	#page_num{
		background-color:#f0f0f0;
		width:720px;
		min-height:25px;
		height:auto;
		float:left;
		margin-top:10px;
		margin-left:0px;
		margin-bottom:2px;
		padding:10px 25px 8px 25px;
		line-height:20px;
		-webkit-box-shadow: #666 0px 0px  2px ;
		-moz-box-shadow: #666 0px 0px 2px ;
		box-shadow: #666 0px 0px 2px ;
		color:#444;
		opacity: .8;  
		-ms-filter: "alpha(opacity=80)"; 
		filter: alpha(opacity=80);   
		-khtml-opacity: .8;  
		-moz-opacity: .8;
		text-align:center; 
	}
	#page_num a{
		text-decoration:none;
		width:20px;
		height:20px;
		-webkit-box-shadow: #999 0px 0px  2px ;
		-moz-box-shadow: #999 0px 0px 2px ;
		box-shadow: #999 0px 0px 2px ;
		margin-left:10px;
		padding:5px 5px 5px 5px;
	}
	#page_num a:hover{
		-webkit-box-shadow: #999 0px 0px  15px ;
		-moz-box-shadow: #999 0px 0px 15px ;
		box-shadow: #999 0px 0px 15px ;
	}
</style>
</head>

<body>
	<?php
    	$sql=mysql_query("select count(*) as total from tb_news",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	    
	     echo  "Oops,There is no Highlight！";
    
	    }
		else
	    {
		  if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
		   {
		     $page=1;
		   }
		   else
		   {
		     $page=intval($_GET[page]);
		   }
		   
		   $pagesize=16;
		   
		   if($total<$pagesize)	
		   {
		     $pagecount=1;
		   }
		   else
		   {
		     if($total%$pagesize==0)
			  {
			    $pagecount=intval($total/$pagesize);
			  }
			  else
			  {
			    $pagecount=intval($total/$pagesize)+1;
			  } 
		   }
		}
		
		
		 $sql_list=mysql_query("select * from tb_news order by id desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		 while($info_list=mysql_fetch_array($sql_list))
	    { 
	?>
    <div class="highlights_list">
        <?php
                	echo "<a href='news_look.php?id=".$info_list[id]."'>".$info_list[title]."</a>&nbsp;-&nbsp;".$info_list[createtime];
		?>            
    </div>
    <?php
		}
	?>
    
    <div id="page_num">
    
    <?php echo $page;?>&nbsp;/&nbsp;<?php echo $pagecount?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
	<?php
   if($page>=2)
	{
    ?>

  <a href="news_list.php?page=1" title="First"><font face="webdings"> 9 </font></a> 
  <a href="news_list.php?page=<?php echo $page-1;?>" title="Previous"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="news_list.php?page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="news_list.php?page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        ...&nbsp;<a href="news_list.php?page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="Next"> <font face="webdings">8 </font></a> 
		<a href="news_list.php?page=<?php echo $pagecount;?>" title="Last"><font face="webdings"> : </font></a>
  <?php 
      }

  ?>
	&nbsp;</div>
</body>
</html>