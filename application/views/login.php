

    <div class="container">

        <form class="form-signin" method="post" action="<?= base_url()?>inicial">
        <h2 class="form-signin-heading">Entre com o Login</h2>
        <label for="email" class="sr-only">Email </label>
        <input type="email" id="inputEmail" class="form-control" name="emailUsuarios" placeholder="Email">
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" name="senhaUsuarios"placeholder="Senha">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

