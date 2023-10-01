<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<div class="container">
  <div id="carouselMain" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active" data-bs-interval="3000">
        <img src="./img/slides/slide.gif" class="d-none d-md-block w-100" alt="...">
        <img src="./img/slides/slide-II.gif" class="d-block d-md-none w-100" alt="...">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="./img/slides/slide.gif" class="d-none d-md-block w-100" alt="...">
        <img src="./img/slides/slide-II.gif" class="d-block d-md-none w-100" alt="...">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="./img/slides/slide.gif" class="d-none d-md-block w-100" alt="...">
        <img src="./img/slides/slide-II.gif" class="d-block d-md-none w-100" alt="...">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</div>
<hr class="mt-3">


<main class="flex-fill">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5">
        <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control focus-red" placeholder="Digite aqui o que procura">
            <button class="btn text-white" style="background-color: #A60303">Buscar</button>
          </div>
        </form>
      </div>

      <div class="col-12 col-md-7">
        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">

          <form class="d-inline-block">
            <select class="form-select form-select-sm focus-red">
              <option>Ordenar pelo nome</option>
              <option>Ordenar pelo menor preço</option>
              <option>Ordenar pelo maior preço</option>
            </select>
          </form>

          <nav class="d-inline-block me-3">
            <ul class="pagination pagination-sm my-0">
              <li class="page-item"><a class="page-link focus-red" href="#">1</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">2</a></li>
              <li class="page-item disabled"><a class="page-link focus-red" href="#">3</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">4</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">5</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">6</a></li>
              
            </ul>
          </nav>

        </div>
      </div>
    </div>
<hr class="mt-3">

<div class="row g-3">

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/Jaqueta-roxa.webp" class="card-img-top">
  
  <div class="card-header">
    R$300,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Jaqueta</h5>
    <p class="card-text truncar-3l">Corta-vento roxo e Preto, lista preta no meio, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">22 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/jaqueta-roxo.webp" class="card-img-top">
  
  <div class="card-header">
    R$350,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Jaqueta</h5>
    <p class="card-text truncar-3l"> Corta-vento roxo e Preto, estilo V preto, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">11 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/Jaqueta-branca.webp" class="card-img-top">
  
  <div class="card-header">
    R$200,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Jaqueta</h5>
    <p class="card-text truncar-3l">Corta-vento branca e Preto, lista preta na manga, modelo 21/22.</p>
   
  </div>
  <div class="card-footer">
  <a href="#" class="btn btn-light disabled mt-4 d-block"><small>Reabastecendo estoque</small></a>
  <small class="text-danger"><b>Produto esgotado</b></small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart-fill" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/jaqueta.webp" class="card-img-top">
  
  <div class="card-header">
    R$400,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Jaqueta</h5>
    <p class="card-text truncar-3l">Corta-vento preto e cinza, modelo 21/22.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">15 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisas-II-21.webp" class="card-img-top">
  
  <div class="card-header">
    R$100,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa Listras</h5>
    <p class="card-text truncar-3l">Listrada Preta e branca de manga, modelo 21.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">34 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisa-saojorge.jpg" class="card-img-top">
  
  <div class="card-header">
    R$150,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa SJ</h5>
    <p class="card-text truncar-3l"> Camisa Sao Jorge simples de manga, Branca, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="#" class="btn btn-light disabled mt-4 d-block"><small>Reabastecendo estoque</small></a>
  <small class="text-danger"><b>Produto esgotado</b></small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisa-saint.jpg" class="card-img-top">
  
  <div class="card-header">
    R$250,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa SJ</h5>
    <p class="card-text truncar-3l">São Jorge, Vermelha, Saint, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">6 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart-fill" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisa-prejogo.webp" class="card-img-top">
  
  <div class="card-header">
    R$350,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa PJ</h5>
    <p class="card-text truncar-3l">Pré-Jogo, Branca e Preto, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">7 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart-fill" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisa-branca.jpeg" class="card-img-top">
  
  <div class="card-header">
    R$150,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa Branca</h5>
    <p class="card-text truncar-3l">Camisa simples branca de manga, modelo 21/22.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">30 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart-fill" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisa-2324.jpg" class="card-img-top">
  
  <div class="card-header">
    R$450,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa SCCP</h5>
    <p class="card-text truncar-3l">Preta e dourada de manga, modelo 23/24.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">25 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/kit-bone-camisa.webp" class="card-img-top">
  
  <div class="card-header">
    R$500,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisa e boné</h5>
    <p class="card-text truncar-3l">Kit camisa e boné, branco e Preto, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">8 unidades em estoque</small>
  </div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<div class="card text-center bg-light">
    <a href="#" class="position-absolute end-0 p-2"><i class="bi-suit-heart" style="color:#A60303; font-size:24px; line-height: 24px;"></i></a>
  <img src="./img/produtos/camisa-kit.webp" class="card-img-top">
  
  <div class="card-header">
    R$600,00
  </div>

  <div class="card-body">
    <h5 class="card-title">Camisas</h5>
    <p class="card-text truncar-3l">Kit com duas camisas: 1ª camisa: branca, 2ª camisa: Preta com listras brancas, modelo 22/23.</p>
   
  </div>
  <div class="card-footer">
  <a href="./pages/carrinho.php" class="btn mt-2 d-block text-white" style="background-color:#A60303;">Adicionar ao carrinho</a>
  <small class="text-success">10 unidades em estoque</small>
  </div>
</div>
</div>

  </div>

<hr class="mt-3">
<div class="row pb-3">
      <div class="col-12">
        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">

          <form class="d-inline-block">
            <select class="form-select form-select-sm focus-red">
              <option>Ordenar pelo nome</option>
              <option>Ordenar pelo menor preço</option>
              <option>Ordenar pelo maior preço</option>
            </select>
          </form>

          <nav class="d-inline-block me-3">
            <ul class="pagination pagination-sm my-0">
              <li class="page-item"><a class="page-link focus-red" href="#">1</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">2</a></li>
              <li class="page-item disabled"><a class="page-link focus-red" href="#">3</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">4</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">5</a></li>
              <li class="page-item"><a class="page-link focus-red" href="#">6</a></li>
              
            </ul>
          </nav>

        </div>
      </div>
    </div>
    </div>
  </div>
</main>



<?php
include "./includes/footer.php"
  ?>