<!DOCTYPE html>
<html lang="en">
<head>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Javascript clss 4</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="sendmail.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Body</label>
                <textarea class="form-control" name="body" cols="5" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary"  name="send">Send</button>
        </form>
    </div>
</body>
</html>