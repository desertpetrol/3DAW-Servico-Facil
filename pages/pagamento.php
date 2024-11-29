<?php
include 'common.php';
head();
navbar();
?>

<h2>Confirme o Preço do Serviço</h2>
<div class="formulario">
<form>
    Tipos de Serviço:    
    <select name="servico">
        <option value="BH">Bombeiro Hidráulico</option>
        <option value="CH">Chaveiro</option>
        <option value="MC">Marceneiro</option>
        <option value="EL">Eletricista</option>
        <option value="PE">Pedreiro</option>
        <option value="PI">Pintor</option>
        <option value="CE">Conserto Eletrodoméstico</option>
    </select>
    <br>
    <div class="texto">
    Serviço:
    <input type="text" name="servico">
    <br>
    Preço:
    <input type="text" name="preco">
    <br>
    Seu Crédito:
    <input type="text" name="credito">
    <br>
    Valor a Ser Cobrado:
    <input type="text" name="preco_cobrado">
    <br><br>
    </div>
    <input type="submit" value="Confirmar">
</form>

</div>
<script src="script.js"></script>

</html>
