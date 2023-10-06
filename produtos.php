<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
    <div class="container">
        <div class="row g-3">
            <div class="col-12 col-sm-6">
                <img src="./img/produtos/camisa-kit.webp" class="img-thumbnail" id="imgProduto" alt="Imagem Principal">
                <br class="clearfix">

                <div class="row my-3 gx-3">
                    <div class="col-3">
                        <img src="./img/produtos/camisa-kit.webp" class="img-thumbnail imagemMiniatura" alt="Imagem 2" onclick="trocarImagem(this)">
                    </div>

                    <div class="col-3">
                        <img src="./img/produtos/kit-bone-camisa.webp" class="img-thumbnail imagemMiniatura" alt="Imagem 3" onclick="trocarImagem(this)">
                    </div>

                    <div class="col-3">
                        <img src="./img/produtos/camisa-2324.jpg" class="img-thumbnail imagemMiniatura" alt="Imagem 4" onclick="trocarImagem(this)">
                    </div>

                    <div class="col-3">
                        <img src="./img/produtos/camisa-branca.jpeg" class="img-thumbnail imagemMiniatura" alt="Imagem 5" onclick="trocarImagem(this)">
                    </div>

                    <script src="trocaFoto.js"></script>
                    <script>
                        var imagensMiniatura = document.querySelectorAll(".imagemMiniatura");

                        for (var i = 0; i < imagensMiniatura.length; i++) {
                            imagensMiniatura[i].addEventListener("click", function() {
                                trocarImagem(this);
                            });
                        }
                    </script>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3>Camisas Sport Clube Corinthians Paulista</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam numquam minima consequatur illo, atque ipsum iure nulla nam earum amet.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias voluptatum rem illum suscipit sequi doloribus sapiente aliquid? Doloremque impedit quos libero nobis, ad nostrum culpa fugit explicabo repellendus eligendi! Ab odio veniam nam expedita perferendis quis, consectetur quos rem iure!.</p>
                <p>
                    <button class="btn btn-lg btn-danger"> <i class="bi-cart"></i> Adicionar ao carrinho</button>

                    <button class="btn btn-lg btn-outline-danger"> <i class="bi-heart"></i> Adicionar aos favoritos</button>
                </p>
            </div>
        </div>
    </div>


</main>



<?php
include "./includes/footer.php"
?>