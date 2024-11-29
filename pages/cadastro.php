<?php
include $_SERVER['DOCUMENT_ROOT'] . '/pages/common/common.php';
head();
navbar();
?>

<div class="d-flex align-items-center justify-content-center">
  <h1 class="h1"> Cadastro de
    <small class="text-muted">Cliente | Prestador</small>
  </h1>
</div>

<div class="h-100 d-flex align-items-center justify-content-center">
  <form id="register_form" name="register" method="post">

    <div class="form-group">
      <label> Email</label>
      <input type="email" name="email" class="form-control" id="email_input" aria-describedby="emailHelp" placeholder="Digite seu Email">
    </div>

    <div class="form-group">
      <label> Senha</label>
      <input type="password" name="password" class="form-control" id="password_input" placeholder="password">
    </div>

    <div class="form-group">
      <label> Confirmação de senha</label>
      <input type="password" name="passwordConf" class="form-control" id="password_confirm_input" placeholder="Confirme sua password">
    </div>

    <button type="button" class="btn btn-primary" value="Registrar" id="signin_btn">Registrar</button>
  </form>
</div>

<script src="script/signIn.js"></script>

<?php
foot();
?>