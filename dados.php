<?php
    //verificação com if
    if($_GET) {
        echo $_GET ["nome"];
        $idade = $_GET ["idade"];
        if($idade >= 18){
            echo("<br><b>Pode votar!</b>");
        } else {
            echo("<br><b>Não pode votar!</b>");
        }
    } else {
        //redirecionar para a página index.html
        header("location:index.html");
    }

    //Comandos:

    echo("Olá mundo!");
    print'Olá mundo';
    var_dump('Olá mundo');

    $nome = 'Olá mundo';
    echo('$nome');

    $idade = 25;
    $valor = 25.9;

    echo $nome . "idade: " . $idade;

    // +, -, *, /, %

    $a = 10;
    $a = 15;

    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
    echo $a % $b;

    // ==, !=, ===, !==, >, <, >= e <= (msm coisa do js)

    // &&, ||, ! (MSM coisa do js)

    //Funções PHP

    function saudacao ($nome, $idade) {
        return "Olá, $nome, sua idade é: $idade";
    }

    echo saudacao("Pietro!", 20);

    //if, else, elseif

    if ($idade >= 18) {
        echo('Você é maior de idade!');
    } else {
        echo('Não é maior de idade!');
    }

    $senha = 1234;

    if ($senha == 1234) {
        echo('Pode entrar!');
    } else if ($senha == 123 || $senha == 12345) {
        echo('Quase, quer um email de recuperação?');
    } else{
        echo('Senha incorreta!');
    }

    //switch case

    $semana = 1;

    switch ($semana) {
        case 1 : echo ('Hoje é Segunda!'); break;
        case 2 : echo ('Hoje é Terça!'); break;
        case 3 : echo ('Hoje é Quarta!'); break;
        case 4 : echo ('Hoje é Quinta!'); break;
        case 5 : echo ('Hoje é Sexta!'); break;
        case 6 : echo ('Hoje é Sábado!'); break;
        case 7 : echo ('Hoje é Domingo!'); break;
        default: echo 'O seu planeta não segue o calendário romano!';
    }

    //for , while

    for ($i = 0; $i < 18; $i++){
        echo("Não pode votar!, tem $i anos <br>");
    }

    $age = 0;
    while($age < 18) {
        echo("Não pode votar!, tem $age anos <br>");
        $age++;
    }

    //array

    $frutas = ['maça','laranja','banana'];

    print($frutas);
    foreach ($frutas as $fruta){
        echo $fruta . '<br>';
    }

    //classes

    class Pessoa {
        //criando atributos
        public $nome;
        public $idade;

        //criando métodos
        public function saudar() {
            //acessa uma variável de fora
            return "Olá, meu nome é " . $this->nome;
        }
    }

    //objetos

    $pessoa = new Pessoa();
    $pessoa->nome = "Pietro";
    echo $pessoa->saudacao();

?>


