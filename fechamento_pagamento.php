<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
    <div class="container">
        <h1>Selecione a forma de pagamento</h1>
        <h5 class="mb-4">Selecione a forma de pamento e clique em <b>finalizar</b> para prosseguir e <b>concluir o pedido</b>.</h5>

        <div class="d-flex justify-content-between flex-wrap border rounded-top pt-4 px-3">

            <div class="mb-4 mx-2 flex-even">
                <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag1">
                <label class="btn btn-outline-danger p-4 h-100 w-100" for="pag1">
                    <h4>
                        <b class="text-dark">Cartão de Crédito ou Débito</b>
                    </h4>
                    <hr>
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="text" id="txtNome" class="form-control focus-red" placeholder="" autofocus>
                            <label for="txtNome" class="text-black-50">Nome impresso no cartão</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="txtNumero" class="form-control focus-red" placeholder="">
                            <label for="txtNumero" class="text-black-50">Número do cartão</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="txtValidade" class="form-control focus-red" placeholder="">
                            <label for="txtValidade" class="text-black-50">Validade (mm/aa)</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="txtCodigo" class="form-control focus-red" placeholder="">
                            <label for="txtCodigo" class="text-black-50">Código de segurança</label>
                        </div>

                        <div class="form-floating">
                            <select id="selParcelas" class="form-select focus-red">
                                <option value="1" selected>1x à vista</option>
                                <option value="2">2x sem juros</option>
                                <option value="3">3x sem juros</option>
                                <option value="4">4x sem juros</option>
                                <option value="5">5x sem juros</option>
                                <option value="6">6x sem juros</option>
                                <option value="7">7x sem juros</option>
                                <option value="8">8x sem juros</option>
                                <option value="9">9x sem juros</option>
                                <option value="10">10x sem juros</option>
                            </select>
                            <label for="selParcelas" class="text-black-50">Selecione o número de parcelas</label>
                        </div>

                    </form>
                </label>
            </div>

            <div class="mb-4 mx-2 flex-even">
                <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag2">
                <label class="btn btn-outline-danger p-4 h-100 w-100" for="pag2">
                    <h4>
                        <b class="text-dark">Dinheiro ou pix</b>
                    </h4>
                    <hr>
                    <form action="">
                        <h4>Valor da compra: <b>R$4.450,00</b></h4><br>

                        <div class="form-floating">
                            <select id="selParcelas" class="form-select focus-red">
                                <option value="1" selected>Selecione</option>
                                <option value="2">Dinheiro</option>
                                <option value="3">Pix</option>
                            </select>
                            <label for="selParcelas" class="text-black-50">Método de pagamento</label>
                        </div><bR>
                        <p>
                            Se precisar de troco, informe no campo abaixo.
                        </p>
                        <div class="form-floating mb-3">
                            <input type="text" id="txtTroco" class="form-control focus-red" placeholder="">
                            <label for="txtTroco" class="text-black-50">Precisa de troco para quanto?</label>
                        </div>
                    </form>

                </label>
            </div>


            


        </div>
        <div class="text-end border border-top-0 rounded-bottom p-4 pb-0">
                <a href="fechamento_endereco.php" class="btn btn-outline-success btn-md mb-4">Voltar ao endereço</a>

                <a href="fechamento_pedido.php" class="btn btn-danger btn-md ms-2 mb-4">Finalizar</a>
            </div>
    </div>

</main>



<?php
include "./includes/footer.php"
?>