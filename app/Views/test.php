<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Masque</title>
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="/css/bootstrap.css"> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/css/css.css"> -->
    <link rel="stylesheet" href="/font/css/all.css">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Code
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
<div class="tbl-GlobalExploitation">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                      <th>code2</th>
                      <th>kaominina</th>
                      <th>fokontany</th>
                      <th>vohitra</th>
                      <th>laharana_tokan_trano</th>
                      <th>laharana</th>
                      <th>plof</th>
                      <th>lot</th>
                      <th>mpanao_saisi</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<!--MODAL DELETE-->
<form action="/code_controller/delete" method="post">
<div class="modal fade" id="Modal_Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h7>Are you sure want to delete this Code??</h7>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_code" class="id_code">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
</form>
        <!--END MODAL DELETE-->

<script src="<?php echo base_url('/js/jquery-3.6.0.min.js'); ?>"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product
          $('#myTable').dataTable();
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'GET',
                url   : "<?php echo site_url('code_controller/product_data')?>",
                async : true,
                dataType : 'json',
                data : {product_code:"product_code"},
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].code2+'</td>'+
                                '<td>'+data[i].kaominina+'</td>'+
                                '<td>'+data[i].fokontany+'</td>'+
                                '<td>'+data[i].vohitra+'</td>'+
                                '<td>'+data[i].laharana_tokan_trano+'</td>'+
                                '<td>'+data[i].laharana+'</td>'+
                                '<td>'+data[i].plof+'</td>'+
                                '<td>'+data[i].lot+'</td>'+
                                '<td>'+data[i].mpanao_saisi+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit fa fa-pencil" data-product_code="'+data[i].id_code+'" ></a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete fa fa-trash" data-product_code="'+data[i].id_code+'"></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
            });
        }

        //Save product
        $('#btn_save').on('click',function(){
            var product_code = $('#product_code').val();
            var product_name = $('#product_name').val();
            var price        = $('#price').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save')?>",
                dataType : "JSON",
                data : {product_code:product_code , product_name:product_name, price:price},
                success: function(data){
                    $('[name="product_code"]').val("");
                    $('[name="product_name"]').val("");
                    $('[name="price"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var product_code = $(this).data('product_code');
            var product_name = $(this).data('product_name');
            var price        = $(this).data('price');

            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(product_code);
            $('[name="product_name_edit"]').val(product_name);
            $('[name="price_edit"]').val(price);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var product_code = $('#product_code_edit').val();
            var product_name = $('#product_name_edit').val();
            var price        = $('#price_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('code_controller/update')?>",
                dataType : "JSON",
                data : {product_code:product_code , product_name:product_name, price:price},
                success: function(data){
                    $('[name="product_code_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="price_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var product_code = $(this).data('product_code');

            $('#Modal_Delete').modal('show');
            $('[name="product_code_delete"]').val(product_code);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var product_code = $('#product_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('code_controller/delete')?>",
                dataType : "JSON",
                data : {product_code:product_code},
                success: function(data){
                    $('[name="product_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                },
        error : function() {
            console.log("an error has occurred while posting response!");
        }
            });
            return false;
        });

    });

</script>
</body>
</html>
