<?php
    include_once("top_index.php");
    $id=$_GET[id];
    
    
    $sqlxs=mysql_query("select * from tb_coursefile where id='".$id."'",$conn);
    $infoxs=mysql_fetch_array($sqlxs);//get course info

    //judge usertype
    $sqlu=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'and courseid=".$infoxs[courseid]."",$conn);
    $infou=mysql_fetch_array($sqlu);
    if($infou=="")
    {
        echo "<div align=\"center\" style=\"margin-top:100px;\">Oops!(;￢д￢)<br /><br />&nbsp;Your account is not matched~<br /><br />눈_눈Please operate correctly!<br />
";
        echo "<script>alert('Ooops!\\nPermission denied!\\n눈_눈Please operate correctly!');history.go(-1);</script>";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $course_file;?></title>
    <style>
        body{
            background-image:url(graph/Blog/grey.jpg);
            background-repeat:repeat;
        }
        :hover{
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition:  0.5s;
        }
        #file_main{
            margin:0 auto;
            width:950px;
            height:auto;
            margin-top:0px;
            margin-bottom:30px;
            padding-bottom:20px;
            background-color:#FFF;
            -webkit-box-shadow: #999 0px 0px  5px ;
            -moz-box-shadow: #999 0px 0px 5px ;
            box-shadow: #999 0px 0px 5px ;
            display:table;
        }
        #file_ttl{
            width:900px;
            margin:0 auto;
            margin-bottom:20px;
            height:110px;
            background-image:url(<?php echo $res_ttl;?>);
        }
        #file_info{
            width:540px;
            min-height:300px;
            height:auto;
            -webkit-box-shadow: #999 0px 0px  0px ;
            -moz-box-shadow: #999 0px 0px 0px ;
            box-shadow: #999 0px 0px 0px ;
            float:left;
            margin-left:100px;
            display:table;
        }
        .file_box{
            width:500px;
            min-height:30px;
            height:auto;
            background-color:#f9f9f9;
            margin:10px;
            float:left;
            -webkit-box-shadow: #999 0px 0px  1px ;
            -moz-box-shadow: #999 0px 0px 1px ;
            box-shadow: #999 0px 0px 1px ;
            /*text-align:center;*/
            padding:15px 10px 10px 10px;
            color:#999;
            font-size:14px;
        }
        #file_pic{
            width:200px;
            height:200px;
            background-color:#f9f9f9;
            float:right;
            margin-right:100px;
            margin-top:10px;
            text-align:center;
            padding:40px 0px;
            -webkit-box-shadow: #999 0px 0px  1px ;
            -moz-box-shadow: #999 0px 0px 1px ;
            box-shadow: #999 0px 0px 1px ;
        }
        #download{
            width:130px;
            height:20px;
            float:right;
            margin:0 auto;
            margin-right:35px;
            margin-top:20px;
        }
        #download a{
            display:block;
            width:130px;
            height:20px;
            color:#ffffff;
            font-size:18px;
            font-weight:700;
            text-align:center;
            padding:10px 0px;
            text-decoration:none;
            background-color:#06F;
            -webkit-box-shadow: #666 0px 0px  1px ;
            -moz-box-shadow: #6660px 0px 1px ;
            box-shadow: #666 0px 0px 1px ;
        }
        #download a:hover{
            -webkit-box-shadow: #000 0px 0px  15px ;
            -moz-box-shadow: #000 0px 0px 15px ;
            box-shadow: #000 0px 0px 15px ;
            background-color:#0CF;
        }
    </style>
    </head>

    <body>
        <div id="file_main">
            <div id="file_ttl"></div>
                <?php
                    //$sqlxs=mysql_query("select * from tb_coursefile where id='".$id."'",$conn);
                    //$infoxs=mysql_fetch_array($sqlxs);
                ?>
            <div id="file_info">
                <div class="file_box">
                    <?php
                        echo "资源名称&nbsp;&nbsp;:&nbsp;&nbsp;".$infoxs[title];
                    ?>
                </div>
                <div class="file_box">
                    <?php
                        echo "上传时间&nbsp;&nbsp;:&nbsp;&nbsp;".$infoxs[createtime];
                    ?>
                </div>
                <div class="file_box">
                    <?php
                        echo "下载次数&nbsp;&nbsp;:&nbsp;&nbsp;".$infoxs[downtimes];
                    ?>
                </div>
                <div class="file_box">
                    <?php
                        echo $infoxs[content];
                    ?>
                </div>
           </div>
           <div id="file_pic">
                   <img src="<?php 
                    if($infoxs[suffix]==".ppt"||$infoxs[suffix]==".pptx")
                    {
                        echo "./graph/courses/pic/icon/ppt.png";
                    }
                    else if($infoxs[suffix]==".doc"||$infoxs[suffix]==".docx")
                    {
                        echo "./graph/courses/pic/icon/word.png";    
                    }
                    else if($infoxs[suffix]==".xls"||$infoxs[suffix]==".xlsx")
                    {
                        echo "./graph/courses/pic/icon/excel.png";    
                    }
                    else if($infoxs[suffix]==".txt")
                    {
                        echo "./graph/courses/pic/icon/txt.png";        
                    }
                    else if($infoxs[suffix]==".zip")
                    {
                        echo "./graph/courses/pic/icon/zip.jpg";        
                    }
                    else if($infoxs[suffix]==".rar")
                    {
                        echo "./graph/courses/pic/icon/rar.jpg";        
                    }
                    else if($infoxs[suffix]==".jpg"||$infoxs[suffix]==".gif"||$infoxs[suffix]==".png"||$infoxs[suffix]==".GIF"||$infoxs[suffix]==".JPG"||$infoxs[suffix]==".PNG"||$infoxs[suffix]==".JPEG")
                    {
                        echo "./graph/courses/pic/icon/pic.png";        
                    }
                    else if($infoxs[suffix]==".pdf")
                    {
                        echo "./graph/courses/pic/icon/pdf.jpg";        
                    }
                    else
                    {
                        echo "./graph/courses/pic/icon/doc.jpg";    
                    }
                ?>" title="<?php echo $infoxs[title];?>" width="128" height="128"/>
                <div id="download">
                    <a href="downloadfile.php?id=<?php echo $infoxs[id];?>">Download</a>
                </div>
           </div>
        </div>
        <div id="foot">
                <?php include_once("footer.php");?>
        </div>
    </body>
</html>