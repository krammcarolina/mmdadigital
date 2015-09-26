<?php
require_once 'controller/_teste2.php';
require_once 'util/menu.php'
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
 background-color: white;
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

<!------Menu-----!>
<div class="sidebar non-printable" id="sidebar">
  <ul class="nav nav-tabs">
    <?php listaMenu($aMenu, $urlC); ?>
  </ul>
</div>

<!------Form Cadastro Imóvel-----!>
<div class="jumbotron">
  <div class="container">
    <h3>Cadastro imóveis</h3>
    <form class="bs-example bs-example-form">
    
      <div class="row">
        <div class="col-lg-4">
        <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Tipo Imóvel</span>
         <select name="" class="form-control" placeholder="">
            <option value="">Selecione..</option>
            <option value="1">Aluguel</option>
            <option value="2">Venda</option>
         </select>
       </div>

        </div>
        <div class="col-lg-4">
        <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Responsável</span>
         <select name="" class="form-control" placeholder="">
            <?= listaOption($aResponsaveis, "nome"); ?>
         </select>
       </div>

        </div>
         <div class="col-lg-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Add Responsável</button> 
         
         </div>
      </div>
      
      <div class="row">       
        <div class="col-lg-8">
          <input type="text" class="form-control" placeholder="Rua" aria-describedby="basic-addon1"/>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4">
          <input type="text" class="form-control" placeholder="Número" aria-describedby="basic-addon1"/>
        </div>
        <div class="col-lg-2"> 
          <input type="text" class="form-control" placeholder="Complemento" aria-describedby="basic-addon1"/>
        </div>
        <div class="col-lg-2">
          <input type="text" class="form-control " placeholder="Bairro" aria-describedby="basic-addon1"/>
        </div>
      </div>
      
      <div class="row">
        
        <div class="col-lg-4">
          <input type="text" class="form-control " placeholder="Cidade" aria-describedby="basic-addon1"/>
        </div>
        <div class="col-lg-4"> 
           <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Estado</span>
         <select name="" class="form-control" placeholder="">
           <?= listaOption($aEstado, 'sigla'); ?>
         </select>
       </div>
        </div>
      </div>
      
      <h4>Imagens</h4>
      <div class="row">
      
      <div class="row">       
        <div class="col-lg-8">
          <input type="file" class="form-control" placeholder="Rua" aria-describedby="basic-addon1"/>
        </div>
      </div>
      </div>
      
      <div class="row"> 
        <div class="col-lg-4">
          <a href="#" class="btn btn-teste right" role="button">Cadastrar</a> 
        </div>
      
    </div>
  
      
    </form>
  </div>
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
<script>
 function newFone() {
     var input = " <div class='row'> " +
                 " <div class='form-group col-lg-8'> " + 
                 " <input type='text' class='form-control phone' name='frmTelefone[]' pattern='\d*'  placeholder='Telefone'/>" +
                 " </div>"+
                 " <div class='form-group col-lg-2'>"+
                 " <button type='button' class='btn btn-primary'  onclick='Excluir(this)'>-</button>"+
                 " </div>"+
                 "</div>";
    $("#campos_telefone").append(input);
 }
 
  function newEmail() {
     var input = " <div class='row'> " +
                 " <div class='form-group col-lg-8'> " + 
                 " <input type='email' class='form-control' name='frmEmail[]' required  placeholder='Email'/>" +
                 " </div>"+
                 " <div class='form-group col-lg-2'>"+
                 " <button type='button' class='btn btn-primary' onclick='Excluir(this)'>-</button>"+
                 " </div>"+
                 "</div>";
    $("#campos_email").append(input);
 }
 
 function Excluir(obj){
   var par = $(obj).parent().parent();
   par.remove();
 };


</script>