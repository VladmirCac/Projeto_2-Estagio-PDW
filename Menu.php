
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fonteResponsiva ">
  <img class="logo" src="img/logomarca.png" alt="Logo"> 
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Cadastro
      </a>
      <div class="dropdown-menu fonteResponsiva">
        <a class="dropdown-item" href="?pg=CadastroAutor">Autor</a>
        <a class="dropdown-item" href="?pg=CadastroEditora">Editora</a>
        <a class="dropdown-item" href="?pg=CadastroAssunto">Assunto</a>
        <a class="dropdown-item" href="?pg=CadastroLivro">Livro</a>
        <a class="dropdown-item" href="?pg=BuscarLivro">Buscar Livros</a>
      </div>
    </li>
    </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Relatorios
      </a>
      <div class="dropdown-menu fonteResponsiva">
        <a class="dropdown-item" href="?pg=RelatorioEstoque">Relatorio de Estoque</a>
        <a class="dropdown-item" href="?pg=RelatorioMov">Relatorio de Movimentações</a>
      </div>
    </li>
  </ul>
  <span type="text" class="navbar-text text-info marginRight">Bem vindo, <?=$_SESSION['login']?></span>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a href="?pg=SystemExit"><button type="button" class="btn btn-outline-danger btn-sm ml-auto fonteResponsiva">Sair</button></a>
  	</li>
  </ul>
</nav>
