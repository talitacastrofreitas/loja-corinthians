<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
  <div class="row justify-content-center">
    <form class="col-sm-10 col-md-8 col-lg-6">
    <h2>Entre em contato</h2><br>

    <div class="form-floating mb-3">
    <input type="text" id="txtNome" class="form-control focus-red" placeholder="">
    <label for="txtNome">Nome completo</label>
    </div>

    <div class="form-floating mb-3">
    <input type="email" id="txtEmail" class="form-control focus-red" placeholder="">
    <label for="txtEmail">E-mail</label>
    </div>


    <div class="form-floating mb-3">
    <textarea id="txtMensagem" class="form-control focus-red" placeholder="" style="height: 100px"></textarea>
    <label for="txtMensagem">Mensagem</label>
    </div>

    

    <button type="button" onclick="window.location.href='./confirma_contato.php'" class="btn btn-md  text-white" style="background-color:#A60303;">Enviar mensagem</button>

    <p class="mt-3">
    Faremos o nosso melhor para responder sua mensagem em até 2 dias úteis.
    </p>

    <small class="mt-3">
        Atenciosamente, <br>
        <i>Central de Relacionamento SCCP Online</i>
</small>
       
    </form>
  </div>
  </div>

</main>



<?php
include "./includes/footer.php"
?>
