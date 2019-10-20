<?php
    require('db_connect.php');

    if(isset($_POST['submit']))
    {
        $name = $_POST['person_name'];
        $fname = $_POST['person_father_name'];
        $id = $_POST['person_id'];

        $query = "update people set name = '$name', father_name = '$fname' where id = $id";

        $rs = mysqli_query($connection, $query);
        
        if($rs)
        {
            header('Location: peoplelist.php');
        }
        else 
        {
            echo "error";
        }
    }
?>