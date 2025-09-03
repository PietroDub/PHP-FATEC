<?php
    require_once "conta.class.php";
    require_once "poupanca.class.php";
    require_once "corrente.class.php";

    $corrente = new Corrente(1000, "123-4", "234-5", 5000);
    $corrente->Retirar(2000);
    echo$corrente->getSaldo(); 

    $poupanca = new Poupanca(4, "234-5", "23456", 9000);
    echo $poupanca->getSaldo()
?>