<?php
//Funcoes uteis 

  function mostraAviso($aviso){
    echo "<div class='alert alert-".$aviso['tipo']."' role='alert'>". $aviso['texto'] ."</div>";
  }

  $oEstados = new Estados();
  $aEstado = $oEstados->getList();
  
  $iTotal = count($aEstado);

  function listaOption($aOption, $campo) {
     $iTotal = count($aOption);
     $sOptions = " <option value=''>Selecione..</option>";
     for ($i = 0; $i < $iTotal; $i++) {
       $sOptions .= "<option value='".$aOption[$i]['id']."'>".$aOption[$i][$campo]."</option>";
     }
     return($sOptions);
  }
  
  function uploadArquivo($ateste) {
   echo "<pre>";
   print_r($ateste);
   echo "<pre>";
   die;
   $destino = 'imagens/' . $_FILES['FRMimagem']['name'][$i];
   $arquivo_tmp = $_FILES['FRMimagem']['tmp_name'][$i];
   move_uploaded_file( $arquivo_tmp, $destino  );
   
   //Upload de arquivos
   // verifica se foi enviado um arquivo
   if(isset($_FILES['FRMimagem']['name'][$i]) && $_FILES["FRMimagem"]["error"][$i] == 0) {

     $arquivo_tmp = $_FILES['FRMimagem']['tmp_name'][$i];
     $nome = $_FILES['FRMimagem']['name'][$i];
    
     // Pega a extensao
     $extensao = strrchr($nome, '.');

     // Converte a extensao para mimusculo
     $extensao = strtolower($extensao);

     // Somente imagens, .jpg;.jpeg;.gif;.png
     // Aqui eu enfilero as extes�es permitidas e separo por ';'
     // Isso server apenas para eu poder pesquisar dentro desta String
     if(strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
       // Cria um nome �nico para esta imagem
       // Evita que duplique as imagens no servidor.
       $novoNome = md5(microtime()) . $extensao;
        
       // Concatena a pasta com o nome
       $destino = 'imagens/' . $novoNome;
        
       // tenta mover o arquivo para o destino
       if( @move_uploaded_file( $arquivo_tmp, $destino  )) {
         $aAviso['texto']  = "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
         $aAviso['texto'] .= "<img src='". $destino ."' />";
         $aAviso['tipo']  = "success";       }
       else {
         $aAviso['texto'] = "Erro ao salvar o arquivo. Aparentemente voc� n�o tem permiss�o de escrita.<br />";
         $aAviso['tipo']  = "danger";
       }
     } 
     else {
       $aAviso['texto'] = "Voc� n�o enviou nenhum arquivo!";
       $aAviso['tipo']  = "danger";
     }
   }
 }
?>