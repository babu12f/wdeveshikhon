<?php
    require('db_connect.php');

    // 2.step query
    $query = "select * from products";

    $rs = mysqli_query($connection, $query);
    
    if( mysqli_num_rows($rs) > 0)
    {
        while( $row = mysqli_fetch_assoc($rs) )
        {
            echo '<tr><td>'.$row['id'].'</td><td>'.$row['pname'].'</td><td>'.$row['pprice'].'</td><td>'.$row['stock'].'</td><td><button class="btn btn-info btn-sm edit_prod" data-id="'.$row['id'].'">edit</button> | <button class="btn btn-danger btn-sm del_prod" data-id="'.$row['id'].'">Delete</button></td></tr>';
        }
    }

?>