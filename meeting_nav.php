<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>  
        <div class="nav_box_top"></div>
        <a href="meetingIntroduction"><div class="nav_box" 
            <?php
                if(($_GET[szj]=="Introduction"||$_GET[szj]==""))
                {
            ?>
                style="background-color:#666666"
            <?php
                }
            ?>
        >Introduction</div></a>
        
        <a href="meetingProgram"><div class="nav_box"
            <?php
                if(($_GET[szj]=="Program"))
                {
            ?>
                style="background-color:#666666"              
            <?php
                }
            ?>
        >Program</div></a>
        <a href="meetingAccommodation"><div class="nav_box" 
            <?php
                if(($_GET[szj]=="Accommodation"))
                {
            ?>
                style="background-color:#666666"              
            <?php
                }
            ?>
        >Accommodation</div></a> 
        <a href="home"><div class="nav_box">←&nbsp;Homepage</div></a>            
    </body>
</html>