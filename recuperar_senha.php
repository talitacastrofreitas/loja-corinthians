<?php
include "./includes/header.php";
include "./includes/nav-bar.php";
?>

<main class="flex-fill">
  <div class="container">
    <div class="row justify-content-center">
    <form class="col-sm-10 col-md-8 col-lg-6">
    <h2>Recuperação de senha</h2><br>

    <div class="form-floating mb-3">
    <input type="email" id="txtEmail" class="form-control focus-red" placeholder="">
    <label for="txtEmail">E-mail</label>
    </div>
    

    <button type="button" onclick="window.location.href='./msg_recuperarsenha.php'" class="btn btn-md  text-white" style="background-color:#A60303;">Recuperar Senha</button>

        <p class="mt-3">
        Ainda não é cadastrado? <a href="./cadastro.php">Clique aqui</a>
        para se cadastrar.
        </p>

    </form>
    </div>
  </div>

</main>



<?php
include "./includes/footer.php"
?>
