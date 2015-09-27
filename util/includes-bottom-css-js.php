
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo $urlLink;?>assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>	

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo $urlLink;?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo $urlLink;?>assets/js/bootstrap.min.js"></script>


   <script>

  $(document).ready(function() {
   
    $('#new_image').on("click", function(){ 
      var input = " <div class='row'> " +
                 " <div class='form-group col-lg-11'> " + 
                 " <input type='file' class='form-control' name='FRMimagem[]' pattern='\d*' required  placeholder='Imagem'/>" +
                 " </div>"+
                 " <div class='form-group col-lg-1'>"+
                 " <button type='button' class='btn btn-default col-lg-12' onclick='Excluir(this)'>-</button>"+
                 " </div>"+
                 "</div>";
      $("#campos_imagens").append(input);
   });


$('.autocompletar').each(function(e){
         var urlCorrente = $(this).data('url');
         var funcaoCorrente = $(this).data('autocomplete');
         var funcaoModulo = $(this).data('modulo');
         
         $(this).select2({
            allowClear : true,
            placeholder: "Selecione",
            minimumInputLength: 3,
            ajax:{
               url: urlCorrente,
               dataType: 'json',
               data: function (term, page) {
                  return { term: term, funcao: funcaoCorrente, modulo: funcaoModulo};
               },
               results: function (data, page) 
               {
                  return {results: data.results};
               }
            }
            ,initSelection : function (element, callback) {
                  var id = $(element).data('inicial-id');
                  var texto = $(element).data('inicial-texto');
                  callback({id:id, text:texto});
            }
          });
      });

      $('.autocompletar').on('change', function(){

         $(this).parent().find('label:eq(0)').find('a').remove();

         if ($(this).hasClass('visualizacao-previa') && $(this).select2('val') != '')
         {

            var datamodulo = ' data-idmodulo="' + $(this).data('modulo') + '" ' ; 
            var dataurl = ' data-url="' + $('#hostFixoHidden').val() + 'controllers/visualizacao_previa_p.php' + '" ';
            var dataid = ' data-idedicao="' + $(this).select2('val') + '" ';
            var dataautocomplete = ' data-autocomplete="' + $(this).data('autocomplete') + '" ';

            var anchor = '<a href="javascript:;" ' + dataurl + dataid + datamodulo + dataautocomplete + 
                         ' class="btn btn-primary btn-xs visualicao-previa-btn" style="float:right"><i class="glyphicon glyphicon-info-sign"></i></a>';

            $(this).parent().find('label:eq(0)').append(anchor);

         }

         autoCompleteHidden($(this).attr('name'), $(this).select2('val'), $(this));
      });

      //seta os valores para edição
      $('.autocompletar').select2('val', []);
      $('.autocompletar').trigger('change');

      //
      // Cria um hidden field para cada autocomplete ajax
      //
      function autoCompleteHidden(name, value, current)
      {
         var $input = $('input[name="' + name + '"]');

         if ($input.length == 0)
         {
            var input = "<input type='hidden' name='" + name + "' id='" + name + "' /> ";
            $(input).insertAfter(current);
            $input = $('input[name="' + name + '"]');
         }

         $input.val(value);
      }



		$('#formCadastro').on('submit', function (e) {

			var formData = new FormData($(this)[0]);
      		$.ajax({
		        url: $(this).prop("action"),
		        type: 'POST',
		        data: formData,
		        async: false,
		        cache: false,
		        contentType: false,
		        processData: false,
		        success: function (dados) {
              var url = '<?=$urlC?>'+ "contatos-cadastro/" + dados;
              return false;
              window.location.href = url;
		        }
            
		     	});
			return false;
		});

		$('#formCadastroContato').on('submit', function (e) {

			var formData = new FormData($(this)[0]);
      		$.ajax({
		        url: $(this).prop("action"),
		        type: 'POST',
		        data: formData,
		        async: false,
		        cache: false,
		        contentType: false,
		        processData: false,
		        success: function (dados) {
             var obj = jQuery.parseJSON(dados);
             for (var i = obj.length - 1; i >= 0; i--) {
              
             };
             


//              var i = 0;
// for (; i < 9; i++) {
//     console.log(i);
//     // more statements
// }
  
		        }
            
		     	});
			return false;
		});

   
   
}); 




  
      
  function Excluir(obj){
    var par = $(obj).parent().parent();
    par.remove();
  };

</script>
   
   


		<!-- page specific plugin scripts -->
    
		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo $urlLink;?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo $urlLink;?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo $urlLink;?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo $urlLink;?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo $urlLink;?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo $urlLink;?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo $urlLink;?>assets/js/flot/jquery.flot.resize.min.js"></script>
		
		<script src="<?php echo  $urlLink;?>assets/select2/select2.min.js"></script>
    <script src="<?php echo  $urlLink;?>assets/select2/select2_locale_pt-BR.js"></script>

