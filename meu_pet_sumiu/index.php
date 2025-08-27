<?php
    if($_GET){
        
    //pegando os parâmetros no link    
    $controle = $_GET["controle"];
    $metodo = $_GET["metodo"];
    //rota inicial (por onde entra na aplicação)
    require_once "controllers/$controle.class.php";
    $obj = new $controle();
    $obj->$metodo();

    } else{
    //rota inicial (por onde entra na aplicação)
    require_once "controllers/inicioController.class.php";
    $obj = new inicioController();
    $obj->inicio();
    }

?>