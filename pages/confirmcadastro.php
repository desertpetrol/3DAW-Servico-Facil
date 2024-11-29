<?php

$name = "";
$email = "";
$password = "";
$password2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

  $name = test_input($_POST["login"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $password2 = test_input($_POST["confpassword"]);
  
  $msg = "Socorro\nCONFIME SEU EMAIL. AGORA?!";
  $msg = wordwrap($msg,70);
  mail($email,$msg);
}

header("Location: ../index.php");
exit(); 
