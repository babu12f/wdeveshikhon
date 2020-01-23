<!DOCTYPE html>
<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Data Insert Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include('nav_bar.php'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                File Upload Form
            </div>

            <div class="card-body">

                <?php if(isset($_GET['message'])) { ?>

                    <div class="alert alert-success" role="alert">
                        <?php echo $_GET['message']; ?>
                    </div>
                
                <?php } ?>
                

                <form action="upload_file.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="person_name" placeholder="Enter Your Name">
                    </div>
                    
                    <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" class="form-control" name="profile_pic">
                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Save Information">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>