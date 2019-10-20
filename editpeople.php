<!DOCTYPE html>
<?php 
    require('db_connect.php');

    $people_id = $_GET['id'];

    $query = "select * from people where id = $people_id";

    $rs = mysqli_query($connection, $query);

    if(mysqli_num_rows($rs) > 0)
    {
        $row = mysqli_fetch_assoc($rs);

        $id = $row['id'];
        $name = $row['name'];
        $fname = $row['father_name'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Data Edit Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Person Information Edit Form
            </div>

            <div class="card-body">
                <form action="update_person_info.php" method="post">

                    <div class="form-group">
                        <input type="hidden" class="form-control"
                            value="<?php echo $id; ?>"
                            name="person_id" placeholder="Enter Your Name">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"
                            value="<?php echo $name;?>"
                            name="person_name" placeholder="Enter Your Name">
                    </div>
                    
                    <div class="form-group">
                        <label>Father Name</label>
                        <input type="text" 
                            value="<?php echo $fname;?>"
                            class="form-control" name="person_father_name" placeholder="Enter Your Name">
                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Update Information">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>