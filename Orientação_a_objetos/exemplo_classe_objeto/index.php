<?php

    // include "Usuario.class.php";
    // include_once "Usuario.class.php";
    // require "Usuario.class.php";
    require_once "Usuario.class.php";

    $usuario1 = new Usuario("Mario", "mario@armario.com", "mario30");
    $usuario2 = new Usuario("", "mario@armario.com", "mario30"); //deixar vazio quando não tem
    $usuario3 = new Usuario(email:"mario@armario.com",senha:"mario30"); //ordem não importa

    echo('<pre>');
    var_dump($usuario1);
    echo('</pre>');

    echo('<pre>');
    var_dump($usuario2);
    echo('</pre>');

    echo('<pre>');
    var_dump($usuario3);
    echo('</pre>');

    echo "<b>Nome:</b> {$usuario1->getNome()}<br>";
    echo "<b>Email:</b> {$usuario1->getEmail()}<br>";
    echo "<b>Senha:</b> {$usuario1->getSenha()}<br>";

    $usuario1->setNome( "Mario Atrás");
    echo "<h1><b>Nome:</b> {$usuario1->getNome()}</h1><br>";
?>