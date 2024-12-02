<?php

include '/core/db.php';
include '/core/auth.php';

//post
$client = $_POST['client'] ?? null;
$service = $_POST['service'] ?? null;

$contractor = "Pedro" ?? null;

if (!empty($client) && !empty($contractor) && !empty($service)) {

    // Insert new user into the database
    $stmt = $pdo->prepare("INSERT INTO service (date_init, type) VALUES (:client, :contractor, :service, :date_init, :status)");
    $sucess = $stmt->execute([
        'client' => $email,
        'contractor' => $password,
        'service' => $service,
        'date_init' => date('d-m-y'),
        'status' => "Aguardando Início"
    ]);

    if($sucess) {
        http_response_code(201);
    }

} else {
    http_response_code(204);
}
