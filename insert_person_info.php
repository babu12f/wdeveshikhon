<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['person_name'];
        $fname = $_POST['person_father_name'];

        // 1.setp connent to mysql or database
        // database server name => localhot
        // database username => root
        // database password => 
        // dtabase name => wdev_eshikhon

        // 2.step execute query
        $query = "insert into people (name, father_name) values ('$name', '$fname')";

        $rs = mysqli_query($connection, $query);

        if($rs){
            header("Location: people.php");
        }else{
            echo "error";
        }

    }

?>