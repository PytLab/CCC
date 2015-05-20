<?php date_default_timezone_set(PRC);include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show_hightlights</title>
<style>
	* { margin:0; padding:0; word-wrap: break-word; }
	#show_highlights{
		width:220px;
		margin-left:15px;
		margin-top:15px;
	}
	#show_highlights a{
		text-decoration:none;
		font-weight:800;
		color:#000060;
	}
	#show_highlights a:hover{
		color:#408080;
	}
	li{
		list-style-type:none;
	}
</style>
</head>

<body>
	<div id="show_highlights">
    	<?php
		    $sql=mysql_query("select * from tb_highlights order by createtime desc limit 0,4",$conn);
		    $info=mysql_fetch_array($sql);
		    if($info!=false)	//get highlights info
			{
		        $i=1;
		        do{		
	    ?>
    	<p>
            <li>
                <a href="highlights_look?id=<?php echo $info[id]?>" title="<?php echo $info[title]?>">
        	        <span class="affices_title">
				        <?php 
					        echo $info[title]; 
				        ?>
                    </span>
                </a>
                <span class="affiches_time">
				    <?php echo '-'.$info[pub_time];?>
                </span>
            </li>
        </p>
        <br />
        <?php
		            $i++;
		        }while($info=mysql_fetch_array($sql));
		    }
		    else
		    {
			    echo "No Highlights!";	
		    }
	    ?>
    </div>
</body>
</html>