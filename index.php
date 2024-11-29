<?php
include $_SERVER['DOCUMENT_ROOT'].'/pages/common/common.php';
head();
navbar();
?>
<div class="d-flex align-items-center justify-content-center">
<h1 class="h1"> Serviço Fácil</h1>
</div>

<div class="h-100 d-flex align-items-center justify-content-center">
<form action="/core/login.php">
    
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Digite seu Email">
  </div>

  <div class="form-group">
    <label>password</label>
    <input type="password" name="password" class="form-control" id="Inputpassword" placeholder="password">
  </div>

  <button type="submit" class="btn btn-primary" value="Registrar">Login</button>
</form>
</div>

<a href="pages/cadastro.php">Quero ser cliente do serviço fácil.</a><br /><br />
<a href="pages/cadastro.php">Sou profissional e quero me candidatar a prestar serviços.</a>

<script src="script.js"></script>


<?php
foot();
?>
