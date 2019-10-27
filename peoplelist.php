<!DOCTYPE html>
<?php  require('session_manager.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>People List</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include('nav_bar.php'); ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                People List
            </div>

            <div class="card-body">
                <?php if(isset($_GET['message'])) { ?>

                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['message']; ?>
                </div>

                <?php } ?>

                <table class="table table-bordered table-hover">
                    <tr>
                        <th>@id</th>
                        <th>name</th>
                        <th>father name</th>
                        <th></th>
                    </tr>

                    <?php
                        require('db_connect.php');

                        // 2.step query
                        $query = "select * from people";

                        $rs = mysqli_query($connection, $query);
                        
                        if( mysqli_num_rows($rs) > 0)
                        {
                            while( $row = mysqli_fetch_assoc($rs) )
                            {
                    ?>
                                <tr>
                                    <td> <?php echo $row['id'];  ?> </td>
                                    <td> <?php echo $row['name'];  ?> </td>
                                    <td> <?php echo $row['father_name'];  ?> </td>
                                    <td> 
                                        <a href="editpeople.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Edit</a> | 
                                        <a href="deletepeople.php?person_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a> 
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>