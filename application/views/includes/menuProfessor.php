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
            <li><a href="#">Configurações</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="<?= base_url()?>inicial/logout">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li class="active"><a href="<?= base_url() ?>inicial/index">Área do Professor<span class="sr-only">(current)</span></a></li>
              <li><a href="<?= base_url() ?>usuario/criarAula">Criar Aulas</a></li>
              <li><a href="<?= base_url() ?>usuario/minhasAulas">Minhas Aulas</a></li>
            <!--<li><a href="<?= base_url() ?>usuario">Contas</a></li>-->
            <li><a href="<?= base_url() ?>inicial/logout">Sair</a></li>
         
          </ul>
          
        </div>