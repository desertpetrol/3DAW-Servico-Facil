<?php
session_start();
if (!isset($_SESSION["username"])) {
    http_response_code(401);
    header('Location: /pages/entrar.php');
    exit();
}
