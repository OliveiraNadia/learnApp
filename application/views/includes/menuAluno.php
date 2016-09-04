 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LearnApp!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Dashboard</a></li>-->
            
            <!-- Vai trazer o nome do usuário no banco--><li><a href="#">Olá! Aluno</a></li>
         
          </ul>
          
        </div>
      </div>
    </nav>

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li class="active"><a href="<?= base_url() ?>areaAluno">Área do Aluno<span class="sr-only">(current)</span></a></li>
              <li><a href="<?= base_url() ?>usuario/minhasAulas">Minhas Aulas</a></li>
              <li><a href="<?= base_url() ?>usuario/exercícios">Meus Exercícios</a></li>
            <li><a href="<?= base_url() ?>areaAluno/desempenho">Meu Desempenho</a></li>
            <li><a href="<?= base_url() ?>inicial/logout">Sair</a></li>
         
          </ul>
          
        </div>