let index = "";
  var table =$('#show_data').DataTable({
    responsive: true,
    lengthMenu: [
          [ 10, 50, 100, 1000 ],
          [ '10', '50', '100', 'tout' ]
      ],
  "ajax":{
    url:"/code_controller/product_data",
    type:"POST",
    dataType:"json"
  },
  "columns" : [
    {data:"id_code"},
    {data:"farany"},
    {data:"kaominina"},
    {data:"fokontany"},
    {data:"vohitra"},
    {data:"laharana_tokan_trano"},
    {data:"laharana"},
    {data:"plof"},
    {data:"lot"},
    // {data:"mpanao_saisi"},

    {data: "id_code",
       render: function ( data, type, row, meta ) {
         return '<button data-id="'+ data +'" id="edit" onclick="editCode(event)" class="btn btn-info btn-sm fa fa-pencil" ' +
         '></button> '  +
         '<button data-id="'+ data +'" id="detail" onclick="detailCode(event)" class="btn btn-success btn-sm fa fa-eye"></button> ' +
         '<button data-id="'+ data +'" id="delete" onclick="deleteCode(event)" class="btn btn-danger btn-sm fa fa-trash"></button>'
       }
    }

  ],
    order: [[0, 'desc']]
});
// $('#show_data tbody').on( 'click', 'button', function () {
//         var data = table.row( $(this).parents('tr') ).data();
//         alert( "The ID is: "+ data[ 3 ] );
//     } );
function editCode(e){
  var id_code=(e.target.getAttribute('data-id'));
  $.ajax({
      type : "POST",
      url  : "/code_controller/check_data",
      dataType : "JSON",
      data : {
        id_code:id_code
      },
      success: function(response){

// dia tahaka izay le liste :)
// minoa ah fa misy azonlah ampiasaina zay idée zay
// ok merci bcp lesy eeeh
// ndao ar mou :)) mazoto e
          const data = response.data_code;

          // mameno ny liste fokontany aloha
        $('#fokontany2').html(response.liste_fokotany);
        $('#vohitra2').html(response.liste_vohitra);// otzzao

          // avy eo izay vao mameno ilay select
          // mila asina temps de pause kely (timeout)
          // ny antony mb efa feno tsra ilay select vao mande ilay fanasina valeur
          // afaka tapahananlah amzay le anydesk raha ohatra ka
          // de raha vohitra koa zani de otr'zay ihn ny fanaovana azy?
          // oui, otrzay ian, avy dia apio vohaitra ary amlay model raha ilaina liste dia feno eto

          setTimeout(function () {
            $('#id_code2').val(data.id_code);
            $('#kaominina2').val(data.kaominina);
            $('#fokontany2').val(data.fokontany);
            //$('select#fokontany2 option[value='+data.fokontany+']').prop('selected',true); // ity mants version tsy tena clean code :)
            // grave be lesy le code teo teo
            // courage e
            $('#vohitra2').val(data.vohitra);
            $('#laharana_tokan_trano2').val(data.laharana_tokan_trano);
            $('#laharana2').val(data.laharana);
            $('#plof2').val(data.plof);
            $('#lot2').val(data.lot);
            $('#mpanao_saisi2').val(data.mpanao_saisi);

            $('#editModal').modal('show');
          }, 500);


        // ny olana miantso ajax hafa elah mameno anle select
        // dia mandrapa feno aniny anefa efa lancer le code aiza io ajax io ?
        // tokony oe vita zay ajax zay vao mande ty aja iray ty

        //vety2 fa atoroko anao zao ihn



      //   for(i=0; i<data.length; i++){
      //     $('#id_code2').val(data[i].id_code);
      //     $('#kaominina2').val(data[i].kaominina);
      //     $('select#fokontany2').val(data[i].fokontany);
      //     $('#vohitra2').val(data[i].vohitra);
      //     $('#laharana_tokan_trano2').val(data[i].laharana_tokan_trano);
      //     $('#laharana2').val(data[i].laharana);
      //     $('#plof2').val(data[i].plof);
      //     $('#lot2').val(data[i].lot);
      //     $('#mpanao_saisi2').val(data[i].mpanao_saisi);
      //   }
      // $('#editModal').modal('show');
     }
  });
  return false;
}

function deleteCode(e){
  var id_code= (e.target.getAttribute('data-id'));
  $('#id_code').val(id_code);
  $('#deleteModal').modal('show');
}

