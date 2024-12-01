<?php

include '/core/db.php';
include '/core/auth.php';

//post
$client;
$contractor;
$service;
$date_init;


if (!empty($password) && !empty($email)) {

    // Insert new user into the database
    $stmt = $pdo->prepare("INSERT INTO service (date_init, type) VALUES (:client, :contractor, :service, :date_init)");
    $sucess = $stmt->execute([
        'client' => $email,
        'contractor' => $password,
        'service' => $service,
        

    ]);
    if($sucess) {
        http_response_code(200);
    }

} else {
    http_response_code(204);
}
