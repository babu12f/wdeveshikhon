<?php
    require('db_connect.php');

    $person_id = $_GET['person_id'];

    $sql = "delete from people where id = $person_id";

    $rs = mysqli_query($connection, $sql);

    if($rs){
        header('Location: peoplelist.php?message=Your Data Deleted Successfully');
    }else{
        echo "Error";
    }


?>