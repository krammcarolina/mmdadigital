<?php

  //Classes
  require_once "../util/includes-json-class.php";
  if(!empty($_POST['FRMcadastro'])) {
    //Cadastro de Contatos
    $oContatos = new ContatosImoveis();
    $oContatos->_item['imovel']  = $_POST['FRMimovel'];
    $oContatos->_item['contato'] = $_POST['auto1'];

    $oContatos->createNewObject();
    $aContatos = consultaContato($_POST['FRMimovel']);
    $aContatos['total'] = count($aContatos);
    echo json_encode($aContatos);   
  }


  function consultaContato($idImovel) {
    $oContatosImov = new ContatosImoveis();
    $sFiltro   = "imovel = " . $idImovel;
    $aContatos = $oContatosImov->getList($sFiltro);
    return  $aContatos;
  }

?>