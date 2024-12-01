<?php

function head()
{

    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serviço Fácil</title>
        <link rel="stylesheet" type="text/css" href="/pages/style/style.css">
        <link rel="shortcut icon" href="/media/favicon.ico" type="image/x-icon">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>';
}

function navbar()
{
    echo '<nav class="d-flex .flex-row">';

    echo' 
        <ul class = "w-75" id="navegacao">
            <li class="home primeiro"><a href="/index.php">Home</a></li>
            <li class="cadastro"><a href="/pages/cadastro.php">Cadastro</a></li>
            <li class="pedido"><a href="/pages/pedido.php">Pedido</a></li>
            <li class="pagamento"><a href="/pages/pagamento.php">Pagamento</a></li>
            <li class="confirmacao"><a href="/pages/confirmacao.php">Confirmação</a></li>
        </ul>';

    session_start();
    if(!isset($_SESSION["username"])){
        echo 
        '<div class="w-25"><span>Você não está logado</span></div>';
    } else if (isset($_SESSION["username"])){
        echo 
        '<div class="w-25"><span>Você está logado como:'.$_SESSION["username"].' </span></div>';
    }

    echo '</nav>';
}

function foot()
{
    echo '</html>';
}
