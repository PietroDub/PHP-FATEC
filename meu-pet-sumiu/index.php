<?php
require __DIR__ . "vendor/autoload.php";
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$email_username = $_ENV["EMAIL_USERNAME"];
$email_password = $_ENV["EMAIL_PASSWORD"];
// echo $email_username;
//die();

if ($_GET) {
  // outras rotas

  $controle = $_GET["controle"];
  $metodo = $_GET["metodo"];

  require_once "Controllers/$controle.php";
  
  $obj = new $controle();
  $obj->$metodo();
}
else {
  // rota inicial
  require_once "Controllers/InicioController.php";
  
  $obj = new InicioController();
  $obj->inicio();
}

?>