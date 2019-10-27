<!DOCTYPE html>
<?php
    require('session_manager.php');
    require('db_connect.php');

    if( $_SERVER['REQUEST_METHOD'] == "POST" )
    {
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        if($name != "" && $email != "" && $password != "")
        {
            $sql = "insert into users (name, email, password) values ('$name', '$email', '$password')";

            $rs = mysqli_query($connection, $sql);

            if($rs)
            {
                header('Location: login.php?message=You Register Successfully You Can Login Now');
            }
            else
            {
                echo "Something Errror";
            }
        }
        else
        {
            echo "Enter Your Valid Data";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include('nav_bar.php'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Registration Form
            </div>

            <div class="card-body">

                <form action="" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Enter Your Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="user_email" placeholder="Enter Your Email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="user_password" placeholder="Enter Your Password" required>
                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>