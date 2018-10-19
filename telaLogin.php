
  <div class="text-center telaLogin">
      <form class="form-signin container1" action="#" method="post">
        <img class="mb-4" src="img/logomarca.png" alt="" width="72" height="72">
        <input type="text" id="inputEmail" class="form-control espacoForm" name="login" placeholder="Login" required autofocus>
        <input type="password" id="inputPassword" class="form-control espacoForm" name="senha" placeholder="Senha" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me espacoForm"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
<?php

  if ($_POST != null){

      $login = $_POST['login'];

      include_once("conecta.inc.php");

      $sql = "SELECT * FROM usuario WHERE loginUsuario = '$login'";
  
      $query = mysqli_query($conexao, $sql);

      if ($query != null){

        while($tabela = mysqli_fetch_array($query)){

            if ($tabela['senhaUsuario'] == strtoupper($_POST['senha'])){
                session_start();
                $_SESSION['logou'] = 1;
                $_SESSION['login'] = $tabela['nomeUsuario'];
                header('location:index.php');
                break;
            }
         }
      }
      echo "<div class='alert alert-danger espacoForm'><strong>Erro!</strong> Login ou senha inválidos.</div>";
  }
?>

        <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
      </form>
  </div>


