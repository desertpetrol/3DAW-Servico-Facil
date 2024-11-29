<?php
session_start();

$email = filter_input(INPUT_POST,"email");
$password = filter_input(INPUT_POST,"password");

if( $email !== "email" || $password !== "password") {
    http_response_code(401);
} else {

    $_SESSION["usuario"] = $nome;
}

