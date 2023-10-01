<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
  <div class="row justify-content-center">
    <form class="col-sm-10 col-md-8 col-lg-6">
    <h2>Digite sua nova senha</h2><br>

    <div class="form-floating mb-3">
    <input type="password" id="txtSenha" class="form-control focus-red" placeholder="" autofocus>
    <label for="txtSenha">Nova Senha</label>
    </div>

    <div class="form-floating mb-3">
    <input type="password" id="txtSenha" class="form-control focus-red" placeholder="">
    <label for="txtSenha">Confirmar nova senha</label>
    </div>
    

    <button type="button" onclick="window.location.href='./msg_cadastrarnovasenha.php'" class="btn btn-md  text-white" style="background-color:#A60303;">Cadastrar nova senha</button>

    </form>
  </div>
  </div>

</main>



<?php
include "./includes/footer.php"
?>
