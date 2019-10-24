<?php 
    // $GLOBALS
    // echo "<pre>";
    // print_r($GLOBALS);
    // echo "</pre>";

    // $GLOBALS['hasan'] = "md. Hasan";

    // echo "<pre>";
    // print_r($GLOBALS);
    // echo "</pre>";

    // $_SERVER
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    session_start();
    $_SESSION['name'] = "Hsan";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";


?>