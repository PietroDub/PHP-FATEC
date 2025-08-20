<?php
    if($_GET){
        
    //pegando os parâmetros no link    
    $controle = $_GET["controle"];
    $metodo = $_GET["metodo"];
    //rota inicial (por onde entra na aplicação)
    require_once "Controllers/$controle.class.php";
    $obj = new $controle();
    $obj->$metodo();

    } else{
    //rota inicial (por onde entra na aplicação)
    require_once "Controllers/inicioController.class.php";
    $obj = new inicioController();
    $obj->inicio();
    }

?>