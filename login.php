<?php 

    session_start();

    //Created the session (if user valid)
    if(!isset($_SESSION["weird_session_name"]))
    {
        $_SESSION["weird_session_name"] = "USER_INFO";
    }
?>