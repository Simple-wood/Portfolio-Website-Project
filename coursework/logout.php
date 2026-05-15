<?php
    session_start();

    if(isset($_SESSION["sessionID"]))
    {
        unset($_SESSION["sessionID"]);
        header("Location: index.php");
        die();
    }
?>