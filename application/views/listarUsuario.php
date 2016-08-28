
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-10">
                 <h1 class="page-header">Usuários</h1>  
            </div>
            
            <div class="col-md-2">
                <a class="btn btn-primary btn-block" href="<?= base_url()?>usuario/cadastro">Novo usuário</a>
            </div>
            
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                    <th>Código do Usuário</th>
                    <th>Nome do Usuário</th>
                    <th>Email do Usuário</th>
                    <th>Status do Usuário</th>
                    <th>Perfil do Usuário</th>
                    </tr>
                    <?php foreach($usuarios as $usu){ ?>
                    <tr>
                        <td><?= $usu->idUsuarios; ?></td>
                        <td><?= $usu->nomeUsuarios; ?></td>
                        <td><?= $usu->emailUsuarios; ?></td>
                    <td><?= $usu->statusUsuarios ==1?'Ativo':'Inativo' ?></td>
                        <td><?= $usu->perfilUsuarios ==1?'Aluno':'Professor'  ?></td>
                        <td><a href="<?= base_url('usuario/atualizar/'. $usu->idUsuarios)?>" class="btn btn-primary btn-group">Atualizar</a></td>
                        <td><a href="<?php echo base_url('usuario/excluir/'.$usu->idUsuarios) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja mesmo excluir o usuário?');">Excluir</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

          
          </div>    
      
      
