<?php
    //usuario.class.php, quando o arquivo é uma classe
    class Usuario {
        public function __construct( private string $nome = "", 
         private string $email = "", 
         private string $senha = ""){

        }

        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
    } //fim da classe
      
    //criando um objeto

    // $usuario1 = new Usuario("Mario", "mario@armario.com", "mario30");
    // $usuario2 = new Usuario("", "mario@armario.com", "mario30"); //deixar vazio quando não tem
    // $usuario3 = new Usuario(email:"mario@armario.com",senha:"mario30"); //ordem não importa

    // echo('<pre>');
    // var_dump($usuario1);
    // echo('</pre>');

    // echo('<pre>');
    // var_dump($usuario2);
    // echo('</pre>');

    // echo('<pre>');
    // var_dump($usuario3);
    // echo('</pre>');

    // echo "<b>Nome:</b> {$usuario1->nome}<br>";
    // echo "<b>Email:</b> {$usuario1->email}<br>";
    // echo "<b>Senha:</b> {$usuario1->senha}<br>";

    // $usuario1->nome = "Mario Atrás";
    // echo "<h1><b>Nome:</b> {$usuario1->nome}</h1><br>";

?>