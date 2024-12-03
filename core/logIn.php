<?php
// Include database connection
include $_SERVER['DOCUMENT_ROOT'] . '/core/db.php';

session_start();

$email = $_GET['email'] ?? null;
$password = $_GET['password'] ?? null;

if (!empty($email) || !empty($password)) {
    try {
        // Prepare the PDO statement
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
        $stmt->bindParam(':credit', $credit, PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();

        // Check if any rows were returned
        if ($stmt->rowCount() > 0) {
            $_SESSION['username'] = $email;
            $_SESSION['type'] = $tipo;
            $_SESSION['credito'] = $credit;
            http_response_code(200);
            echo json_encode(array("statusCode" => 200,));
        } else {
            http_response_code(404);
            echo json_encode(array("statusCode" => 404, "error" => "Account not found"));
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(array("statusCode" => 500, "error" => $e->getMessage()));
    }
} else {
    http_response_code(400);
    echo json_encode(["statusCode" => 400, "error" => "Invalid username or password"]);
    exit;
}

$pdo = null;
