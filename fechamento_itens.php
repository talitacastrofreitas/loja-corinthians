<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
    <h2>Confira os itens</h2>
    <h5>Confira os itens e clique em <b>continuar</b> para prosseguir para a <b>seleção do endereço de entrega</b>.</h5><br>

    <ul class="list-group mb-3">
      <li class="list-group-item py-3">
        <div class="row g-3">
          <div class="col-4 col-md-3 col-lg-2">
            <a href="#">
              <img src="./img/produtos/camisa-kit.webp" class="img-thumbnail">
            </a>
          </div>
          <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
            <h4>
              <b><a href="#" class="text-decoration-none text-danger">Kit Duas Camisas</a></b>
            </h4>
            <h6 style="font-weight:400">Kit duas camisas masculinas, 1ª camisa: preta listrada e a 2ª camisa: Branca.<br>
              <b>
                2 unidade(s)<br>
                R$1.200,00
              </b>
            </h6>
          </div>
        </div>
      </li>

      <li class="list-group-item py-3">
        <div class="row g-3">
          <div class="col-4 col-md-3 col-lg-2">
            <a href="#">
              <img src="./img/produtos/camisa-prejogo.webp" class="img-thumbnail">
            </a>
          </div>
          <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
            <h4>
              <b><a href="#" class="text-decoration-none text-danger">Camisa Pré-Jogo</a></b>
            </h4>
            <h6 style="font-weight:400">Pré-Jogo, Branca e Preto, modelo 22/23.<br>
              <b>
                2 unidade(s)<br>
                R$700,00
              </b>
            </h6>
          </div>

        </div>

      </li>

      <li class="list-group-item py-3">
        <div class="row g-3">
          <div class="col-4 col-md-3 col-lg-2">
            <a href="#">
              <img src="./img/produtos/camisa-branca.jpeg" class="img-thumbnail">
            </a>
          </div>
          <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
            <h4>
              <b><a href="#" class="text-decoration-none text-danger">Camisa branca simples</a></b>
            </h4>
            <h6 style="font-weight:400">Camisa simples branca de manga, modelo 21/22.<br>
              <b>
                4 unidade(s)<br>
                R$600,00
              </b>
            </h6>
          </div>
        </div>

      </li>

      <li class="list-group-item py-3">
        <div class="row g-3">
          <div class="col-4 col-md-3 col-lg-2">
            <a href="#">
              <img src="./img/produtos/camisa-2324.jpg" class="img-thumbnail">
            </a>
          </div>
          <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
            <h4>
              <b><a href="#" class="text-decoration-none text-danger">Camisa preta SCCP</a></b>
            </h4>
            <h6 style="font-weight:400">Camisa preta e dourada de manga, modelo 23/24.<br>
              <b>
                1 unidade(s)<br>
                R$450,00
              </b>
            </h6>
          </div>
        </div>
      </li>

      <li class="list-group-item py-3">
        <div class="row g-3">
          <div class="col-4 col-md-3 col-lg-2">
            <a href="#">
              <img src="./img/produtos/kit-bone-camisa.webp" class="img-thumbnail">
            </a>
          </div>
          <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
            <h4>
              <b><a href="#" class="text-decoration-none text-danger">Kit masculino camisa e boné</a></b>
            </h4>
            <h6 style="font-weight:400">Kit masculino camisa e boné, branco e Preto SCCP, modelo 22/23.<br>
              <b>
                3 unidade(s)<br>
                R$1.500,00
              </b>
            </h6>
          </div>
        </div>
      </li>

      <li class="list-group-item pt-3 pb-0">
        <div class="text-end">
          <h5 class="text-dark mb-3">
            Valor total: R$4.450,00
          </h5>
          <a href="carrinho.php" class="btn btn-outline-success btn-md mb-3">Voltar ao carrinho</a>

          <a href="fechamento_endereco.php" class="btn btn-danger btn-md ms-2 mb-3">Continuar</a>
        </div>
      </li>
    </ul>
  </div>

</main>



<?php
include "./includes/footer.php"
?>