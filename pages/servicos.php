<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core/auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/pages/common/common.php';
head();
navbar();
?>

<div class="container">

<h1>Servicos</h1>
<a href="/pages/pedido.php">Criar novo serviço</a>

<hr>

<table class="table">
    <thead>
        <tr>
            <th>Serviço</th>
            <th>Data de começo</th>
            <th>Data de término</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody id="corpoTabela">
    </tbody>
</table>
<div class="spinner-border" role="status" style="display: none;"></div>
</div>

<script src="script/services.js"></script>

<?php
foot();
?>

