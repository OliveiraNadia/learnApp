
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                 <h1 class="page-header">Cadastro de Usuários</h1>  
            </div>
            <form action=" <?= base_url() ?>usuario/cadastrar" method="post">
                <div class="col-md-12">
   
  <div class="col-md-5">     
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nomeUsuarios" required>
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
                              
  <div class="col-md-5">
  <div class="form-group">
    <label for="telefone">Telefone:</label>
    <input type="text" class="form-control" id="telefone" name="telefoneUsuarios" required>
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
  <div class="col-md-10">
  <div class="form-group">
    <label for="sexo">Sexo:</label>
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Masculino
    <input type="radio" name="options" id="option2" autocomplete="off">Feminino
  </div>
  </div>
  </div>
  
  <div class="col-md-5">
  <div class="form-group">              
      <label for="data">Data:</label>
     <input class="data" type="text" name="data" readyonly="readyonly"/>
  </div>
  </div>       
    
  <div class="col-md-3">
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" name="senhaUsuarios">
  </div>
  </div>
  <div class="row">  
  <div class="col-md-3">
  <div class="form-group">
    <label for="confirmaSenha">Confirma Senha:</label>
    <input type="password" class="form-control" name="senhaUsuarios">
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
        
 </div>
  <div class="row"> 
    <div class="col-md-10">
<div style="text-align: left">
  <button type="submit" class="btn btn-primary">Enviar</button>
 
</div>

  <div style="text-align: right">
    <button type="reset" class="btn btn-default">Cancelar</button>   
  </div>
</form>
            </div>

          
          </div>    
      
                
            </form>
   
  
      
