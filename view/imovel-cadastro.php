<?php
	require_once 'controllers/_imovel-cadastro.php';
	require_once 'util/menu.php';
?>
<style>
echo "<pre>";
print_r();
echo "<pre>";
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
		<?php listaMenu($aMenu, $urlC); ?>
	</ul>
</div>

		<div class='container'>
				
		 <div class="page-header">
				<h1>CADASTRO DE IMÓVEIS</h1>
		 </div>

		 
		 
		 <form class="bs-example bs-example-form" class="cadastro-imovel" id="formCadastro" action="<?= $urlC."imovel-cadastro"?>" method="post" enctype="multipart/form-data">
		
						 
			<input type="hidden" name="FRMcadastro" value="1" />
			
     
			<div class="row">       
				<div class="col-lg-6">
					<div class="input-group">
						 <span class="input-group-addon" id="basic-addon1">Tipo Anuncio</span>
						 <select name="FRMtipoanuncio" class="form-control" placeholder="" required="">
								<option value="">Selecione..</option>
								<option value="1">Aluguel</option>
								<option value="2">Venda</option>
						 </select>
					 </div>
				</div>
				
				<div class="col-lg-6">
					<div class="input-group">
						 <span class="input-group-addon" id="basic-addon1">Tipo Imóvel</span>
						 <select name="FRMtipoimovel" class="form-control" placeholder="" required="">
								<option value="">Selecione..</option>
								<option value="1">Aluguel</option>
								<option value="2">Venda</option>
						 </select>
					 </div>
				</div>
			</div>
			
			<div class="row">       
				<div class="col-lg-6">
					<input type="text" name="FRMrua" class="form-control" placeholder="Rua" aria-describedby="basic-addon1" required=""/>
				</div>
				<div class="col-lg-3">
					<input type="text" class="form-control" placeholder="Número" name="FRMnumero" aria-describedby="basic-addon1" required=""/>
				</div>
		
				
				<div class="col-lg-3"> 
					<input type="text" class="form-control" placeholder="Complemento" name="FRMcomplemento" aria-describedby="basic-addon1" required=""/>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-lg-3">
					<input type="text" class="form-control " placeholder="Bairro" name="FRMbairro" aria-describedby="basic-addon1" required=""/>
				</div>
				<div class="col-lg-3">
					<input type="text" class="form-control " placeholder="Cidade" name="FRMcidade" aria-describedby="basic-addon1" required=""/>
				</div>
				
				<div class="col-lg-3"> 
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Estado</span>
							<select name="FRMestado" class="form-control" placeholder="" required="">
								<?= listaOption($aEstado, 'sigla'); ?>
							</select>
					</div>
				</div>
				
			</div>
			
			<div class="row">       
				<div class="col-lg-12">
					<textarea name="FRMdescricao" class="form-control " placeholder="Descrição"></textarea>
				</div>
			</div>
		
	
							 

			
			<div style="float:right">
						<input type='submit' class='btn btn-default btn-success' id="btn-cadastro" value='Cadastrar' />
					</div>        
		
		</div>
					
	
	</div>
	</form>
	</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Cadastrato</h4>
			</div>
			
			<div class="modal-body">
				<form action="<?=$urlC."teste2"?>" method="POST" id="validaForm" data-toggle="validator" role="form" >
					<input type="hidden" name="frm" value="1" />
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nome" name="frmNome" required data-fv-notempty-message="Campo obrigatório"/>
					</div>
					<div class="row">
						<div class="form-group col-lg-8">
							<input type="text" class="form-control phone"  name="frmTelefone[]" placeholder="Telefone" required />              
							</div>
							
						<div class="form-group col-lg-2">
							<button type="button" class="btn btn-teste" onclick="newFone()">+</button>
						</div>
					 </div>
					 <div id="campos_telefone"></div>
						<div class="row">
						<div class="form-group col-lg-8">
							<input type="email" class="form-control" name="frmEmail[]" placeholder="E-mail" required  data-fv-notempty-message="Campo obrigatório"/>
						</div>
						<div class="form-group col-lg-2">
							<button type="button" class="btn btn-primary" onclick="newEmail()">+</button>
						</div>
					 </div> 
					 <div id="campos_email"></div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
			
			</form>
			
		</div>
	</div>
</div>
<?php
require_once 'controllers/js/imovel-cadastro-js.php'
?>