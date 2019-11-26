<?php

require('db_connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];

    $sql = "delete from products where id = $id";

    $rs = mysqli_query($connection, $sql);

    if($rs){
        echo "true";
    }else{
        echo "false";
    }
}