<?php
    require('db_connect.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $pname = $_POST['pname'];
        $pprice = $_POST['pprice'];
        $stock = $_POST['stock'];

        $query = "insert into products (pname, pprice, stock) values ('$pname', '$pprice', '$stock')";

        $rs = mysqli_query($connection, $query);
        $pid = mysqli_insert_id($connection);

        if($rs){
            echo '<tr><td>'.$pid.'</td><td>'.$pname.'</td><td>'.$pprice.'</td><td>'.$stock.'</td><td><button class="btn btn-info btn-sm edit_prod" data-id="'.$pid.'">edit</button> | <button class="btn btn-danger btn-sm del_prod" data-id="'.$pid.'">Delete</button></td></tr>';
        }else{
            echo "error";
        }

    }