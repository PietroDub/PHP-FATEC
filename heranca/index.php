<?php
    require_once "pessoa.class.php";
    require_once "fisica.class.php";
    require_once "juridica.class.php";

    $pessoaFisica = new Fisica("123.123.123.345-34","Sacul Bardelli",
     "(14) 9999992929", "Rua XV de Novembro, 123");

    echo "<pre>";
    var_dump($pessoaFisica);
    echo "</pre>";

    echo $pessoaFisica -> inserir($pessoaFisica);

    //tentando criar direto do obj pai (abstrato)
    $pessoa = new Pessoa("Sacul Bardelli",
     "(14) 9999992929", "Rua XV de Novembro, 123");
?>