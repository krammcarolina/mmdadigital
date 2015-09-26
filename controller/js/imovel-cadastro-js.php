<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?=$urlC?>assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=$urlC?>assets/js/jquery.bootstrap.wizard.js"></script>
<script src="<?=$urlC?>assets/js/prettify.js"></script>

<script>
	$(document).ready(function() {
	 
   $('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous'});
		 
   window.prettyPrint && prettyPrint()
   
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
   
   $('#new_contact').on("click", function(){ 
     var input =  " <div class='row'> " +
                  " <div class='form-group col-lg-4'> " +
                  " <input type='text' class='form-control' name='FRMresponsavel[]'   placeholder='Nome' required/>" +
                  " </div>"+
                  " <div class='form-group col-lg-5'> " +
                  " <input type='email' class='form-control' name='FRMemail[]' placeholder='E-mail' required/>" +
                  " </div>"+
                  " <div class='form-group col-lg-2'> " +
                  " <input type='text' class='form-control phone' name='FRMtelefone[]'  placeholder='Telefone' required/>" +
                  " </div>"+
                  " <div class='form-group col-lg-1'>"+
                  " <button type='button' class='btn btn-default col-lg-12' onclick='Excluir(this)'>-</button>"+
                  " </div>"+
                  "</div>";
     $("#campos_contatos").append(input);
   });
   
   
   
   
 
 });



 
 function Excluir(obj){
   var par = $(obj).parent().parent();
   par.remove();
 };




	</script>