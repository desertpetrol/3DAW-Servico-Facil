<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/core/auth.php';

$stmt = $pdo->query("select * from service");
$services = $stmt->fetchAll();

echo json_encode($services);