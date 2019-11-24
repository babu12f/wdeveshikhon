<!DOCTYPE html>
<html lang="en">
<head>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>SAP</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Product List
                <div class="pull-right">
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Add New Product</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>@ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>product 1</td>
                            <td>120</td>
                            <td>10</td>
                            <td><button class="btn btn-info btn-sm">edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="pname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="pname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="pname">
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
</script>
</body>
</html>