<?php
include $_SERVER['DOCUMENT_ROOT'] . '/pages/common/common.php';
head();
navbar();
?>
<h2>Escolha o serviço desejado:</h2>

<div class="formulario">
    <form id="service_form" name="service" method="post">
        <label for="servico">Tipos de Serviço:</label>
        <select name="servico">
            <option value="BH">Bombeiro Hidráulico</option>
            <option value="CH">Chaveiro</option>
            <option value="MC">Marceneiro</option>
            <option value="EL">Eletricista</option>
            <option value="PE">Pedreiro</option>
            <option value="PI">Pintor</option>
            <option value="CE">Conserto Eletrodomestico</option>
        </select>
        <button type="button" class="btn btn-primary" value="service_send" id="service_btn">Login</button>
    </form>
</div>
<script src="/pages/script/service.js"></script>