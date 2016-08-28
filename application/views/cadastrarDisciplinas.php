
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 

    <div class="col-md-12">
      <h1 class="page-header">Cadastrar Disciplinas</h1>  
    </div>
   <form action=" <?= base_url() ?>usuario/cadastrarDisciplinas" method="post">
     <div class="col-md-12">
         
 
        
  <div class="row">     
  <div class="col-md-5">
  <div class="form-group">
    <label for="data">Data:</label>
     <input class="data" type="text" name="data" readyonly="readyonly"/>
  </div>
  </div>
  </div>
  <div class="col-md-5">     
  <div class="form-group">
    
    <label for="nomeDisciplina">Nome da Disciplina:</label>
    <input type="text" class="form-control" id="nome" name="nomeUsuarios" required>
  </div>
      </div>
   
  </div>
  
   
      </div>
      
      
  
  </div> 
                    
      
  <div style="text-align: right">
  
  <button type="reset" class="btn btn-default">Cancelar</button>
  <button type="submit" class="btn btn-primary">Enviar</button>
      
      <button type="reset" class="btn btn-warning">Apagar</button>
</div>
     
 </form>