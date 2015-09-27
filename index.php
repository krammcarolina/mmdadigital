<?php

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
	
	$pagina = $url[1];
  $urlLink = 'http://'.$_SERVER['SERVER_NAME']."/".$url[0]."/";
	$dir = $url[0]; 

	$parametro1 = isset($url[3]) ? $url[3] : null;  
	$parametro2 = isset($url[4]) ? $url[4] : null;  
	$parametro3 = isset($url[5]) ? $url[5] : null;  
	$parametro4 = isset($url[6]) ? $url[6] : null;  
	$parametro5 = isset($url[7]) ? $url[7] : null;  
 
	//Classes
	require_once "util/includes-class.php";

	//Funcoes uteis
	require_once "controllers/_util.php";
 
	$db = new MysqliDb ('localhost', 'root', '', 'mmdadigital_teste');

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>MMDA DIGITAL</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    
    <?php
    //CSS AND JS
	   require_once "util/includes-top-css-js.php";
	  ?>
	</head>

  <body>
    <?php
    if($pagina == '') {	
      header ('Location:'.$urlC .'home'); 		
    } else {
        if(file_exists('view/'.$pagina.'.php')) {
        	include_once 'view/'.$pagina.'.php';
        } else {
    	    include_once 'view/404.php';
    	}
    }
     require_once "util/includes-bottom-css-js.php";
    
    ?>
  </body>
</html>
