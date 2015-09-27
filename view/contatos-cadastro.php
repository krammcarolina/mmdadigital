<?php
//	require_once 'controllers/_imovel-cadastro.php';
	require_once 'util/menu.php';
?>
<style>
.form-control {
	margin-bottom: 20px;
}

.input-group {
	 margin-bottom: 20px;
}

.header {
	background-color: #3f51b5;
	width: 100%;
	color: white;
	margin-top:-20px;
	box-shadow: 0 2px 5px rgba(0,0,0,0.26);
}

.jumbotron {
		
}
.form-control {
  border-radius: 0px;
}

.input-group-addon {
  border-radius: 0px;
}

.btn-teste {
	border-radius: 0px;
	background-color:#3f51b5!important;
	border: 0px;
	color: white;
	font-weight: bold;
}
h1 {
  padding: 15px;
}

</style>


<div class="header">
	<h1>Carolia Garcia</h1>
</div>

<!-- Menu -->
<div class="sidebar non-printable" id="sidebar">
	<ul class="nav nav-tabs">
		
	</ul>
</div>

<div class='container'>
	
<div class="page-header">
	<h1>Contatos do Imóvel</h1>
</div>

<form class="bs-example bs-example-form" class="cadastro-imovel" id="formCadastroContato" action="<?= $urlC."controllers/_contato-cadastro-json.php"?>" method="post" enctype="multipart/form-data">		 
	  
	  <input type="hidden" name="FRMcadastro" value="1" />
	  <input type="hidden" name="FRMimovel" value="1" />
	  	
			<div id="campos_imagens"></div>
			<h4>Selecione um contato</h4>		 
	    <div class="row">
        <div class="form-group col-lg-6">
	    <div id="auto1" name="auto1" class="col-md-6 autocompletar form-control" data-autocomplete="idcontato" data-url="<?= $urlC.'controllers/_autocomplete.php'; ?>">          
		    </div>
		 </div>
	

		  <button type="submit" id="btn-cadastro" class="btn btn-primary">Cadastrar</button>

	</form>  

	<div>
		

	<table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
	</div>  	

		      

</div>
