<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo json_encode(array("Connection" => 'Failed'));
}
?> 