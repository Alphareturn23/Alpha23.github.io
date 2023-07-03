<?php
    session_start();
    if ($_POST['passcode']=="051192") {
       $_SESSION['token'] = "comein";
        header("Location: psguniwide.php");
    } else {
        header("Location: index.php");
    }
   



    
?>