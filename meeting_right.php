<?php 
    switch($_GET['szj']){
        case "Introduction":
            include("meeting_invitation.php");
            break;
        case "Program":
            include("meeting_program.php");
            break;
        case "Accommodation":
            include("meeting_accom.php");
            break;
        case "":
            include("meeting_invitation.php");
            break;
    }
?>