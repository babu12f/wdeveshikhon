<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>People List</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                People List
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>@id</th>
                        <th>name</th>
                        <th>father name</th>
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