<?php

    if(isset($_POST['submit']))
    {
        $upload_folder = "uploads/";
        if(isset($_FILES['profile_pic']))
        {
            //$target_file = $upload_folder . $_FILES["profile_pic"]["name"];
            $ext = explode(".", $_FILES["profile_pic"]["name"]);
            $ext = end($ext);
            $target_file = $upload_folder . uniqid() . "." . $ext;
            $rs = move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file);
            if($rs){
                echo "file upload successfull";
            }else{
                echo "something error";
            }
        }
    }


?>