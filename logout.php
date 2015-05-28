<?php
    session_start();
    session_unregister("unc");
    echo "<script>window.location.href='home';</script>";
?>
