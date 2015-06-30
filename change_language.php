<?php
    /*通过连接进行语言切换*/
    @session_start();
    if(isset($_GET['lang']))
        $_SESSION['lang'] = $_GET['lang'];
        
    if($_SESSION['lang'] == "cn")
        include("./language/ch/global.ln");
    else if($_SESSION['lang'] == "en")
        include("./language/en/global.ln");
?>