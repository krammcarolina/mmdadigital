<?php
	//====================================
	//definição de nomes de cookie
	//====================================
	
	//clicdireito_data -> contem dados do usuário logado
	define("COOKIE_CLICDIREITO_DATA", "clicdireito_data");
	
	ob_start();
	session_start();
	$url = explode('/',$_SERVER['REQUEST_URI']);
	array_shift($url);
	/*configuração Lucas*/
	$urlC = 'http://'.$_SERVER['SERVER_NAME']."/".$url[0]."/";
	
  if(!empty($url[2]) && $url[1] != "login") {
    $par1   = $url[1];
    $pagina = $url[2];
    $urlC = 'http://'.$_SERVER['SERVER_NAME']."/".$url[0]."/".$url[1]."/";
   } 
  else {
    $pagina = $url[1];
    $urlC = 'http://'.$_SERVER['SERVER_NAME']."/".$url[0]."/";
  }
	
	//$pagina = $url[1];
   $urlLink = 'http://'.$_SERVER['SERVER_NAME']."/".$url[0]."/";
	$dir = $url[0]; 
	$parametro1 = isset($url[3]) ? $url[3] : null;  
	$parametro2 = isset($url[4]) ? $url[4] : null;  
	$parametro3 = isset($url[5]) ? $url[5] : null;  
	$parametro4 = isset($url[6]) ? $url[6] : null;  
	$parametro5 = isset($url[7]) ? $url[7] : null;  
 
 //Classes
 include "model/MysqliDb_class.php";
 include "model/Contatos_class.php";
 include "model/Imoveis_class.php";
 include "model/Estados_class.php";
 include "model/Imagens_class.php";
 
 //Funcoes uteis
 include "controller/_util.php";
 
 $db = new MysqliDb ('localhost', 'root', '', 'mmdadigital_teste');

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>teste</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link href="<?=$urlC?>assets/css/prettify.css" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</head>

  
  <body>
    <?php
    
    if($pagina == '') {	
      header ('Location:'.$urlC .'home'); 		
    } else {
        if(file_exists('view/'.$pagina.'.php')) {
        	include_once 'view/'.$pagina.'.php';
        }else {
    	   include_once 'view/404.php';
    	}
    }
   // require_once 'elements/js.php';
    
    ?>
  </body>
</html>

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>
  
  <script src="<?=$urlLink?>assets/js/jquery.maskedinput.min.js"></script>
<script>
jQuery(function($){
   $(".phone").mask("(999) 999-9999");
  
});
</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-change-style').on(ace.click_event, function() {
					var toggler = $('#menu-toggler');
					var fixed = toggler.hasClass('fixed');
					var display = toggler.hasClass('display');
					
					if(toggler.closest('.navbar').length == 1) {
						$('#menu-toggler').remove();
						toggler = $('#sidebar').before('<a id="menu-toggler" class="menu-toggler" href="#">\
							<span class="sr-only">Toggle sidebar</span>\
							<span class="toggler-text"></span>\
						 </a>').prev();
						 ace.vars['mobile_style'] = 2;
			
						 var icon = $(this).children().detach();
						 $(this).text('Hide old style toggle button').prepend(icon);
						 
						 $('#id-push-content').closest('div').hide();
						 $('#id-push-content').removeAttr('checked');
						 $('.sidebar').removeClass('push_away');
					 } else {
						$('#menu-toggler').remove();
						toggler = $('.navbar-brand').before('<button id="menu-toggler" class="three-bars pull-left menu-toggler navbar-toggle" type="button">\
							<span class="sr-only">Toggle sidebar</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>\
						</button>').prev();
						ace.vars['mobile_style'] = 1;
						
						var icon = $(this).children().detach();
						$(this).text('Show old style toggle button').prepend(icon);
						
						$('#id-push-content').closest('div').show();
					 }
			
					 if(fixed) toggler.addClass('fixed');
					 if(display) toggler.addClass('display');
					 
					 if('sidebar_scroll' in ace.helper) ace.helper.sidebar_scroll.reset();
			
					 return false;
				});
				
				$('#id-push-content').removeAttr('checked').on('click', function() {
					$('.sidebar').toggleClass('push_away');
				});
			});
   
   $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$(document).ready(function() {
  	$('#rootwizard').bootstrapWizard();
});

</script>