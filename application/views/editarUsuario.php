
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                 <h1 class="page-header">Atualizar Usuário</h1>  
            </div>
            <form action=" <?= base_url() ?>usuario/salvarAtualizacao" method="post">
                <inputt type="idUsuarios" id="idUsuarios">
                <div class="col-md-12">
   
  <div class="col-md-5">     
  <div class="form-group">
    <label for="nome">Nome:</label>
	<?php echo $nome ?>
    <input type="text" class="form-control" id="nome" name="nomeUsuarios" value="<?php echo $nome ?>">
  </div>
  </div> 
        
  <div class="row">     
  <div class="col-md-5">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="emailUsuarios" required>
  </div>
  </div>
  </div>
  <div class="col-md-3">
  <div class="form-group">
    <label for="telefone">Telefone:</label>
    <input type="text" class="form-control" id="telefone" name="telefoneUsuarios" required>
  </div>
  </div> 
       <div class="row">  
  <div class="col-md-3">
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="btn btn-default btn-block" placeholder="Atualizar Senha" data-toggle="modal" data-target="#myModal">
  </div>
  </div>
<div class="col-md-2">
  <div class="form-group">
    <label for="status">Status:</label>
    <select id="status" class="form-control" name="statusUsuarios" required>
        <option value="0">----</option>
        <option value="1">Ativo</option>
        <option value="2">Inativo</option>              
    </select>
  </div>
</div>
      
<div class="col-md-2">
  <div class="form-group">
    <label for="perfilUsuario">Perfil de Usuário:</label>
    <select id="status" class="form-control" name="perfilUsuarios" required>
        <option value="0">----</option>
        <option value="1">Professor</option>
        <option value="2">Administrador</option>
        <option value="3">Aluno</option>
    </select>
  </div>
</div>
          
 </div> 
<div style="text-align: right">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-default">Cancelar</button>
</div>
</form>
            </div>

          
          </div>    
      
                
            </form>
            
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
      </div>
      <div class="modal-body">
          <form action="<?= base_url() ?>usuario/salvarSenha" method="post">
              
              <div class="row">
              <div class="col-md-12 form-group">
              <label for="senhaAntiga">Senha Antiga:</label>
              <input type="password" name="senhaAntiga" id="senhaAntiga" class="form-control"> 
              </div>
              <div class="col-md-12 form-group">
              <label for="senhaNova">Senha Nova:</label>
              <input type="password" name="senhaNova" id="senhaNova" class="form-control"  onkeup="checarSenha()"> 
              </div>
              <div class="col-md-12 form-group">
              <label for="senhaConfirmar">Confirmar Senha:</label>
              <input type="password" name="senhaConfirmar" id="senhaConfirmar" class="form-control" onkeup="checarSenha()"> 
              </div>
                  <div class="col-md-12 form-group">
                      <div id="divcheck"></div>
              </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" id="enviarsenha">Salvar</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        
        $("#senhaNova").keyup(checkPasswordMatch);
        $("#confirmarSenha").keyup(checkPasswordMatch);
    });
    function checarSenha(){
        var password = $(#senhaNova).val();
        var confirmPassword = $("#senhaConfirmar").val();
        
        if(password != confirmPassword){
            $("#divcheck").html("<span style='color: red'>Senhas não conferem</span>");
            document.getElementById("enviarsenha").disabled = true;
        }else{
            $("#divcheck").html("<span style='color: green'>Senhas iguais</span>");
            document.getElementById("enviarsenha").disabled = false;
        }
    }
</script>
    
   
  
      
