<?php

include $_SERVER['DOCUMENT_ROOT'] . '/core/db.php';

$email = $_POST['email'];
$password = $_POST['password'];
$type = 1;

if (!empty($password) && !empty($email)) {

    // Check for duplicate email
    $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->rowCount() > 0) {
        http_response_code(201);
        exit;
    }

    // Insert new user into the database
    $stmt = $pdo->prepare("INSERT INTO user (email, password, type) VALUES (:email, :password, :type)");
    $sucess = $stmt->execute([
        'email' => $email,
        'password' => $password,
        'type' => '1' // Default user type

    ]);
    if($sucess) {
        http_response_code(200);
    }

} else {
    http_response_code(204);
}
