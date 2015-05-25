<?php date_default_timezone_set(PRC);  include_once("./conn/conn.php"); include_once("./function.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	#inside_main{
		width:835px;

	}
	.accom{
        font-family:"Microsoft YaHei";
		width:780px;
		min-height:400px;
		height:auto;
		background-color:#f9f9f9;
		float:left;
		padding:10px;
		margin:10px 10px 10px 20px ;
		-webkit-box-shadow: #666 0px 0px  5px ;
		-moz-box-shadow: #666 0px 0px 5px ;
		box-shadow: #666 0px 0px 5px ;
	}
	
	
	.hotel_pic{
		width:770px;
		height:auto;
		/*float:left;*/
		margin:0 auto;
		margin:10px 20px 10px 0px;
		/*background-color:#930;*/
	}
	.hotel_pic img{
		width:780px;
		height:auto;
	}
	.hotel_info{
		width:770px;
		/*min-height:250px;*/
		height:auto;
		/*background-color:#096;*/
		/*float:right;*/
		margin:0 auto;
		padding:15px;
		text-align:left;
	}
    .hotel_info img{
        width: auto;
        max-width: 750px;
    }
</style>
</head>

<body>
	<div id="inside_main">
    	<?php
        	$sql_meeting=mysql_query("select * from tb_meeting order by id desc limit 1");
			$info_meeting=mysql_fetch_array($sql_meeting);//get the meeting info
			
			$hotel=explode("#",$info_meeting[hotel]);//alert to array
			foreach($hotel as $key=>$value)
			{
				$sql_hotel=mysql_query("select * from tb_hotel where name='".$value."'");
				$info_hotel=mysql_fetch_array($sql_hotel);//get corresponding hotel info
		?>
        <div class="accom">
        	
            
            	<div class="hotel_list">
                	<div class="hotel_pic">
                    	<img src="<?php echo $info_hotel[pic];?>" title="<?php echo $info_hotel[name];?>"/>
                    </div>
                    <div class="hotel_info">
                    	<?php echo $info_hotel[info];?>
                    </div>
                </div>
           
         </div>
         <?php
			}
		 ?>
    </div>
</body>
</html>