<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
    <div class="container">
        <h1>Selecione o endereço de entrega</h1>
        <h5 class="mb-4">Selecione o endereço de entrega e clique em <b>continuar</b> para prosseguir para a <b>seleção da forma de pagamento</b>.</h5>

        <div class="d-flex justify-content-around flex-wrap border rounded-top pt-4 px-3">

            <div class="mb-4 mx-2 flex-even">
                <input type="radio" class="btn-check" name="endereco" autocomplete="off" id="end1">
                <label class="btn btn-outline-danger p-4 h-100 w-100" for="end1">
                    <h4>
                        <b class="text-dark">Minha Casa</b><br>
                        <hr>
                        <b>Talita Castro</b><br>
                        Rua Maria Quitéria, 22<br>
                        Salvador/BA<br>
                        CEP: 41.187-740
                    </h4>
                </label>
            </div>

            <div class="mb-4 mx-2 flex-even">
                <input type="radio" class="btn-check" name="endereco" autocomplete="off" id="end2">
                <label class="btn btn-outline-danger p-4 h-100 w-100" for="end2">
                    <h4>
                        <b class="text-dark">Meu trabalho</b><br>
                        <hr>
                        <b>Talita Castro</b><br>
                        Rua Maria Quitéria, 22<br>
                        Salvador/BA<br>
                        CEP: 41.187-740
                    </h4>
                </label>
            </div>

            <div class="mb-4 mx-2 flex-even">
                <input type="radio" class="btn-check" name="endereco" autocomplete="off" id="end3">
                <label class="btn btn-outline-danger p-4 h-100 w-100" for="end3">
                    <h4>
                        <b class="text-dark">Casa da minha mãe</b><br>
                        <hr>
                        <b>Talita Castro</b><br>
                        Rua Maria Quitéria, 22<br>
                        Salvador/BA<br>
                        CEP: 41.187-740
                    </h4>
                </label>
            </div>

           


        </div>
        <div class="text-end border border-top-0 rounded-bottom p-4 pb-0">
                <a href="fechamento_itens.php" class="btn btn-outline-success btn-md mb-4">Voltar aos itens</a>

                <a href="fechamento_pagamento.php" class="btn btn-danger btn-md ms-2 mb-4">Continuar</a>
            </div>
    </div>

</main>



<?php
include "./includes/footer.php"
?>