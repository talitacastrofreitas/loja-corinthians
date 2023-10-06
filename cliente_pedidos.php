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

          <a href="cliente_contatos.php" class="list-group-item lis-group-item-action "><i class="bi-mailbox fs-6"></i> Contatos</a>

          <a href="cliente_endereco.php" class="list-group-item lis-group-item-action "><i class="bi-house-door fs-6"></i> Endereço</a>

          <a href="cliente_pedidos.php" class="list-group-item lis-group-item-action bg-danger text-light"><i class="bi-truck fs-6"></i> Pedidos</a>

          <a href="cliente_favoritos.php" class="list-group-item lis-group-item-action  "><i class="bi-heart fs-6"></i> Favoritos</a>

          <a href="cliente_senha.php" class="list-group-item lis-group-item-action  "><i class="bi-lock fs-6"></i> Alterar senha</a>

          <a href="index.php" class="list-group-item lis-group-item-action  "><i class="bi-door-open fs-6"></i> Sair</a>
        </div>
      </div>
      <div class="col-8">
        <form class="row m-3">
          <div class="col-12 col-md-6 mb-3">
            <div class="form-floating">
              <select class="form-select focus-red">
                <option value="30">Últimos 30 dias</option>
                <option value="60">Últimos 60 dias</option>
                <option value="90">Últimos 90 dias</option>
                <option value="180">Últimos 180 dias</option>
                <option value="360" selected>Últimos 360 dias</option>
                <option value="9999">Todo o período</option>
              </select>
              <label>Período</label>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="form-floating">
              <select class="form-select focus-red">
                <option value="1" selected>Mais novos primeiro</option>
                <option value="2">Mais antigos primeiro</option>
              </select>
              <label>Ordenação</label>
            </div>
          </div>
        </form>

        <div class="accordion" id="divPedidos">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed focus-red" type="button" data-bs-toggle="collapse" data-bs-target="#pedido000005">
                <b>Pedido 000005</b>
                <span class="mx-1">(realizado em 09/10/2023)</span>
              </button>
            </h2>
            <div id="pedido000005" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Produtos</th>
                      <th class="text-end">R$ Unit.</th>
                      <th class="text-center">Qtde.</th>
                      <th class="text-end">Subtotal</th>
                    </tr>
                  </thead>

                  <tbody class="table-group-divider">
                    <tr>
                      <td>Camisa SJ</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa SCCP</td>
                      <td class="text-end">R$450,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa Branca</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">2</td>
                      <td class="text-end">R$300,00</td>
                    </tr>
                  </tbody>

                  <tfoot class="table-group-divider">
                    <tr>
                      <th class="text-end" colspan="3">Valor dos produtos:</th>
                      <td class="text-end">R$1.200,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Valor do frete:</th>
                      <td class="text-end">R$45,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Forma de pagamento: </th>
                      <td class="text-end"><i class="bi bi-credit-card mx-2"></i>Crédito VISA à vista</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed focus-red" type="button" data-bs-toggle="collapse" data-bs-target="#pedido000004">
                <b>Pedido 000004</b>
                <span class="mx-1">(realizado em 06/10/2023)</span>
              </button>
            </h2>
            <div id="pedido000004" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Produtos</th>
                      <th class="text-end">R$ Unit.</th>
                      <th class="text-center">Qtde.</th>
                      <th class="text-end">Subtotal</th>
                    </tr>
                  </thead>

                  <tbody class="table-group-divider">
                    <tr>
                      <td>Camisa SJ</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">3</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa SCCP</td>
                      <td class="text-end">R$450,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa Branca</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">5</td>
                      <td class="text-end">R$750,00</td>
                    </tr>
                  </tbody>

                  <tfoot class="table-group-divider">
                    <tr>
                      <th class="text-end" colspan="3">Valor dos produtos:</th>
                      <td class="text-end">R$1.650,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Valor do frete:</th>
                      <td class="text-end">R$45,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Forma de pagamento: </th>
                      <td class="text-end"><i class="bi bi-cash mx-2"></i>Dinheiro</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed focus-red" type="button" data-bs-toggle="collapse" data-bs-target="#pedido000003">
                <b>Pedido 000003</b>
                <span class="mx-1">(realizado em 02/10/2023)</span>
              </button>
            </h2>
            <div id="pedido000003" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Produtos</th>
                      <th class="text-end">R$ Unit.</th>
                      <th class="text-center">Qtde.</th>
                      <th class="text-end">Subtotal</th>
                    </tr>
                  </thead>

                  <tbody class="table-group-divider">
                    <tr>
                      <td>Camisa SJ</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">2</td>
                      <td class="text-end">R$300,00</td>
                    </tr>

                    <tr>
                      <td>Camisa SCCP</td>
                      <td class="text-end">R$450,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa Branca</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$150,00</td>
                    </tr>
                  </tbody>

                  <tfoot class="table-group-divider">
                    <tr>
                      <th class="text-end" colspan="3">Valor dos produtos:</th>
                      <td class="text-end">R$900,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Valor do frete:</th>
                      <td class="text-end">R$45,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Forma de pagamento: </th>
                      <td class="text-end"><i class="bi bi-credit-card mx-2"></i>Crédito VISA 2x</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed focus-red" type="button" data-bs-toggle="collapse" data-bs-target="#pedido000002">
                <b>Pedido 000002</b>
                <span class="mx-1">(realizado em 01/10/2023)</span>
              </button>
            </h2>
            <div id="pedido000002" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Produtos</th>
                      <th class="text-end">R$ Unit.</th>
                      <th class="text-center">Qtde.</th>
                      <th class="text-end">Subtotal</th>
                    </tr>
                  </thead>

                  <tbody class="table-group-divider">
                    <tr>
                      <td>Camisa SJ</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">3</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa SCCP</td>
                      <td class="text-end">R$450,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa Branca</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">5</td>
                      <td class="text-end">R$750,00</td>
                    </tr>
                  </tbody>

                  <tfoot class="table-group-divider">
                    <tr>
                      <th class="text-end" colspan="3">Valor dos produtos:</th>
                      <td class="text-end">R$1.650,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Valor do frete:</th>
                      <td class="text-end">R$45,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Forma de pagamento: </th>
                      <td class="text-end"><i class="bi bi-cash mx-2"></i>  Dinheiro </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed focus-red" type="button" data-bs-toggle="collapse" data-bs-target="#pedido000001">
                <b>Pedido 000001</b>
                <span class="mx-1">(realizado em 30/09/2023)</span>
              </button>
            </h2>
            <div id="pedido000001" class="accordion-collapse collapse" data-bs-parent="#divPedidos">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Produtos</th>
                      <th class="text-end">R$ Unit.</th>
                      <th class="text-center">Qtde.</th>
                      <th class="text-end">Subtotal</th>
                    </tr>
                  </thead>

                  <tbody class="table-group-divider">
                    <tr>
                      <td>Camisa SJ</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">3</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa SCCP</td>
                      <td class="text-end">R$450,00</td>
                      <td class="text-center">1</td>
                      <td class="text-end">R$450,00</td>
                    </tr>

                    <tr>
                      <td>Camisa Branca</td>
                      <td class="text-end">R$150,00</td>
                      <td class="text-center">5</td>
                      <td class="text-end">R$750,00</td>
                    </tr>
                  </tbody>

                  <tfoot class="table-group-divider">
                    <tr>
                      <th class="text-end" colspan="3">Valor dos produtos:</th>
                      <td class="text-end">R$1.650,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Valor do frete:</th>
                      <td class="text-end">R$45,00</td>
                    </tr>

                    <tr>
                      <th class="text-end" colspan="3">Forma de pagamento:</th>
                      <td class="text-end"><i class="bi bi-credit-card mx-2"></i>Crédito VISA 4x</td>
                    </tr>
                  </tfoot>
                </table>
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