<?php
    require('session_manager.php');
    require('db_connect.php');

    $token = $_GET['token'];
    $user_id = $_GET['user_id'];

    $query = "select * from verify_email where user_id = $user_id and token='$token'";

    $rs = mysqli_query($connection, $query);

    if( mysqli_num_rows($rs) > 0)
    {
        $update_user_sql = "update users set email_verify = 1 where id=$user_id";
        $update_user_rs = mysqli_query($connection, $update_user_sql);

        $delete_token_sql = "delete from verify_email where user_id = $user_id";
        $delete_token_rs = mysqli_query($connection, $delete_token_sql);

        header("Location: login.php?message=You Email Varified Successfully You Can Login Now :)");
    }
    else{
        header("Location: login.php?message=Bad Request :(");        
    }
 
?>