<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
    <h1>Minha conta</h1>
    <div class="row gx-3 mb-3">
      <div class="col-4">
        <div class="list-group">
          <a href="cliente_dados.php" class="list-group-item lis-group-item-action"><i class="bi-person fs-6"></i> Dados Pessoais</a>

          <a href="cliente_contatos.php" class="list-group-item lis-group-item-action "><i class="bi-mailbox fs-6"></i> Contatos</a>

          <a href="cliente_endereco.php" class="list-group-item lis-group-item-action "><i class="bi-house-door fs-6"></i> Endereço</a>

          <a href="cliente_pedidos.php" class="list-group-item lis-group-item-action"><i class="bi-truck fs-6"></i> Pedidos</a>

          <a href="cliente_favoritos.php" class="list-group-item lis-group-item-action bg-danger text-light"><i class="bi-heart fs-6"></i> Favoritos</a>

          <a href="cliente_senha.php" class="list-group-item lis-group-item-action  "><i class="bi-lock fs-6"></i> Alterar senha</a>

          <a href="index.php" class="list-group-item lis-group-item-action  "><i class="bi-door-open fs-6"></i> Sair</a>
        </div>
      </div>
      <div class="col-8">
        <div class="row g-3 mb-3">
          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/camisa-2324.jpg" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$450,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Camisa SCCP</h5>
                <p class="card-text truncar-3l">Preta e dourada de manga, modelo 23/24.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/camisa-branca.jpeg" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$150,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Camisa branca</h5>
                <p class="card-text truncar-3l">Camisa simples branca de manga, modelo 21/22.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/camisa-prejogo.webp" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$350,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Camisa PJ</h5>
                <p class="card-text truncar-3l">Pré-Jogo, Branca e Preto, modelo 22/23.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/jaqueta.webp" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$400,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Jaqueta</h5>
                <p class="card-text truncar-3l">Corta-vento preto e cinza, modelo 21/22.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/jaqueta-roxo.webp" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$350,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Jaqueta</h5>
                <p class="card-text truncar-3l">Corta-vento roxo e Preto, estilo V preto, modelo 22/23.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/Jaqueta-roxa.webp" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$300,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Jaqueta</h5>
                <p class="card-text truncar-3l">Corta-vento roxo e Preto, lista preta no meio, modelo 22/23.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/camisa-saojorge.jpg" class="card-img-top">

              <div class="card-header  bg-dark text-light">
                R$150,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Camisa SJ</h5>
                <p class="card-text truncar-3l">Camisa Sao Jorge simples de manga, Branca, modelo 22/23.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2"><i class="bi-x" title="Remover dos favoritos" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
              <img src="./img/produtos/kit-bone-camisa.webp" class="card-img-top">

              <div class="card-header bg-dark text-light ">
                R$500,00
              </div>

              <div class="card-body">
                <h5 class="card-title">Kit Camisa e boné</h5>
                <p class="card-text truncar-3l">Kit camisa e boné, branco e Preto.</p>

              </div>
              <div class="card-footer">
                <a href="carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
                <small class="text-success">25 unidades em estoque</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>



<?php
include "./includes/footer.php"
?>