<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
  <h1>Minha conta</h1>
        <div class="row gx-3">
          <div class="col-4">
              <div class="list-group">
                <a href="cliente_dados.php" class="list-group-item lis-group-item-action"><i class="bi-person fs-6"></i> Dados Pessoais</a>

                <a href="cliente_contatos.php" class="list-group-item lis-group-item-action bg-danger text-light"><i class="bi-mailbox fs-6"></i> Contatos</a>

                <a href="cliente_endereco.php" class="list-group-item lis-group-item-action "><i class="bi-house-door fs-6"></i> Endereço</a>

                <a href="cliente_pedidos.php" class="list-group-item lis-group-item-action"><i class="bi-truck fs-6"></i> Pedidos</a>

                <a href="cliente_favoritos.php" class="list-group-item lis-group-item-action  "><i class="bi-heart fs-6"></i> Favoritos</a>

                <a href="cliente_senha.php" class="list-group-item lis-group-item-action  "><i class="bi-lock fs-6"></i> Alterar senha</a>

                <a href="index.php" class="list-group-item lis-group-item-action  "><i class="bi-door-open fs-6"></i> Sair</a>
              </div>
          </div>
          <div class="col-8">

              <form action="">
                <div class="form-floating mb-3">
                  <input class="form-control focus-red" type="email" id="txtEmail" placeholder="" autofocus/>
                  <label for="txtEmail">E-mail</label>
                </div>

                <div class="form-floating mb-3 col-md-6">
                  <input class="form-control focus-red" type="text" id="txtTelefone" placeholder=""/>
                  <label for="txtTelefone">Telefone</label>
                </div>
              </form>
          </div>
        </div>       
  </div>

</main>



<?php
include "./includes/footer.php"
?>
