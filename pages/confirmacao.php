<!DOCTYPE html>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/pages/common/common.php';
head();
navbar();
?>

<h1>Confirmar Solicitação</h1>
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

$testmail = test_input($_POST["login"]);
$testpassword = test_input($_POST["password"]);

include 'common.php';
head();
navbar();

}
if($email==$testmail) 
{
    echo '<p id="confirma">Para validar sua conta, você deve acessar o e-mail e clicar no link fornecido.</p>';
}
else
{
    echo '<h1>Você está cadastrado(a) no Serviço Fácil.</h1>';
}

foot();
  
<script src="script.js"></script>

<?php
foot();
?>
