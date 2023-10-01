<?php  

    session_start();

    include 'inc/db/connect.php';
    
    /* ini_set('display_errors','On'); */

    $App = 'inc/app/';

    include $App . 'function.php';
    include $App . 'head.php';
    include $App . 'nav.php';
    
?>