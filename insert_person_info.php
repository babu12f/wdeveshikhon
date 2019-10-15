<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['person_name'];
        $fname = $_POST['person_father_name'];

        echo "person name : " . $name . "<br>"; 

        echo "person father name : " . $fname . "<br>";
    }

?>