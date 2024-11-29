<?php
include 'common.php';
head();
navbar();
?>
<h2>Escolha o serviço desejado:</h2>

<div class="formulario">
<form>
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
    <br><br>
    <div class="texto">
    <textarea rows="15" cols="50"></textarea>
    </div>
<br><br>
    <input type="submit" value="Escolher">
</form>
</div>
<script src="script.js"></script>


