<!DOCTYPE html>
<?php
    require('session_manager.php');
    require('db_connect.php');

    if( $_SERVER['REQUEST_METHOD'] == "POST" )
    {
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];
        $password = md5($password);

        if($email != "" && $password != "")
        {
            $sql = "select * from users where email = '$email' and password = '$password'";

            $rs = mysqli_query($connection, $sql);

            if(mysqli_num_rows($rs) > 0)
            {
                $row = mysqli_fetch_assoc($rs);

                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];

                header('Location: people.php');
            }
            else
            {
                header('Location: login.php?emsg=Your Email or Password Incorrect !');
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
    <title>Login Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include('nav_bar.php'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Login Form
            </div>

            <div class="card-body">

                <?php if(isset($_GET['message'])) { ?>

                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['message']; ?>
                </div>

                <?php } ?>
                
                <?php if(isset($_GET['emsg'])) { ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['emsg']; ?>
                </div>

                <?php } ?>

                <form action="" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="user_email" placeholder="Enter Your Email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="user_password" placeholder="Enter Your Password" required>
                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>