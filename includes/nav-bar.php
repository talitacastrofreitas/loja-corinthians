<?php
include ('header.php');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3">

  <div class="container">
    <a class="navbar-brand" href="./index.php"><b>Sport Clube Corinthians Paulista</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav flex-grow-1">
        <li class="nav-item">
          <a class="nav-link active text-white" href="./index.php">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./contatos.php">Contato</a>
        </li>
      </ul>

    <div class="align-self-end">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="./cadastro.php" class="nav-link text-white"> Quero me cadastrar</a>
            </li>
            <li class="nav-item">
                <a href="./login.php" class="nav-link text-white"> Entrar</a>
            </li>
            <li class="nav-item">
                <span class="badge rounded-pill bg-light text-dark position-absolute ms-4 mt-0" title="5 produto(s) no carrinho"><small>5</small></span>
                <a href="./carrinho.php" class="nav-link text-white"><i class="bi-cart"style="font-size:24px; line-height: 24px;"></i></a>
            </li>

        </ul>

    </div>

    </div>
  </div>
</nav>

