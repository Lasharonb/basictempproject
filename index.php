<?php
    define('__ROOT__', dirname(__FILE__));
    session_start();
    
    // HEAD
    require_once(__ROOT__.'/template/head.php'); 

    //\HEAD
    
    //NAV
    require_once(__ROOT__.'/template/nav.php'); 
    //\NAV
    
    //CONTENT
    require_once(__ROOT__.'/template/content.php'); 
    //\CONTENT
    
    //FOOTER
    require_once(__ROOT__.'/template/footer.php'); 
    //\FOOTER
