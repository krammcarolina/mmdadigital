<?php
  require_once 'controller/_imoveis.php';
  require_once 'util/menu.php'
?>
<style>


</style>


<!------Menu-----!>
<div class="sidebar non-printable" id="sidebar">
  <ul class="nav nav-tabs">
    <?php listaMenu($aMenu, $urlC); ?>
  </ul>
</div>

<div class='container'>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Responsavel</th>
        <th>Endereço</th>
        <th>Cidade</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

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
require_once 'controller/js/imovel-cadastro-js.php'
?>