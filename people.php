<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Data Insert Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Person Information Form
            </div>

            <div class="card-body">
                <form action="insert_person_info.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="person_name" placeholder="Enter Your Name">
                    </div>
                    
                    <div class="form-group">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="person_father_name" placeholder="Enter Your Name">
                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Save Information">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>