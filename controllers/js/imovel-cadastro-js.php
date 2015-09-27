// <script>

//   $(document).ready(function() {
   
//    //  $('#new_image').on("click", function(){ 
//    //    var input = " <div class='row'> " +
//    //               " <div class='form-group col-lg-11'> " + 
//    //               " <input type='file' class='form-control' name='FRMimagem[]' pattern='\d*' required  placeholder='Imagem'/>" +
//    //               " </div>"+
//    //               " <div class='form-group col-lg-1'>"+
//    //               " <button type='button' class='btn btn-default col-lg-12' onclick='Excluir(this)'>-</button>"+
//    //               " </div>"+
//    //               "</div>";
//    //    $("#campos_imagens").append(input);
//    // });
   
//    //  $('#new_contact').on("click", function(){ 
//    //    var input =  " <div class='row'> " +
//    //                " <div class='form-group col-lg-4'> " +
//    //                " <input type='text' class='form-control' name='FRMresponsavel[]'   placeholder='Nome' required/>" +
//    //                " </div>"+
//    //                " <div class='form-group col-lg-5'> " +
//    //                " <input type='email' class='form-control' name='FRMemail[]' placeholder='E-mail' required/>" +
//    //                " </div>"+
//    //                " <div class='form-group col-lg-2'> " +
//    //                " <input type='text' class='form-control phone' name='FRMtelefone[]'  placeholder='Telefone' required/>" +
//    //                " </div>"+
//    //                " <div class='form-group col-lg-1'>"+
//    //                " <button type='button' class='btn btn-default col-lg-12' onclick='Excluir(this)'>-</button>"+
//    //                " </div>"+
//    //                "</div>";
//    //    $("#campos_contatos").append(input);
//    //  });

//    $('.autocompletar').each(function(e){
//          var urlCorrente = $(this).data('url');
//          var funcaoCorrente = $(this).data('autocomplete');
//          var funcaoModulo = $(this).data('modulo');
         
//          $(this).select2({
//             allowClear : true,
//             placeholder: "Selecione",
//             minimumInputLength: 3,
//             ajax:{
//                url: urlCorrente,
//                dataType: 'json',
//                data: function (term, page) {
//                   return { term: term, funcao: funcaoCorrente, modulo: funcaoModulo};
//                },
//                results: function (data, page) 
//                {
//                   return {results: data.results};
//                }
//             }
//             ,initSelection : function (element, callback) {
//                   var id = $(element).data('inicial-id');
//                   var texto = $(element).data('inicial-texto');
//                   callback({id:id, text:texto});
//             }
//           });
//       });

//       $('.autocompletar').on('change', function(){

//          $(this).parent().find('label:eq(0)').find('a').remove();

//          if ($(this).hasClass('visualizacao-previa') && $(this).select2('val') != '')
//          {

//             var datamodulo = ' data-idmodulo="' + $(this).data('modulo') + '" ' ; 
//             var dataurl = ' data-url="' + $('#hostFixoHidden').val() + 'controllers/visualizacao_previa_p.php' + '" ';
//             var dataid = ' data-idedicao="' + $(this).select2('val') + '" ';
//             var dataautocomplete = ' data-autocomplete="' + $(this).data('autocomplete') + '" ';

//             var anchor = '<a href="javascript:;" ' + dataurl + dataid + datamodulo + dataautocomplete + 
//                          ' class="btn btn-primary btn-xs visualicao-previa-btn" style="float:right"><i class="glyphicon glyphicon-info-sign"></i></a>';

//             $(this).parent().find('label:eq(0)').append(anchor);

//          }

//          autoCompleteHidden($(this).attr('name'), $(this).select2('val'), $(this));
//       });

//       //seta os valores para edição
//       $('.autocompletar').select2('val', []);
//       $('.autocompletar').trigger('change');

//       //
//       // Cria um hidden field para cada autocomplete ajax
//       //
//       function autoCompleteHidden(name, value, current)
//       {
//          var $input = $('input[name="' + name + '"]');

//          if ($input.length == 0)
//          {
//             var input = "<input type='hidden' name='" + name + "' id='" + name + "' /> ";
//             $(input).insertAfter(current);
//             $input = $('input[name="' + name + '"]');
//          }

//          $input.val(value);
//       } 

//   });
      
//   function Excluir(obj){
//     var par = $(obj).parent().parent();
//     par.remove();
//   };

// </script>