$(document).ready(function(){

// manampy consort
var i=0;
  $("#consort").click(function () {
		 i++;
		$("#consort_vaovao").append(
      '<div class="modal-body' + i + '"><br>'+
      '<h4 style="text-align: center; font-weight: bold;">Consort ' + i + '</h4>' +
      '<hr>' +
        '<div class="row">' +
        '<div class="form-group col-md-4">' +
          '<label>Anarana sy Fanampiny:</label>' +
          '<input type="text" name="nom[]" class="form-control" id="nom">' +
        '</div>' +
          '<div class="form-group col-md-4">' +
            '<label>Daty:</label>' +
            '<input type="date" name="date_n[]" class="form-control" id="date_n">' +
          '</div>' +
          '<div class="form-group col-md-4">' +
            '<label>Toerana nahaterahana:</label>' +
            '<input type="text" name="lieu_n[]" class="form-control" id="lieu_n">' +
          '</div>' +
        '</div>' +
        '<div class="row">' +
          '<div class="form-group col-md-4">' +
            '<label>Adiresy:</label>' +
            '<input type="text" name="adresse[]" class="form-control" id="adresse">' +
          '</div>' +
          '<div class="form-group col-md-4">' +
            '<label>Tél:</label>' +
            '<input type="text" name="tel[]" class="form-control" id="tel">' +
          '</div>' +
          '<div class="form-group col-md-4">' +
            '<label>Lahy/Vavy:</label>' +
            '<select class="form-control" name="genre[]" id="genre">' +
              '<option value=""></option>' +
              '<option value="Lahy">Lahy</option>' +
              '<option value="Vavy">Vavy</option>' +
            '</select>' +
          '</div>' +
        '</div>' +
        '<div class="row">' +
          '<div class="form-group col-md-4">' +
            '<label>Laharana:</label>' +
            '<input type="text" name="cin[]" class="form-control cin" id="cin" maxlength="12" required>' +
          '</div>' +
          '<div class="form-group col-md-4">' +
            '<label>Daty :</label>' +
            '<input type="text" name="date_d_cin[]" class="form-control" id="date_d_cin">' +
          '</div>' +
          '<div class="form-group col-md-4">' +
            '<label>Toerana nanomezana :</label>' +
            '<input type="text" name="tao[]" class="form-control" id="tao">' +
          '</div>' +
        '</div><br>' +
        '<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove fa fa-minus"></button>' +
      '</div>'
		);
	});

  // mamafa consort
  $(document).on("click", ".btn_remove", function () {
  var button_id = $(this).attr("id");
  $(".modal-body" + button_id + "").remove();
});

    // get add code
    $('.btn-add2').on('click',function(){
        $('#tompony_modal').modal('hide');
        $('#add2').modal('show');
    });

    // Tompony
    $('#tompony').on('click',function(){
          $('#add2').modal('hide');
        $('#tompony_modal').modal('show');
    });

    // momba ny tany
    $('.momba_ny_tany').on('click',function(){
          $('#tompony_modal').modal('hide');
        $('#momba_ny_tany').modal('show');
    });

    // momba ny tany to tompony
    $('#tompony_r').on('click',function(){
          $('#momba_ny_tany').modal('hide');
        $('#tompony_modal').modal('show');
    });

    // momba ny fananan-tany
    $('#fananana_modal2').on('click',function(){
          $('#momba_ny_tany').modal('hide');
        $('#fananana_modal').modal('show');
    });
    $('#momba_ny_tany_r').on('click',function(){
          $('#fananana_modal').modal('hide');
        $('#momba_ny_tany').modal('show');
    });
    // tondro_mpifanila
    $('#tondro_mpifanila2').on('click',function(){
          $('#fananana_modal').modal('hide');
        $('#tondro_mpifanila').modal('show');
    });
    $('#fananana_r').on('click',function(){
          $('#tondro_mpifanila').modal('hide');
        $('#fananana_modal').modal('show');
    });
    // momba ny trano
    $('#momba_ny_trano').on('click',function(){
          $('#tondro_mpifanila').modal('hide');
        $('#momba_ny_trano2').modal('show');
    });
    $('#tondro_mpifanila_r').on('click',function(){
          $('#momba_ny_trano2').modal('hide');
        $('#tondro_mpifanila').modal('show');
    });
    // fomba ampiasana azy
    $('#fomba_ampiasana_azy').on('click',function(){
          $('#momba_ny_trano2').modal('hide');
        $('#fomba_ampiasana_azy2').modal('show');
    });
    $('#momba_ny_trano_r').on('click',function(){
          $('#fomba_ampiasana_azy2').modal('hide');
        $('#momba_ny_trano2').modal('show');
    });
    // mpilaza fifandraisana
    $('#mpilaza_fifandraisana').on('click',function(){
          $('#fomba_ampiasana_azy2').modal('hide');
        $('#mpilaza_fifandraisana2').modal('show');
    });
    $('#fomba_ampiasana_azy_r').on('click',function(){
          $('#mpilaza_fifandraisana2').modal('hide');
        $('#fomba_ampiasana_azy2').modal('show');
    });
    // mpanao fanadihadiana
    $('#mpanao_fanadihadiana').on('click',function(){
          $('#mpilaza_fifandraisana2').modal('hide');
        $('#mpanao_fanadihadiana_f').modal('show');
    });
    $('#mpilaza_fifandraisana_r').on('click',function(){
          $('#mpanao_fanadihadiana_f').modal('hide');
        $('#mpilaza_fifandraisana2').modal('show');
    });
// mampiseo liste fokontany
    $('#kaominina').change(function () {
  var country_id = $('#kaominina').val();
  if (country_id != '')
  {
    $.ajax({
      url: "/code_controller/liste_fkt",
      method: "POST",
      data: {
        country_id: country_id
      },
      success: function (data) {
            $('#fokontany').html(data);
        $('#vohitra').html('<option value="">- Misafidy -</option>');
      }
    });
  }
});

//io ilay izy
// ok ok, tokony oe vita ty vao lancena ilay edit code
// de aona zani no atao , fa very mhtsmanko za io

// rems ary, misy zavatra azo atao ka :)
// ataovy model iray ity : "/code_controller/liste_fkt sy ilay check_data

// $('#editModal').on('shown.bs.modal', test);
//
// function test(){
//   var country_id = $('#kaominina2').val();
//   //console.log(country_id);
//
//   if (country_id != '')
//   {
//     $.ajax({
//       url: "/code_controller/liste_fkt",
//       method: "POST",
//       data: {
//         country_id: country_id
//       },
//       success: function (data) {
//             $('#fokontany2').html(data);
//             $('#vohitra2').html('<option value="">- Misafidy -</option>');
//             // console.log(data);
//       }
//     })
//   }
// };
//
// // edit mampiseo fokontany2
// $('#kaominina2').change(test);

// mampiseo liste vohitra
$('#kaominina').change(function () {
  $('#fokontany').change(function () {

    var v = $('#kaominina').val();
    var state_id = $('#fokontany').val();
    if (state_id != '' && v != '')
    {
      $.ajax({
        url: "/code_controller/liste_vhtr",
        method: "POST",
        data: {
          state_id: state_id,
          v: v
        },
        success: function (data) {
          $('#vohitra').html(data);
        }
      });
    }
  });
  var v2 = $('#kaominina').val();
      if (v2 == "1") {
      $('.Ambatolampy').attr('pk', '1').show();
      $('.Ambatomirahavavy').attr('pk', '1').hide();
      $('.Amboanana').attr('pk', '1').hide();
      $('.Ambohimandry').attr('pk', '1').hide();
      $('.Ambohimiadana').attr('pk', '1').hide();
      $('.Ambohitrambo').attr('pk', '1').hide();
      $('.Ambohitromby').attr('pk', '1').hide();
      $('.Ampahimanga').attr('pk', '1').hide();
      $('.Ampanotokana').attr('pk', '1').hide();
      $('.Andramasina').attr('pk', '1').hide();
      $('.Antanetibe_a').attr('pk', '1').hide();
      $('.Antanetibe_m').attr('pk', '1').hide();
      $('.Antsahafilo').attr('pk', '1').hide();
      $('.Arivonimamo_1').attr('pk', '1').hide();
      $('.Arivonimamo_2').attr('pk', '1').hide();
      $('.Avaratsena').attr('pk', '1').hide();
      $('.Betatao').attr('pk', '1').hide();
      $('.Fihaonana').attr('pk', '1').hide();
      $('.Imerintsiatosika').attr('pk', '1').hide();
      $('.Mahavelona').attr('pk', '1').hide();
      $('.Miantso').attr('pk', '1').hide();
      $('.Morarano').attr('pk', '1').hide();
    }
       else if(v2 == "2"){
        $('.Ambatomirahavavy').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "3"){
        $('.Amboanana').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "4"){
        $('.Ambohimandry').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "5"){
        $('.Ambohimiadana').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "6"){
        $('.Ambohitrambo').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "7"){
        $('.Ambohitromby').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "8"){
        $('.Ampahimanga').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "9"){
        $('.Ampanotokana').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "22"){
        $('.Andramasina').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "11"){
        $('.Antanetibe_a').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "10"){
        $('.Antanetibe_m').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "12"){
        $('.Antsahafilo').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "13"){
        $('.Arivonimamo_1').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "14"){
        $('.Arivonimamo_2').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "15"){
        $('.Avaratsena').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "16"){
        $('.Betatao').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "17"){
        $('.Fihaonana').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "18"){
        $('.Imerintsiatosika').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "19"){
        $('.Mahavelona').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "20"){
        $('.Miantso').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Morarano').attr('pk', '1').hide();
    }
      else if(v2 == "21"){
        $('.Morarano').attr('pk', '1').show();
        $('.Ambatolampy').attr('pk', '1').hide();
        $('.Ambatomirahavavy').attr('pk', '1').hide();
        $('.Amboanana').attr('pk', '1').hide();
        $('.Ambohimandry').attr('pk', '1').hide();
        $('.Ambohimiadana').attr('pk', '1').hide();
        $('.Ambohitrambo').attr('pk', '1').hide();
        $('.Ambohitromby').attr('pk', '1').hide();
        $('.Ampahimanga').attr('pk', '1').hide();
        $('.Ampanotokana').attr('pk', '1').hide();
        $('.Andramasina').attr('pk', '1').hide();
        $('.Antanetibe_a').attr('pk', '1').hide();
        $('.Antanetibe_m').attr('pk', '1').hide();
        $('.Antsahafilo').attr('pk', '1').hide();
        $('.Arivonimamo_1').attr('pk', '1').hide();
        $('.Arivonimamo_2').attr('pk', '1').hide();
        $('.Avaratsena').attr('pk', '1').hide();
        $('.Betatao').attr('pk', '1').hide();
        $('.Fihaonana').attr('pk', '1').hide();
        $('.Imerintsiatosika').attr('pk', '1').hide();
        $('.Mahavelona').attr('pk', '1').hide();
        $('.Miantso').attr('pk', '1').hide();
    }

      else {
      $('.Ambatolampy').attr('pk', '1').hide();
      $('.Ambatomirahavavy').attr('pk', '1').hide();
      $('.Amboanana').attr('pk', '1').hide();
      $('.Ambohimandry').attr('pk', '1').hide();
      $('.Ambohimiadana').attr('pk', '1').hide();
      $('.Ambohitrambo').attr('pk', '1').hide();
      $('.Ambohitromby').attr('pk', '1').hide();
      $('.Ampahimanga').attr('pk', '1').hide();
      $('.Ampanotokana').attr('pk', '1').hide();
      $('.Andramasina').attr('pk', '1').hide();
      $('.Antanetibe_a').attr('pk', '1').hide();
      $('.Antanetibe_m').attr('pk', '1').hide();
      $('.Antsahafilo').attr('pk', '1').hide();
      $('.Arivonimamo_1').attr('pk', '1').hide();
      $('.Arivonimamo_2').attr('pk', '1').hide();
      $('.Avaratsena').attr('pk', '1').hide();
      $('.Betatao').attr('pk', '1').hide();
      $('.Fihaonana').attr('pk', '1').hide();
      $('.Imerintsiatosika').attr('pk', '1').hide();
      $('.Mahavelona').attr('pk', '1').hide();
      $('.Miantso').attr('pk', '1').hide();
      $('.Morarano').attr('pk', '1').hide();
      }

});

// mampiseo liste vohitra2
$('#kaominina2').change(function () {
  $('#fokontany2').change(function () {

    var v = $('#kaominina2').val();
    var state_id = $('#fokontany2').val();
    if (state_id != '' && v != '')
    {
      $.ajax({
        url: "/code_controller/liste_vhtr",
        method: "POST",
        data: {
          state_id: state_id,
          v: v
        },
        success: function (data) {
          $('#vohitra2').html(data);
        }
      });
    }
  });
});

$('#laharana_tokan_trano').keyup(function(event){
     if(document.getElementById("laharana_tokan_trano").value!="") {
        document.getElementById("laharana").disabled = true;
     } else {
         document.getElementById("laharana").disabled = false;
     }
 });

 $('#laharana').keyup(function(event){
      if(document.getElementById("laharana").value!="") {
         document.getElementById("laharana_tokan_trano").disabled = true;
      } else {
          document.getElementById("laharana_tokan_trano").disabled = false;
      }
  });
  $('.cin').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    this.value = this.value.replace(/\D/g, "");
  }
});
   //Save code
      $('#btn_save').on('click',function(){
          var kaominina = $('#kaominina').val();
          var fokontany = $('#fokontany').val();
          var vohitra = $('#vohitra').val();
          var laharana_tokan_trano = $('#laharana_tokan_trano').val();
          var laharana = $('#laharana').val();
          var plof = $('#plof').val();
          var lot = $('#lot').val();
          $.ajax({
              type : "POST",
              url  : "/code_controller/save",
              dataType : "JSON",
              data : {
                kaominina:kaominina ,
                fokontany:fokontany,
                vohitra:vohitra,
                laharana_tokan_trano:laharana_tokan_trano,
                laharana:laharana,
                plof:plof,
                lot:lot
              },
              success: function(data){
                  if (data=="Efa misy io code parcel io") {
                      alert(data);
                  }
                  else {
                    $('[name="id_code"]').val("");
                    $('[name="kaominina"]').val("");
                    $('[name="fokontany"]').val("");
                    $('[name="vohitra"]').val("");
                    $('[name="laharana_tokan_trano"]').val("");
                    $('[name="laharana"]').val("");
                    $('[name="plof"]').val("");
                    $('[name="lot"]').val("");
                    $('#add2').modal('hide');
                    var oTable = $('#show_data').dataTable();
                    oTable.api().ajax.reload();
                  }
              }
          });
          return false;
      });

            //update record to database
             $('#btn_update').on('click',function(){
               var id_code = $('#id_code2').val();
               var kaominina = $('#kaominina2').val();
               var fokontany = $('#fokontany2').val();
               var vohitra = $('#vohitra2').val();
               var laharana_tokan_trano = $('#laharana_tokan_trano2').val();
               var laharana = $('#laharana2').val();
               var plof = $('#plof2').val();
               var lot = $('#lot2').val();
                $.ajax({
                    type : "POST",
                    url  : "/code_controller/update",
                    dataType : "JSON",
                    data : {
                      id_code:id_code ,
                      kaominina:kaominina ,
                      fokontany:fokontany,
                      vohitra:vohitra,
                      laharana_tokan_trano:laharana_tokan_trano,
                      laharana:laharana,
                      plof:plof,
                      lot:lot
                    },
                    success: function(data){
                          $('[name="id_code"]').val("");
                          $('[name="kaominina"]').val("");
                          $('[name="fokontany"]').val("");
                          $('[name="vohitra"]').val("");
                          $('[name="laharana_tokan_trano"]').val("");
                          $('[name="laharana"]').val("");
                          $('[name="plof"]').val("");
                          $('[name="lot"]').val("");
                          $('#editModal').modal('hide');
                           $('#show_data').DataTable().ajax.reload(null, false);
                    }
                });
                return false;
            });
       //delete record to database
                $('#btn_delete').on('click',function(){
                   var id_code = $('#id_code').val();
                   $.ajax({
                       type : "POST",
                       url  : "/code_controller/delete",
                       dataType : "JSON",
                       data : {id_code:id_code},
                       success: function(data){
                           $('[name="id_code"]').val("");
                           $('#deleteModal').modal('hide');
                          $('#show_data').DataTable().ajax.reload(null, false);
                       }
                   });
                   return false;
               });

      $('#save_tompony').on('click',function(){
             // Get form
       // var form = $('#tompony_modal')[0];
       // var data = new FormData(document.getElementById("my-awesome-dropzone"));
       // var data = new FormData(document.getElementById("tompony_modal"));
       // console.log(data);
       var nom = $('#nom').val();
       alert(nom);
      //  $('#tompony_modal').modal('hide');
      // $('#show_data').DataTable().ajax.reload(null, false);
       // $.ajax({
       //       type: "POST",
       //       enctype: 'multipart/form-data',
       //       url: "/code_controller/tompony_add",
       //       data: data,
       //       processData: false,
       //       contentType: false,
       //       cache: false,
       //       timeout: 600000,
       //       success: function (data) {
       //          alert("mety be");
       //           // $("#result").text(data);
       //           // console.log("SUCCESS : ", data);
       //           // $("#btnSubmit").prop("disabled", false);
       //
       //       }
       //   });
      });

});
