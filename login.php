<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
  <div class="row justify-content-center">
    <form class="col-sm-10 col-md-8 col-lg-6">
    <h2>Identifique-se</h2><br>

    <div class="form-floating mb-3">
    <input type="email" id="txtEmail" class="form-control focus-red" placeholder="">
    <label for="txtEmail">E-mail</label>
    </div>

    <div class="form-floating mb-3">
    <input type="password" id="txtSenha" class="form-control focus-red" placeholder="">
    <label for="txtSenha">Senha</label>
    </div>

    <div class="form-check mb-3">
    <input type="checkbox" id="chkLembrar" class="form-check-input" value="" >
    <label for="chkLembrar" class="form-check-label">Mantenha-me conectado</label>
    </div>
    

    <button type="button" onclick="window.location.href='./cliente_dados.php'" class="btn btn-md  text-white" style="background-color:#A60303;">Entrar</button>

        <p class="mt-3">
        Ainda não é cadastrado? <a href="./cadastro.php">Clique aqui</a>
        para se cadastrar.
        </p>

        <p class="mt-3">
        Esqueceu sua senha? <a href="./recuperar_senha.php">Clique aqui</a>
        para recuperá-la.
        </p>

    </form>
  </div>
  </div>

</main>



<?php
include "./includes/footer.php"
?>
