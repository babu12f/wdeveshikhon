<?php
    // 1.connect to database
    $server = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "wdev_eshikhon";

    $connection = mysqli_connect($server, $user_name, $password, $db_name);

    if( !$connection ){
        die("Not Connect to Database");
    }
?>