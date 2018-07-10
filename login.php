<?php
  include "cabecalho.php";
?>

  <div class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <p>Entre com seus dados conforme solicitado abaixo</p>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
  </div>

  
<?php
  include "rodape.php";
?>