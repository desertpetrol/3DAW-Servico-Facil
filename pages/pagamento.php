<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core/auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/pages/common/common.php';
head();
navbar();
?>

<h2>Confirme o Preço do Serviço</h2>
<div class="formulario">
    <div class="form-group">
        <label>Tipo de Serviço:</label>
        <span><?php echo htmlspecialchars($especialidade); ?></span>
    </div>
    <div class="form-group">
        <label>Serviço:</label>
        <span><?php echo htmlspecialchars($servico); ?></span>
    </div>
    <div class="form-group">
        <label>Preço do Serviço:</label>
        <span>R$ <?php echo number_format($valor, 2, ',', '.'); ?></span>
    </div>
    <div class="form-group">
        <label>Crédito do Cliente:</label>
        <span>R$ <?php echo number_format($credito, 2, ',', '.'); ?></span>
    </div>
    <div class="form-group">
        <label>Total a Ser Cobrado:</label>
        <span>R$ <?php echo number_format($total, 2, ',', '.'); ?></span>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Confirmar</button>
</div>
<script src="/pages/script/servicos.js"></script>

<?php
foot();
?>

