<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core/auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/pages/common/common.php';
head();
navbar();
?>
<h2>Escolha o serviço desejado:</h2>


<div class="formulario">
    <form id="formulario-servico">
        <!-- Seleção da especialidade -->
        <label for="servico">Tipos de Serviço:</label>
        <select id="especialidade" name="servico" required>
            <option value="" selected disabled>Escolha...</option>
            <option value="BH">Bombeiro Hidráulico</option>
            <option value="EL">Eletricista</option>
            <option value="MC">Marceneiro</option>
            <option value="PE">Pedreiro</option>
            <option value="PI">Pintor</option>
            <option value="CE">Conserto Eletrodoméstico</option>
        </select>
        <br><br>


        <!-- Campo de serviços para todas especialidades -->
        <div id="servicos-container">
            <label>Serviços disponíveis:</label>
            <select id="servicos" name="service" required>
                <option value="" selected disabled>Escolha o serviço</option>
                <optgroup label="Bombeiro Hidráulico" id="servicos-BH" style="display: none;">
                    <option value="VT">Vazamento na torneira</option>
                    <option value="VD">Vazamento em descarga</option>
                    <option value="VTT">Vazamento no teto</option>
                </optgroup>
                <optgroup label="Eletricista" id="servicos-EL" style="display: none;">
                    <option value="CT">Consertar Tomada</option>
                    <option value="IN">Instalar Fiação</option>
                    <option value="LP">Lâmpada Piscando</option>
                </optgroup>
            </select>
        </div>
        <br><br>
        <input type="submit" value="Confirmar Pedido">
    </form>
</div>

<script src="/pages/script/taskCreator.js"></script>
