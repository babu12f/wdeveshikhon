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
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#product_add_form_modal">Add New Product</button>
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
                    <tbody id="product_list">
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

<!-- Modal -->
<div class="modal fade" id="product_add_form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Add Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="" id="product_add_form">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="pname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" name="pprice">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input type="text" class="form-control" name="stock">
            </div>
            <button type="submit" class="btn btn-primary">Save Product</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="./js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(function(){

        // load data initally
        function load_product(){
            $.ajax({
                url: 'productList.php',
                method: 'GET',
                success: function(res){
                    $('#product_list').append(res);
                },

            });
        }
        load_product();

        // insert product
        $("#product_add_form").submit(function(e){
            e.preventDefault();

            var pname = $('[name="pname"]').val();
            var pprice = $('[name="pprice"]').val();
            var stock = $('[name="stock"]').val();

            $.ajax({
               url: 'addProduct.php',
               method: 'POST',
               data: {
                   pname: pname,
                   pprice: pprice,
                   stock: stock
               },
               success: function(res){
                   $('#product_list').append(res);
               },
               error: function(res){
                   console.log(res);
               }
            });

        });

        // delete product
        $('body').on('click', '.del_prod', function(e){
            //var el = $(this).parent().parent().find('td:first-child').html();
            var id = $(this).data('id');
            var tr = $(this);

            $.ajax({
                url: 'deleteProduct.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    if(res == "true"){
                        tr.closest('tr').fadeOut();
                    }
                }
            })

        });
    });
</script>
</body>
</html>