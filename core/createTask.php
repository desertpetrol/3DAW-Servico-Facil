<?php
header('Content-Type: application/json; charset=utf-8');

include $_SERVER['DOCUMENT_ROOT'] . '/core/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/core/auth.php';

$client = $_SESSION['username'] ?? null;
$client_id = 1;

$stmt = $pdo->prepare("SELECT id FROM user WHERE email = :email");
$stmt->execute(['email' => $client]);

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch as an associative array
    $client_id = $row['id'];
} else {
    http_response_code(401);
    echo json_encode(array("statusCode" => 401));
    exit;
}

$task = $_POST['service'] ?? null;

$contractor = 4;

if (!empty($client) && !empty($contractor) && !empty($task)) {

    try {
        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO service (client_id, contractor_id, task, date_init, status) VALUES (:client, :contractor, :task, :date_init, :status)");
        $sucess = $stmt->execute([
            'client' => $client_id,
            'contractor' => $contractor,
            'task' => $task,
            'date_init' => date('d-m-y'),
            'status' => "Aguardando Início"
        ]);

        if ($sucess) {
            http_response_code(201);
            echo json_encode(array("statusCode" => 201));
            exit;
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(array("statusCode" => 500, "error" => $e->getMessage()));
    }
} else {
    http_response_code(204);
    echo json_encode(array("statusCode" => 204, "error" => "Failed to send service request"));
}
