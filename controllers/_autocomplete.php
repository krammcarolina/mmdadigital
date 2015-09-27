<?php

//Classes
  require_once "../util/includes-json-class.php";


  function consultaContatos($aTerm='') {
    
    $oContatos = new  Contatos($aTerm);
    $sFiltro   = " responsavel = '" . $aTerm['term'] . "'";
    $aContato  = $oContatos->getList();
    $aReturn['results'] = $aContato;

    echo json_encode($aReturn);

  }

  if(!empty($_GET["funcao"])) {
    
    if ($_GET["funcao"] == "idcontato") {
      consultaContatos($_GET);
    }
  }

?>