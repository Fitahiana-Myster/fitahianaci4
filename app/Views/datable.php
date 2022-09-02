

<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/css.css">
<link rel="stylesheet" href="/font/css/all.css">
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
              <th>Salary</th>
            </tr>
        </thead>
        <tbody id="show_datac">
        </tbody>
    </table>
    <script src="<?php echo base_url('/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  show_product()
  $('#example').DataTable();
  function show_product(){
      $.ajax({
          type  : 'GET',
          url   : "/code_controller/product_data",
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
              $('#show_datac').html(html);
          }
      });
  };
});
</script>
