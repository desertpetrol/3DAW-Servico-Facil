<?php
session_start();
if( isset($_SESSION["usuario"])) {
    header("Content-Type: application/json");
    $usuario = $_SESSION["usuario"];
    $array = [ "usuario" => $usuario];
    echo json_encode($array);
} else {
    http_response_code(401);
}