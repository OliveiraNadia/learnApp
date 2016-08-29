
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
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="emailUsuarios" required>
  </div>
  </div>
  </div>    
                              
  <div class="col-md-4">
  <div class="form-group">
    <label for="telefone">Telefone:</label>
    <input type="text" class="form-control" id="telefone" name="telefoneUsuarios" required>
  </div>
  </div> 
  <div class="col-md-4">
  <div class="form-group">
    <label for="ra">RA:</label>
    <input type="text" class="form-control" id="telefone" name="raUsuarios" required>
  </div>
  </div>  
   <div class="row">                    
<div class="col-md-4">
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
 
 
    
  <div class="col-md-2">
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" name="senhaUsuarios">
  </div>
  </div>
  <div class="row">  
  <div class="col-md-2">
  <div class="form-group">
    <label for="confirmaSenha">Confirma Senha:</label>
    <input type="password" class="form-control" name="confirmarSenha">
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
       <div class="col-md-3">
  <div class="form-group">
    <label for="sexo">Sexo:</label>
    <input type="radio" name="options" value="sexoUsuarios" id="masculino" autocomplete="off" checked> Masculino
    <input type="radio" name="options" id="feminino" value="sexoUsuarios" autocomplete="off">Feminino
  </div>
  </div>
  </div>
       <div class="col-md-5">
  <div class="form-group">              
      <label for="data">Data de Nascimento:</label>
     <input type="date" name="dataNascUsuarios" readyonly="readyonly"/>
  </div>
  </div>      
        
 </div>
  <div class="row"> 

<div style="text-align: left">
  <button type="submit" class="btn btn-primary">Enviar</button>
 
</div>
  </div>
                    
  <div style="text-align: right">
    <button type="reset" class="btn btn-warning">Apagar</button>   
  </div>
</form>
            </div>

          
          </div>    
      
                
            </form>
   
  
      
